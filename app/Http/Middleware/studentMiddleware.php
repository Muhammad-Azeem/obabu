<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class studentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user() && $request->user()->type != 4)
        {
            dd($request->user()->type);
            return redirect('/');
        }
        return $next($request);
    }
}