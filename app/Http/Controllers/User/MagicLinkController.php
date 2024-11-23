<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

use MagicLink\MagicLink;
use App\Mail\UserMagicLink;
use MagicLink\Actions\LoginAction;

use App\Models\User;

use Auth;
use Validator;
use Redirect;

class MagicLinkController extends Controller
{

    public function enter(){
        try {
            return view('magic_link.enter');

        } catch (\Exception $e){
            abort(400);
        }

    }


    public function enterExpired(){
        try {

            return view('magic_link.expired_magic_link');

        } catch (\Exception $e){
            abort(400);
        }

    }

    public function sendMagicLink(Request $request){
        try{

            $data = $request->validate([
                'email'         => 'required|email',
             ]);

            $email = $data['email'];

            $user = User::where('email', $email)->firstOrFail();

            // Sample 1; Login and redirect to dash board
            $action = new LoginAction($user);
            $action->response(redirect('/'));

            $lifetime = 30; // 30 minutes
            $urlToDashBoard = MagicLink::create($action, $lifetime)->url;

            Mail::to($email)->queue(new UserMagicLink($urlToDashBoard));

            return view('magic_link.magic_link_sent');

        } catch (\Exception $e){
            return back()->with('error', 'Sorry. Your email was not found.');
        }
    }


}
