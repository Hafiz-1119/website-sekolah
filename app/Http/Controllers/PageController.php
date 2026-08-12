<?php

namespace App\Http\Controllers;

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
        return view('galeri');
    }

    public function kontak()
    {
        return view('kontak');
    }
}