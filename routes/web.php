<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| HALAMAN PUBLIK
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/profil', [PageController::class, 'profil'])->name('profil');

Route::get('/berita', [PageController::class, 'berita'])->name('berita');

Route::get('/galeri', [PageController::class, 'galeri'])->name('galeri');

Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');


/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

// Halaman Login
Route::get('/admin/login', [AdminController::class, 'login'])
    ->name('admin.login');

Route::post('/admin/login', [AdminController::class, 'authenticate'])
    ->name('admin.authenticate');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard');

Route::post('/admin/logout', [AdminController::class, 'logout'])
    ->name('admin.logout');