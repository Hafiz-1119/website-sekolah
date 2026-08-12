<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/profil', [PageController::class, 'profil'])->name('profil');

Route::get('/berita', [PageController::class, 'berita'])->name('berita');

Route::get('/galeri', [PageController::class, 'galeri'])->name('galeri');

Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');