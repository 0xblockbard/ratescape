<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User;
use App\Post;
use App\Story;
use App\Featured;
use Auth;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->navProfile();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function navProfile()
    {
        view()->composer('partials.nav', function($view)
        {

            if(Auth::check()){

                $user = Auth::user();

                $view->with(compact('user'));

            } else {
                // do nothing
            }

        });
    }


}
