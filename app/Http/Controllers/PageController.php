<?php

namespace App\Http\Controllers;
use App\Models\Galeri;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function profil()
    {
        return view('profil');
    }

    public function berita()
    {
    $judul = "Berita Terbaru SMP NEGERI 2 PENAWANGAN";
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