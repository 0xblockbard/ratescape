<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Redirect;
use Illuminate\Http\Request;
use Spatie\Image\Image;
use Illuminate\Support\Str;
use Validator;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function show(){

        return view('admin.admin_overview');
    }



}
