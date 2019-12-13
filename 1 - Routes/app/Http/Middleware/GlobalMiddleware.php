<?php

namespace App\Http\Middleware;

use Closure;

class GlobalMiddleware
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
        echo 'Global Middleware!';
        return $next($request);
    }
}
