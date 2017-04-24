<?php

namespace App\Http\Middleware;

use Closure;

class TerminateMiddleware
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
        return $next($request);
    }

    public function terminate($request, $response) {

        //http响应发送到浏览器之后做一些操作，比如存session
        
    }
}
