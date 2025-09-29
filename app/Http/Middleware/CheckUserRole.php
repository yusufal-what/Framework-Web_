<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     * @param string ...$roles Daftar role yang diizinkan, dipisahkan koma dari route.
     */
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        // 1. Pastikan pengguna sudah login
        if (!Auth::check()) {
            return redirect('login'); // Arahkan ke halaman login
        }

        $user = Auth::user();

        // 2. Ambil role user langsung dari kolom role (string)
        $userRole = $user->role;

        // 3. Cek apakah role pengguna ada dalam daftar role yang diizinkan
        if ($userRole && in_array($userRole, $roles)) {
            return $next($request); // Lanjut ke Controller
        }

        // 4. Jika tidak diizinkan, tolak akses
        abort(403, 'Akses Ditolak. Anda tidak memiliki izin untuk mengakses halaman ini.');
    }
}
