<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\userController ;
use Illuminate\Routing\Redirector;


class IsUserUser
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
        if (Auth::user()->role == 'user')
            return $next($request); //process request normally if user
     elseif (Auth::user()->role == 'admin')
            return redirect('adminpanel'); //go to admin index page if he is admin trying to open user page

     elseif (Auth::user()->role == 'RManager')
       return redirect('restaurant'); //go to admin index page if he is admin trying to open user page

     else
            return redirect('/'); //home page if neither user nor admin
    }
}
