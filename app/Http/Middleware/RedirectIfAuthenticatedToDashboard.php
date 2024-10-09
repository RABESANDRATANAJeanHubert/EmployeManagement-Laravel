<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticatedToDashboard
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
        // If the user is authenticated and tries to access a route other than dashboard
        if (Auth::check() && $request->path() !== 'dashboard') {
            return redirect()->route('dashboard');
        }

        return $next($request);
    }
}
