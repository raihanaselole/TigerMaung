<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        // Pastikan pengguna sudah terautentikasi
        if (!Auth::check()) {
            abort(403, 'Unauthorized action. Please log in first.');
        }

        // Redirect untuk role administrator ke /users
        if (Auth::user()->role === 'administrator') {
            // Jika peran administrator mengakses halaman selain /users, redirect ke /users
            if ($request->is('dashboard*') || $request->is('progres*') || $request->is('reminders*') || $request->is('statistik*')) {
                return redirect()->route('users.index');
            }
        }

        // Cek jika role yang diminta sesuai dengan role pengguna
        if (Auth::user()->role !== $role) {
            if ($role === 'mahasiswa') {
                abort(403, 'Only administrators can access this page.');
            } elseif ($role === 'administrator') {
                abort(403, 'Only administrator can access this page.');
            }
        }

        return $next($request);
    }
}
