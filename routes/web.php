<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DashboardController;

// Route Halaman Depan (Portfolio)
Route::get('/', [HomeController::class, 'index']);
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

// 1. Route Menampilkan Halaman Login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// 2. Route Proses Login (Simulasi)
Route::post('/login', function (\Illuminate\Http\Request $request) {
    // Di sini nanti logika validasi User sesungguhnya (Auth::attempt)
    // Untuk demo visual, kita langsung redirect ke dashboard

    return redirect()->route('admin.dashboard');
})->name('login.post');

// --- Route Admin Dashboard (BARU) ---
// Nanti sebaiknya dikelompokkan dengan middleware 'auth' jika sudah ada login
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard'); // Mengarah ke file dashboard.blade.php
    })->name('admin.dashboard');

    // Contoh route lain nantinya:
    // Route::get('/projects', [AdminProjectController::class, 'index']);
    // Route::get('/users', [UserController::class, 'index']);
});
