<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


use Auth;

class IsConsuser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user() && ( Auth::user()->clienttype == 'respqualite' || Auth::user()->clienttype == 'respproduction' || Auth::user()->clienttype == 'respadv'  || Auth::user()->clienttype == 'resplogistique' ) ) {
        return $next($request);
        }
        return redirect('/login')->with('error','You have not admin access');
    }
}
