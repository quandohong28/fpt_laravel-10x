<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
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
        // if (Auth::check() && Auth::user()->is_admin == 1)
        // {
        //     return $next($request);
        // }

        // elseif (Auth::check() && Auth::user()->is_admin == 0)
        // {
        //     return redirect()->route('page.home')->with('error', 'You are not authorized to access this page');
        // }

        // return redirect()->route('page.home')->with('error', 'You are not authorized to access this page');

        if (Auth::check()) {
            $user = Auth::user();

            if ($user->is_admin == 1) {
                return $next($request);
            }

            return redirect()->route('page.home')->with('success', 'Login successfully');
        }

        return redirect()->route('page.home')->with('error', 'You have to login first');
    }
}
