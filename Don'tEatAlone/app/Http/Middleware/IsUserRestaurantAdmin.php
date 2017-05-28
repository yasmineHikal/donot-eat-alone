<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsUserRestaurantAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       if (Auth::user()->role == 'RManager')
           return $next($request); //process request normally if user

     elseif (Auth::user()->role == 'admin')
           return redirect('adminpanel'); //go to admin index page if he is admin trying to open user page
         elseif (Auth::user()->role == 'user')
           return redirect('home'); //go to admin index page if he is admin trying to open user page
        else
           return redirect('/'); //home page if neither user nor admin
    }



}
