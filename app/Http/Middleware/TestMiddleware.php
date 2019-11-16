<?php

namespace App\Http\Middleware;

use Closure;

class TestMiddleware
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
        echo 'I am coming from test middleware before request is going to controller';
        return $next($request);
    }

    public function terminate($request, $response) {
        echo 'I am coming from the test middleware after the request is responded';
    }
}
