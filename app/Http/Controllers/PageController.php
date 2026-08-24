<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HALAMAN HOME
    |--------------------------------------------------------------------------
    */

    public function home()
    {
        return view('home');
    }


    /*
    |--------------------------------------------------------------------------
    | HALAMAN PROFIL
    |--------------------------------------------------------------------------
    */

    public function profil()
    {
        return view('profil');
    }


    /*
    |--------------------------------------------------------------------------
    | HALAMAN BERITA
    |--------------------------------------------------------------------------
    */

    public function berita()
    {
<<<<<<< HEAD
    $judul = "Berita Terbaru SMP NEGERI 2 PENAWANGAN";
    $tanggal = "9 Agustus 2026";
    $penulis = "Admin Sekolah";

    return view('berita', [
        'judul' => $judul,
        'tanggal' => $tanggal,
        'penulis' => $penulis
    ]);
=======
        return view('berita');
>>>>>>> a9f510c9f0f85e3a4fca1a71eeb3eb45ada09ca9
    }


    /*
    |--------------------------------------------------------------------------
    | DETAIL BERITA
    |--------------------------------------------------------------------------
    |
    | Saat pengguna mengklik berita pertama, method ini akan
    | mengirim data berita ke halaman detail-berita.blade.php
    |
    */

    public function detailBerita()
    {
        $berita = [

            'judul' =>
                'Siswa SMP Negeri 2 Penawangan Raih Juara Olimpiade Matematika',

            'kategori' =>
                'Prestasi',

            'tanggal' =>
                '17 Agustus 2026',

            'gambar' =>
                'images/berita/berita1.jpeg',

            'isi' => [

                'Prestasi membanggakan kembali diraih oleh siswa SMP Negeri 2 Penawangan dalam ajang olimpiade matematika.',

                'Prestasi tersebut menjadi bukti semangat belajar, kerja keras, dan kemampuan siswa dalam mengembangkan potensi akademiknya.',

                'Keberhasilan ini tentunya menjadi kebanggaan bagi sekolah, guru, orang tua, dan seluruh warga sekolah.',

                'Pihak sekolah memberikan apresiasi kepada siswa yang telah berhasil meraih prestasi tersebut. Prestasi ini diharapkan dapat menjadi motivasi bagi siswa lainnya untuk terus belajar, mengembangkan kemampuan, dan mengharumkan nama sekolah.',

                'Dengan adanya prestasi ini, sekolah akan terus memberikan dukungan kepada siswa untuk mengikuti berbagai kegiatan akademik maupun nonakademik di tingkat daerah maupun tingkat yang lebih tinggi.'
            ]
        ];


        return view(
            'detail-berita',
            compact('berita')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | HALAMAN GALERI
    |--------------------------------------------------------------------------
    */

    public function galeri()
    {
        return view('galeri');
    }


    /*
    |--------------------------------------------------------------------------
    | HALAMAN KONTAK
    |--------------------------------------------------------------------------
    */

    public function kontak()
    {
        return view('kontak');
    }
}