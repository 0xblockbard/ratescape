<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Validator;
use App\Http\Controllers\Controller;


class AdminApiController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function toggleSidebar(){
        try{

            if(session()->has('toggleSidebar')) {
                session()->put('toggleSidebar', !session('toggleSidebar'));
            } else {
                session()->put('toggleSidebar', true);
            }

            return response()->json([
                'session' => session()->get('toggleSidebar')
            ], 200);

        } catch(\Exception $e){
            abort(404);
        }
    }

}

