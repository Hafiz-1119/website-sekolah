<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\Admin\GuruController;


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
|
| Untuk sementara masih diarahkan ke method berita().
| Nanti ketika fitur berita detail dibuat, bagian ini
| bisa kita ubah ke method detailBerita().
|
*/

Route::get('/berita/{id}', [PageController::class, 'berita'])
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
    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');


    /*
    |--------------------------------------------------------------------------
    | LOGOUT
    |--------------------------------------------------------------------------
    */

    Route::post('/admin/logout', [AdminController::class, 'logout'])
        ->name('admin.logout');


    /*
    |--------------------------------------------------------------------------
    | HALAMAN ADMIN
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/berita', [AdminController::class, 'berita'])
        ->name('admin.berita');

    Route::get('/admin/galeri', [GaleriController::class, 'index'])
        ->name('admin.galeri');

    Route::get('/admin/profil', [ProfilController::class, 'edit'])
        ->name('admin.profil');
    Route::put('/admin/profil/update', [ProfilController::class, 'update'])
        ->name('admin.profil.update');

    Route::get('/admin/guru', [AdminController::class, 'guru'])
        ->name('admin.guru');

    Route::get('/admin/prestasi', [AdminController::class, 'prestasi'])
        ->name('admin.prestasi');


    /*
    |--------------------------------------------------------------------------
    | ADMIN GALERI - CRUD
    |--------------------------------------------------------------------------
    */
    
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