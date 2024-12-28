<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RestrictKecamatanAccess
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        $currentPath = $request->path();

        if ($user && ($user->is_admin && strpos($currentPath, 'admin') !== false)) {
            return $next($request);
        } elseif ($user && (!$user->is_admin && strpos($currentPath, 'kecamatan') !== false)) {
            return $next($request);
        }

        abort(403, 'You are not authorized to access this page.');
    }
}
