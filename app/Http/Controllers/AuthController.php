<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    // 1. Menampilkan Form Login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // 2. Proses Logika Login
    public function login(Request $request): RedirectResponse
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Coba login (Auth::attempt akan otomatis mengecek hash password di DB)
        // Parameter ke-2 adalah 'remember me' (true/false)
        if (Auth::attempt($credentials, $request->filled('remember'))) {

            // Regenerasi session ID untuk mencegah Session Fixation attack
            $request->session()->regenerate();

            // Redirect ke dashboard admin
            return redirect()->intended(route('admin.dashboard'));
        }

        // Jika gagal login, kembali ke halaman login dengan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    // 3. Proses Logout
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        // Invalidate session agar tidak bisa dipakai lagi
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
