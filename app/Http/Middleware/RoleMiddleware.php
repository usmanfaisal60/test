<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed\App\Http\Middleware
     */
    public function handle($request, Closure $next, $role)
    {
        echo 'Role is '.$role;
        return $next($request);
    }
}
