<?php

namespace App\Http\Controllers;
use App\Models\Galeri;
use App\Models\Profil;
use App\Models\Guru;
use App\Models\Prestasi;

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

        return view('profil', compact('profil','guruStaff'));
    }

    public function berita()
    {
    $judul = "Berita Terbaru MAN 1 Surakarta";
    $tanggal = "9 Agustus 2026";
    $penulis = "Admin Sekolah";

    return view('berita', [
        'judul' => $judul,
        'tanggal' => $tanggal,
        'penulis' => $penulis
    ]);
    }

public function galeri()
    {
        $galeris = Galeri::latest()->get();

        return view('galeri', compact('galeris'));
    }

    public function kontak()
    {
        return view('kontak');
    }
    
}