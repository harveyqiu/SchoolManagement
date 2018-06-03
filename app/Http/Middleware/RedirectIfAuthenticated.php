<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $url = '';
            if ($guard = 'student') {
                $url = 'society/dashboard/';
            } elseif ($guard = 'admin') {
                $url = 'society/admin/dashboard';
            }
            // todo: ??? unknown code
            return redirect($url);
        }

        return $next($request);
    }
}
