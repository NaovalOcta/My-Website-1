<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

// --- PUBLIK (Bisa diakses siapa saja) ---
Route::get('/', [HomeController::class, 'index']);
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

// --- AUTENTIKASI (Login/Logout) ---
// Middleware 'guest' artinya yang sudah login TIDAK BISA akses halaman ini (langsung dilempar ke dashboard)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// --- ADMIN DASHBOARD (Terproteksi) ---
// Middleware 'auth' artinya HARUS login dulu baru bisa akses
Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Nanti tambahkan route admin lain di sini, misal:
    // Route::resource('projects', AdminProjectController::class);
});
