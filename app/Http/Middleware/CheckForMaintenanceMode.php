<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

class CheckForMaintenanceMode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if maintenance mode is enabled
        if (app()->isDownForMaintenance()) {
            // Allow admin users to access the site during maintenance
            if (Auth::check() && Auth::user()->is_admin) {
                return $next($request);
            }
            
            // For non-admin users, show maintenance page
            if ($request->wantsJson()) {
                return response()->json([
                    'error' => 'Service Unavailable',
                    'message' => 'The application is currently under maintenance.',
                ], 503);
            }
            
            return response()->view('errors.503', [], 503);
        }

        return $next($request);
    }
}