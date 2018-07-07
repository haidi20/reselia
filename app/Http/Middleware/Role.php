<?php

namespace App\Http\Middleware;

use Closure;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        // return $next($request);

        if (\Auth::user()->can($role. '-access')) {
          return $next($request);
        }

        return response('Unauthorized', 401);
    }
}
