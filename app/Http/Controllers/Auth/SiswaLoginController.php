<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaLoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('nis', 'password');
        $siswa = Siswa::where('nis', $credentials['nis'])->first();

        if ($siswa && Hash::check($credentials['password'], $siswa->password)) {
            Session::put('siswa', $siswa->id);

            // Redirect berdasarkan status siswa
            if ($siswa->status == 1) {
                return redirect()->route('berhasil');
            } else {
                return redirect()->route('voter');
            }
        }

        return redirect()->back()->withInput($request->only('nis'))->withErrors(['nis' => 'NIS atau Pasword salah']);
    }

    public function logout()
    {
        Session::forget('siswa');
        return redirect()->route('siswa.login');

    }
}
