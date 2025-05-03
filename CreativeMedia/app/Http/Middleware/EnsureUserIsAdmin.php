<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Autentikasi User
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect('/login')->with('error', 'Anda tidak punya akses ke halaman admin.');
        }

        return $next($request);
    }
}