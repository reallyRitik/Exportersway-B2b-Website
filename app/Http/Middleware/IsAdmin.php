<?php

namespace App\Http\Middleware;

use Auth;
use App\User;
use Closure;

use App\Role;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user() &&  Auth::user()->role_id == 1) {
            return $next($request);
        }elseif (Auth::user() && Auth::user()->role_id == 2) {
            return redirect('/user');
        }
        return redirect('/');
    }
   
}
