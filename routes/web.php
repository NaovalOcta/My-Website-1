<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DashboardController;

Route::get('/', [HomeController::class, 'index']);

// Route Project sekarang memanggil Controller
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
