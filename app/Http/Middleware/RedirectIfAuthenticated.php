<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard) {
            case 'admin':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('uxclubadmin');
                }
                break;

            case 'web':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('uxclub');
                }
            break;
            
            
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('uxclub');
                }
                break;
        }

        return $next($request);
    }
}
