<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // 1. PERBAIKAN: Wajib import Auth facade
use Symfony\Component\HttpFoundation\Response;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  ...$roles  // 2. PERBAIKAN: Menerima parameter role dari route
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // 1. Cek apakah pengguna sudah login 
        if (!Auth::check()) { 
            return redirect('/login'); 
        } 

        // 2. Cek apakah role pengguna ada di dalam daftar role yang diizinkan
        // in_array digunakan supaya middleware ini bisa menerima lebih dari 1 role
        if (!in_array(Auth::user()->role, $roles)) { 
            // Jika tidak sesuai, tampilkan halaman Error 403
            abort(403, 'Akses Ditolak! Anda tidak memiliki izin untuk membuka halaman ini.'); 
        } 

        // Jika semua syarat terpenuhi, persilakan pengguna melanjutkan ke Controller 
        return $next($request);
    }
}