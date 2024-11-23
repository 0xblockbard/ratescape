<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitContactRequest;
use App\Models\ContactMessage;
use App\Models\Blogpost;
use App\Models\Role;
use App\Models\Page;
use App\Models\User;
use App\Notifications\NewContactMessageNotification;
use Auth;
use Redirect;
use Illuminate\Http\Request;
// use OpenAI\Laravel\Facades\OpenAI;

class PagesController extends Controller
{

    public function home(){
        try {
            return view('home');
        } catch(\Exception $e){            
            abort(400);
        }
    }


    public function about(){
        try{

            $page = Page::published()->where('slug', 'about')->firstOrFail();
            return view('pages.about', compact('page'));

        } catch(\Exception $e){
            abort(400);
        }
    }

    public function blog(){
        try{

            $page = Page::published()->where('slug', 'blog')->firstOrFail();
            $posts = Blogpost::published()->latest()->get();
            
            return view('pages.blog', compact('page', 'posts'));

        } catch(\Exception $e){
            abort(400);
        }
    }


    public function contact(){
        try{

            $page = Page::published()->where('slug', 'contact')->firstOrFail();
            return view('pages.contact', compact('page'));

        } catch(\Exception $e){
            abort(400);
        }
    }



    public function submitContact(SubmitContactRequest $request){
        try{

            $enquiry = new ContactMessage([
                'name'          => $request->get('name'),
                'email'         => $request->get('email'),
                'subject'       => $request->get('subject'),
                'message'       => $request->get('message')
            ]);

            $enquiry->save();

            $admin = User::where('id', 1)->first();
            $admin->notify(New NewContactMessageNotification($enquiry));

            return Redirect::back()->with('success', 'Your message has been sent!');

        } catch(\Exception $e){
            dd($e);
            abort(400);
        }
    }



    public function show($slug){
        try{

            $page = Page::where('slug', $slug)->where('status', 1)->firstOrFail();

            return View('pages.show', compact('page'));

        } catch(\Exception $e){
            abort(400);
        }
    }

}
