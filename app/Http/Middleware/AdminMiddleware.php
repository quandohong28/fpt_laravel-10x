<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->is_active == 1) {
            if (Auth::user()->is_admin == 1) {
                return $next($request);
            } else {
                return redirect()->route('page.home')->with('error', 'You are not authorized to access this page');
            }
        } elseif (Auth::check() && Auth::user()->is_active == 0) {
            Auth::logout();
            return redirect()->route('auth.login')->with('error', 'Your account has been disabled');
        }
        
        return redirect()->route('page.home')->with('error', 'Please log in to access this page');
    }
}
