<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RTMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $user = auth()->user();

        // Admin can access everything
        if ($user->isAdmin()) {
            return $next($request);
        }

        // RT can only access their own data
        if ($user->isRT()) {
            // Check if the request is trying to access data from another RT
            $rtNumber = $request->route('rt_number') ?? $request->input('rt_number');
            
            if ($rtNumber && $rtNumber !== $user->rt_number) {
                abort(403, 'Anda hanya dapat mengakses data RT Anda sendiri.');
            }

            return $next($request);
        }

        // If user is neither admin nor RT, redirect to login
        return redirect()->route('login');
    }
}
