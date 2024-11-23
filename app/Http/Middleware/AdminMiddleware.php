<?php

namespace App\Http\Middleware;

use Closure;
use Auth;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()) {

            $admin = $request->user()->isAdmin();

            if (!$admin) {
                return redirect('login');
            }
        } else {
            return redirect('login');
        }

        return $next($request);    }
}
