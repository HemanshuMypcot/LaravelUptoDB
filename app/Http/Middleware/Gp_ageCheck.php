<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Gp_ageCheck
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
        if($request->umar && $request->umar<18){
            return redirect('noaccess1');
        }
        return $next($request);
    }
}
