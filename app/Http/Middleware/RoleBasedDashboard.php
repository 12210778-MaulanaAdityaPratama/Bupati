<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleBasedDashboard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Pastikan pengguna sudah login
        if (!Auth::check()) {
            return redirect()->route('filament.auth.login');
        }

        $user = Auth::user();

        // Redirect ke panel sesuai role
        if ($user->role === 'admin') {
            return redirect()->route('filament.admin.pages.dashboard');
        } elseif ($user->role === 'kecamatan') {
            return redirect()->route('filament.kecamatan.pages.dashboard');
        }

        return $next($request);
    }
}
