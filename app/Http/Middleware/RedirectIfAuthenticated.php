<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) { //check if currently signed in, similar to Auth::check()
            //dependency injection rather than facade
            //example: if signed in you don't need too see signup page, so redirect to dashboard
            return redirect('/');
        }

        return $next($request);
    }
}
