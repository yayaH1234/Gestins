<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


use Auth;

class IsCommercial
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
        if (\Auth::user() &&  \Auth::user()->clienttype == 'commercial') {
        return $next($request);
    }

    return redirect('/login')->with('error','You have not role access');
    }
}
