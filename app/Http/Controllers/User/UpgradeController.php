<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Auth;
use Stevebauman\Purify\Facades\Purify;
use Stripe\Stripe;
use App\Models\Plan;
use Illuminate\Http\Response;
use Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;
use App\Http\Controllers\Controller;

class UpgradeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        Stripe::setApiKey(env('STRIPE_SECRET'));
    }

    public function upgrade(Request $request){
        try{

            $user = Auth::user();

            $plan      = Purify::clean($request->get('plan'));
            $plan_type = Purify::clean($request->get('plan_type'));

            $user->newSubscription($plan_type, $plan)
//                    ->withCoupon($coupon)
                ->create($request->input('stripePaymentMethod'), [
                    'email' => $user->email,
                ]);

            // activity logging
            activity('upgrade')
                ->causedBy($user)
                ->log('New membership upgrade to '.$plan_type.': '.$user->name . ' (' . $user->email . ').');

            if($plan_type == 'basic'){
                $user->attachRole('basic');
                return Redirect::route('home')->with('message', 'You have unlocked basic access to Mockup Gen!');
            } elseif($plan_type == 'pro'){
                $user->attachRole('pro');
                return Redirect::route('home')->with('message', 'You have unlocked full access to Mockup Gen!');
            }

        } catch(\Exception $e){
            abort(400);
        }

    }


    public function show(){
        try{

            $user = Auth::user();

            return view('user.upgrade.upgrade_show', compact('user'));

        } catch (\Exception $e){
            abort(400);
        }
    }

    public function upgradeFree(){
        try{

            if(!Auth::check()){
                abort(403);
            }

            $user   = Auth::user();

            $intent = $user->createSetupIntent();

            return view('user.upgrade.upgrade_free', compact('user', 'intent'));

        } catch (\Exception $e){
            abort(400);
        }
    }

    public function upgradePro(){
        try{

            if(!Auth::check()){
                abort(403);
            }

            $user   = Auth::user();

            $intent = $user->createSetupIntent();

            return view('user.upgrade.upgrade_pro', compact('user', 'intent'));

        } catch (\Exception $e){
            abort(400);
        }
    }

    public function upgradeBasic(){
        try{

            if(!Auth::check()){
                abort(403);
            }

            $user   = Auth::user();

            $intent = $user->createSetupIntent();

            return view('user.upgrade.upgrade_basic', compact('user', 'intent'));

        } catch (\Exception $e){
            abort(400);
        }
    }

    public function changePlan(Request $request){
        try{

            $user = Auth::user();

            $current_plan = $user->subscriptions->first();

            $new_plan_type = $request->get('plan_type'); // pro / basic

            // If current plan is the same as new plan
            if($current_plan->name == $new_plan_type){
                return Redirect::back()->with('warning', 'You are already subscribed to this plan.');
            }

            $new_plan = Plan::where('stripe_plan', $request->get('plan'))->first();
            $new_plan_id = $new_plan->stripe_plan;

            $user->subscription($current_plan->name)->swap($new_plan_id);

            $current_plan->name = $request->get('plan');
            $current_plan->save();

            if($new_plan_type == 'pro'){
                // user upgrade from basic plan to pro plan
                $user->detachRole('basic');
                $user->attachRole('pro');

                // activity logging
                activity('upgrade')
                    ->causedBy($user)
                    ->log('Membership upgrade from basic to pro: '.$user->name . ' (' . $user->email . ').');

            } elseif($new_plan_type == 'basic'){
                // user downgrade from pro plan to basic plan
                $user->detachRole('pro');
                $user->attachRole('basic');

                // activity logging
                activity('upgrade')
                    ->causedBy($user)
                    ->log('Membership downgrade from pro to basic: '.$user->name . ' (' . $user->email . ').');
            }

//            return Redirect::back()->with('success', 'Your plan has been successfully updated');
            return Redirect::route('home')->with('success', 'Your plan has been successfully updated!');

        } catch(\Exception $e){
            abort(400);
        }
    }

    public function cancelPlan(){
        try{
            $user = Auth::user();

            $subscription_name = $user->subscriptions->first()->name;

            $user->subscription($subscription_name)->cancel();

            if($user->hasRole('basic')){
                $user->detachRole('basic');

                // activity logging
                activity('upgrade')
                    ->causedBy($user)
                    ->log('Membership downgrade from basic to free: '.$user->name . ' (' . $user->email . ').');

            } elseif($user->hasRole('pro')){
                $user->detachRole('pro');

                // activity logging
                activity('upgrade')
                    ->causedBy($user)
                    ->log('Membership downgrade from pro to free: '.$user->name . ' (' . $user->email . ').');
            }

            return Redirect::route('upgrade')->with('warning', 'Your subscription has been cancelled.');

        } catch(\Exception $e){
            abort(400);
        }
    }


}
