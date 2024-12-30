<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return $next($request);
        }

        $user = Auth::user();
        if ($user->role !== $role) {
            return redirect('/'); // Atau halaman yang sesuai
        }

        return $next($request);
    }
}
