<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SiswaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session::has('siswa')) {
            $siswaId = Session::get('siswa');
            $siswa = \App\Models\Siswa::findOrFail($siswaId);

            if ($siswa) {
                // Set siswa pada request agar dapat diakses di controller
                $request->attributes->set('siswa', $siswa);
                return $next($request);
            }

            // Jika siswa tidak ditemukan, hapus session dan redirect ke halaman login
            Session::forget('siswa');
        }

        // Jika session 'siswa' tidak ada, redirect ke halaman login
        return redirect()->route('siswa.login');
    }
}