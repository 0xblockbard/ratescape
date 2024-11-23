<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Validator;
use Redirect;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use Stripe\ApiOperations\Create;
use Stripe\ApiOperations\Update;

use App\Models\User;

use App\Http\Requests\AdminRequests\UserRequests\CreateNewUserRequest;
use App\Http\Requests\AdminRequests\UserRequests\UpdateUserRequest;

use App\Traits\HelpersTrait;

class UserController extends Controller
{

    public function overview(){
        try{

            $users = User::orderBy('created_at', 'desc')->get();

            return view('admin.users.overview_users', compact('users'));

        } catch(\Exception $e){
            abort(400);
        }
    }

    public function create(){
        try{

            return view('admin.users.create_user');

        } catch(\Exception $e){
            abort(400);
        }
    }

    public function store(CreateNewUserRequest $request){
        try{

            $user = new User();

            $user->name     = $request->get('name');
            $user->email    = $request->get('email');
            $user->password = Hash::make($request->get('password'));

            $user->uuid                 = $this->generatePseudoUUID(12);
            $user->email_verified_at    = NULL;
            $user->remember_token       = NULL;
            $user->last_login           = NULL;

            $user->save();

            return Redirect::route('admin_users_edit', $user->uuid)->with('message', 'New user has been created!');

        } catch(\Exception $e){
            abort(400);
        }
    }

    public function edit($uuid){
        try{

            $user = User::where('uuid', $uuid)->firstOrFail();

            return view('admin.users.edit_user', compact('user'));

        } catch(\Exception $e){
            abort(400);
        }
    }

    public function update($uuid, UpdateUserRequest $request){
        try{

            $user = User::where('uuid', $uuid)->firstOrFail();

            $user->name     = $request->get('name');
            $user->email    = $request->get('email');

            if($request->get('password') !== NULL){
                $user->password = Hash::make($request->get('password'));
            }

            $user->save();

            return Redirect::back()->with('success', 'Changes saved.');
        } catch(\Exception $e){
            abort(400);
        }
    }

    public function delete($uuid){
        try{

            $user = User::where('uuid', $uuid)->firstOrFail();
            $user->delete();
            return Redirect::route('admin_users_overview')->with('warning', 'User '.$user->name.' ('.$user->email.') has been deleted.');

        } catch(\Exception $e){
            abort(400);
        }
    }

}
