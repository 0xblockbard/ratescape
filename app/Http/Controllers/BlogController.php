<?php

namespace App\Http\Controllers;

use App\Models\Blogpost;
use Auth;
use Redirect;

class BlogController extends Controller
{

    public function show($slug){
        try{

            $post = Blogpost::where('slug', $slug)->firstOrFail();

            if($post->status == 1){

                return View('blog.show_blogpost', compact('post'));

            } elseif ($post->status == 0){

                $isAdmin = Auth::check() ? Auth::user()->isAdmin() : False;

                if($isAdmin){
                    return View('blog.show_blogpost', compact('post'));
                } else {
                    abort(404);
                }
            }

        } catch(\Exception $e){
            abort(404);
        }
    }



}
