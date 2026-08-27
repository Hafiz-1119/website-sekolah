<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GaleriController;
<<<<<<< HEAD
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\PrestasiController;
=======
use App\Http\Controllers\BeritaController;
>>>>>>> 81cff75 (Fitur berita selesai dan perbaikan detail berita)


/*
|--------------------------------------------------------------------------
| HALAMAN PUBLIK
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'home'])
    ->name('home');

Route::get('/profil', [PageController::class, 'profil'])
    ->name('profil');

Route::get('/berita', [PageController::class, 'berita'])
    ->name('berita');


/*
|--------------------------------------------------------------------------
| DETAIL BERITA
|--------------------------------------------------------------------------
*/

Route::get('/berita/{id}', [PageController::class, 'detailBerita'])
    ->name('berita.detail');


Route::get('/galeri', [PageController::class, 'galeri'])
    ->name('galeri');

Route::get('/kontak', [PageController::class, 'kontak'])
    ->name('kontak');


/*
|--------------------------------------------------------------------------
| ADMIN - LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AdminController::class, 'login'])
    ->name('admin.login');

Route::post('/admin/login', [AdminController::class, 'authenticate'])
    ->name('admin.authenticate');


/*
|--------------------------------------------------------------------------
| ADMIN - HALAMAN YANG WAJIB LOGIN
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');

    Route::post('/admin/logout', [AdminController::class, 'logout'])
        ->name('admin.logout');


    // =========================
    // ADMIN BERITA
    // =========================

    Route::get('/admin/berita', [BeritaController::class, 'index'])
        ->name('admin.berita');

    Route::get('/admin/berita/tambah', [BeritaController::class, 'create'])
        ->name('admin.berita.create');

    Route::post('/admin/berita', [BeritaController::class, 'store'])
        ->name('admin.berita.store');

    Route::get('/admin/berita/{id}/edit', [BeritaController::class, 'edit'])
        ->name('admin.berita.edit');

    Route::put('/admin/berita/{id}', [BeritaController::class, 'update'])
        ->name('admin.berita.update');

    Route::delete('/admin/berita/{id}', [BeritaController::class, 'destroy'])
        ->name('admin.berita.destroy');


    // =========================
    // ADMIN GALERI
    // =========================

    Route::get('/admin/galeri', [GaleriController::class, 'index'])
        ->name('admin.galeri');

    Route::get('/admin/profil', [ProfilController::class, 'edit'])
        ->name('admin.profil');
    Route::put('/admin/profil/update', [ProfilController::class, 'update'])
        ->name('admin.profil.update');

    Route::get('/admin/guru', [AdminController::class, 'guru'])
        ->name('admin.guru');

    Route::get('/admin/prestasi', [PrestasiController::class, 'index'])
        ->name('admin.prestasi.index');


<<<<<<< HEAD
    /*
    |--------------------------------------------------------------------------
    | ADMIN GALERI - CRUD
    |--------------------------------------------------------------------------
    */
    
=======
    // =========================
    // ADMIN GALERI - CRUD
    // =========================

>>>>>>> 81cff75 (Fitur berita selesai dan perbaikan detail berita)
    Route::get('/admin/galeri/tambah', [GaleriController::class, 'create'])
        ->name('admin.galeri.create');

    Route::post('/admin/galeri', [GaleriController::class, 'store'])
        ->name('admin.galeri.store');

    Route::get('/admin/galeri/{id}/edit', [GaleriController::class, 'edit'])
        ->name('admin.galeri.edit');

    Route::put('/admin/galeri/{id}', [GaleriController::class, 'update'])
        ->name('admin.galeri.update');

    Route::delete('/admin/galeri/{id}', [GaleriController::class, 'destroy'])
        ->name('admin.galeri.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {

    Route::resource('guru', GuruController::class)
        ->except(['show']);
    });

});


// =========================
// ADMIN PRESTASI - CRUD
// =========================

    Route::get('/admin/prestasi/tambah', [PrestasiController::class, 'create'])
        ->name('admin.prestasi.create');

    Route::post('/admin/prestasi', [PrestasiController::class, 'store'])
        ->name('admin.prestasi.store');

    Route::get('/admin/prestasi/{id}/edit', [PrestasiController::class, 'edit'])
        ->name('admin.prestasi.edit');

    Route::put('/admin/prestasi/{id}', [PrestasiController::class, 'update'])
        ->name('admin.prestasi.update');

    Route::delete('/admin/prestasi/{id}', [PrestasiController::class, 'destroy'])
        ->name('admin.prestasi.destroy');
