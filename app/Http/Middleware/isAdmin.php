<?php

namespace App\Http\Middleware;

use Closure;

class isAdmin
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
        //if user is admin it'll go to admin page else every user will be directed to dashboard
        if(auth()->user()->isAdmin()){
            return $next($request);
        }
        return redirect('dashboard');
    }
}
