<?php

namespace App\Http\Middleware;

use Closure;

class AppDebug
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
        if (env('APP_DEBUG')) {
            return redirect('/debug/message');
        }
        return $next($request);
    }
}
