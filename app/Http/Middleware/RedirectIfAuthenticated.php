<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // Cek peran pengguna dan arahkan ke dashboard yang sesuai
                if (Auth::user()->role === 'admin') {
                    return redirect()->route('dashboard-admin');
                } elseif (Auth::user()->role === 'user') {
                    return redirect()->route('dashboard-user');
                } else {
                    // Jika tidak memiliki peran yang sesuai, arahkan ke halaman home default
                    return redirect(RouteServiceProvider::HOME);
                }
            }
        }

        return $next($request);
    }
}
