<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Typecheck
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
        if($request->session()->get('uname')=='admin')
        {
            return $next($request);
        }
        else 
        {
       // return $next($request);
            return redirect('/home');
       }
}
