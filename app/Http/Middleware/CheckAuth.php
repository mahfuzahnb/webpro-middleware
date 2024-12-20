<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Pastikan Anda mengimpor facade Auth

class CheckAuth
{
    public function handle(Request $request, Closure $next)
    {
        // Memeriksa apakah pengguna sudah terautentikasi
        if (!Auth::check()) { // Gunakan Auth::check() di sini
            return redirect()->route('login')->with('error', 'Anda perlu login untuk mengakses halaman ini.');
        }

        return $next($request); // Melanjutkan ke permintaan berikutnya jika sudah terautentikasi
    }
}
