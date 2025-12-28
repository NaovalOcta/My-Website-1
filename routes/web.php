<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;

Route::get('/', [HomeController::class, 'index']);

// Route Project sekarang memanggil Controller
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
