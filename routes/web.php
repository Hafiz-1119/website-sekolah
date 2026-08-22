<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| HALAMAN PUBLIK
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'home'])
    ->name('home');

Route::get('/profil', [PageController::class, 'profil'])
    ->name('profil');


// ==============================
// BERITA
// ==============================

Route::get('/berita', [PageController::class, 'berita'])
    ->name('berita');

// Detail berita
Route::get('/berita/{id}', [PageController::class, 'berita'])
    ->name('berita.detail');


// ==============================
// GALERI
// ==============================

Route::get('/galeri', [PageController::class, 'galeri'])
    ->name('galeri');


// ==============================
// KONTAK
// ==============================

Route::get('/kontak', [PageController::class, 'kontak'])
    ->name('kontak');


/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

// Login
Route::get('/admin/login', [AdminController::class, 'login'])
    ->name('admin.login');

Route::post('/admin/login', [AdminController::class, 'authenticate'])
    ->name('admin.authenticate');

// Logout
Route::post('/admin/logout', [AdminController::class, 'logout'])
    ->name('admin.logout');


/*
|--------------------------------------------------------------------------
| ADMIN DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard');

Route::get('/admin/berita', [AdminController::class, 'berita'])
    ->name('admin.berita');

Route::get('/admin/galeri', [AdminController::class, 'galeri'])
    ->name('admin.galeri');

Route::get('/admin/profil', [AdminController::class, 'profil'])
    ->name('admin.profil');

Route::get('/admin/guru', [AdminController::class, 'guru'])
    ->name('admin.guru');

Route::get('/admin/prestasi', [AdminController::class, 'prestasi'])
    ->name('admin.prestasi');