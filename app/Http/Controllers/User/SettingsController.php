<?php

namespace App\Http\Controllers\User;

use Auth;
use Illuminate\Http\Response;
use Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{

    public function show(){
        try{

            $user = Auth::user();

            return view('user.settings.settings', compact('user'));

        } catch (\Exception $e){
            dd($e);
        }
    }


}
