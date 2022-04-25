<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TrailingSlashes
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        if (!preg_match('/.+\/$/', $request->getRequestUri())
            && $request->route()->getName() !== 'home'
            && !count($request->query())
        )
        {
            $base_url = 'https://' . config('app.url');

            return redirect($base_url.$request->getRequestUri() . '/');
        }

        return $next($request);
    }
}
