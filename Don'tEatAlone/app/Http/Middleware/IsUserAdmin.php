<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;



class IsUserAdmin
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
        if (Auth::user()->role == 'admin')
            return $next($request); //process request normally if admin
        else
            return redirect('/'); //home page if not admin
    }

}
