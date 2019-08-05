<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use function PHPSTORM_META\elementType;

class AdminMiddleware
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
        if(Auth::check())
        {
            if(Auth::user()->role != 'admin'){
                return redirect('/student/panel');
            }

        }else
        {
            return redirect('/login');
        }

        return $next($request);
    }
}
