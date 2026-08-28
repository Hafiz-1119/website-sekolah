<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Profil;
use App\Models\Guru;
use App\Models\Prestasi;
use App\Models\Berita;

class PageController extends Controller
{
    public function home()
    {
        $prestasis = Prestasi::latest()->get();

        return view('home', compact('prestasis'));
    }

    public function profil()
    {
        $profil = Profil::first();

        $guruStaff = Guru::orderBy('kategori')
            ->orderBy('nama')
            ->get();

        return view('profil', compact('profil', 'guruStaff'));
    }

    // =========================
    // HALAMAN DAFTAR BERITA
    // =========================

    public function berita()
    {
        $beritas = Berita::latest('tanggal')->get();

        return view('berita', compact('beritas'));
    }

    // =========================
    // HALAMAN DETAIL BERITA
    // =========================

    public function detailBerita($id)
    {
        $berita = Berita::findOrFail($id);

        return view('detail-berita', compact('berita'));
    }

    // =========================
    // HALAMAN GALERI
    // =========================

    public function galeri()
    {
        $galeris = Galeri::latest()->get();

        return view('galeri', compact('galeris'));
    }

    // =========================
    // HALAMAN KONTAK
    // =========================

    public function kontak()
    {
        return view('kontak');
    }
}