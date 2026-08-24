@extends('layouts.app')

@section('content')

<style>
    /* =========================================
       RESET KHUSUS HALAMAN BERITA
    ========================================= */

    .berita-page {
        min-height: 100vh;
        padding: 60px 7% 80px;

        background:
            linear-gradient(
                rgba(242, 247, 253, 0.95),
                rgba(242, 247, 253, 0.95)
            ),
            url("{{ asset('images/bg-berita.jpg') }}");

        background-size: cover;
        background-position: center;
        background-attachment: fixed;

        font-family: Arial, Helvetica, sans-serif;
        box-sizing: border-box;
    }


    .berita-page *,
    .berita-page *::before,
    .berita-page *::after {
        box-sizing: border-box;
    }


    /* =========================================
       HEADER
    ========================================= */

    .berita-header {
        text-align: center;
        margin-bottom: 50px;
    }


    .berita-header h1 {
        margin: 0 0 12px;

        font-size: 34px;
        font-weight: 700;

        color: #123f73;
    }


    .berita-header p {
        margin: 0;

        font-size: 14px;
        line-height: 1.7;

        color: #777;
    }


    /* =========================================
       JUDUL BERITA TERBARU
    ========================================= */

    .berita-title {
        margin-bottom: 22px;
    }


    .berita-title h2 {
        margin: 0;

        font-size: 23px;
        font-weight: 700;

        color: #123f73;
    }


    /* =========================================
       GRID BERITA
    ========================================= */

    .berita-grid {
        display: grid;

        grid-template-columns: repeat(3, minmax(0, 1fr));

        gap: 24px;
    }


    /* =========================================
       CARD
    ========================================= */

    .berita-card {
        display: flex;

        flex-direction: column;

        background: #ffffff;

        border-radius: 14px;

        overflow: hidden;

        text-decoration: none;

        color: inherit;

        box-shadow:
            0 5px 20px rgba(0, 0, 0, 0.08);

        transition:
            transform 0.25s ease,
            box-shadow 0.25s ease;
    }


    .berita-card:hover {
        transform: translateY(-6px);

        box-shadow:
            0 12px 30px rgba(0, 0, 0, 0.14);
    }


    /* =========================================
       GAMBAR
    ========================================= */

    .berita-image {
        width: 100%;

        height: 190px;

        object-fit: cover;

        display: block;

        background: #e9eef4;
    }


    /* =========================================
       CONTENT
    ========================================= */

    .berita-content {
        padding: 19px;

        flex: 1;
    }


    /* =========================================
       KATEGORI
    ========================================= */

    .berita-kategori {
        display: inline-block;

        padding: 6px 10px;

        margin-bottom: 11px;

        background: #edf5ff;

        color: #15539a;

        border-radius: 20px;

        font-size: 10px;

        font-weight: 600;
    }


    /* =========================================
       JUDUL
    ========================================= */

    .berita-content h3 {
        margin: 0 0 10px;

        color: #123f73;

        font-size: 16px;

        line-height: 1.45;
    }


    /* =========================================
       TANGGAL
    ========================================= */

    .berita-date {
        margin-bottom: 11px;

        color: #888;

        font-size: 11px;
    }


    /* =========================================
       RINGKASAN
    ========================================= */

    .berita-content p {
        margin: 0 0 16px;

        color: #777;

        font-size: 12px;

        line-height: 1.7;
    }


    /* =========================================
       BACA SELENGKAPNYA
    ========================================= */

    .baca-berita {
        display: inline-flex;

        align-items: center;

        gap: 5px;

        color: #15539a;

        font-size: 12px;

        font-weight: 600;
    }


    .baca-berita .arrow {
        transition: transform 0.2s ease;
    }


    .berita-card:hover
    .baca-berita .arrow {
        transform: translateX(5px);
    }


    /* =========================================
       JIKA BERITA KOSONG
    ========================================= */

    .berita-kosong {
        grid-column: 1 / -1;

        padding: 50px 20px;

        text-align: center;

        background: white;

        border-radius: 14px;

        color: #777;

        box-shadow:
            0 5px 20px rgba(0, 0, 0, 0.06);
    }


    /* =========================================
       TABLET
    ========================================= */

    @media (max-width: 900px) {

        .berita-page {
            padding:
                50px 5% 60px;
        }


        .berita-grid {
            grid-template-columns:
                repeat(2, minmax(0, 1fr));
        }
    }


    /* =========================================
       HP
    ========================================= */

    @media (max-width: 600px) {

        .berita-page {
            padding:
                40px 20px 50px;
        }


        .berita-header {
            margin-bottom: 35px;
        }


        .berita-header h1 {
            font-size: 28px;
        }


        .berita-header p {
            font-size: 13px;
        }


        .berita-title h2 {
            font-size: 20px;
        }


        .berita-grid {
            grid-template-columns: 1fr;

            gap: 20px;
        }


        .berita-image {
            height: 210px;
        }
    }

</style>


<div class="berita-page">


    {{-- =========================================
         HEADER
    ========================================== --}}

    <div class="berita-header">

        <h1>
            Berita Sekolah
        </h1>

        <p>
            Informasi terbaru, kegiatan, prestasi,
            dan kabar terkini seputar sekolah
        </p>

    </div>


    {{-- =========================================
         BERITA TERBARU
    ========================================== --}}

    <div class="berita-title">

        <h2>
            Berita Terbaru
        </h2>

    </div>


    {{-- =========================================
         DAFTAR BERITA
    ========================================== --}}

    <div class="berita-grid">


        {{-- =========================================
             BERITA 1
        ========================================== --}}

        <a href="{{ route('berita.detail') }}" class="berita-card">

            <img
                src="{{ asset('images/berita/berita1.jpeg') }}"
                alt="Siswa SMP Negeri 2 Penawangan Raih Juara Olimpiade Matematika"
                class="berita-image"
            >

            <div class="berita-content">

                <span class="berita-category">
                    Prestasi
                </span>

                <h3>
                    Siswa SMP Negeri 2 Penawangan Raih Juara Olimpiade Matematika
                </h3>

                <div class="berita-date">
                    📅 17 Agustus 2026
                </div>

                <p>
                    Prestasi membanggakan kembali diraih oleh siswa SMP Negeri 2 Penawangan dalam ajang olimpiade matematika.
                </p>

                <span class="berita-link">
                    Baca Selengkapnya →
                </span>

            </div>

        </a>


        {{-- =========================================
             BERITA 2
        ========================================== --}}

        <a
            href="{{ route('berita.detail', 2) }}"
            class="berita-card"
        >

            <img
                src="{{ asset('images/berita/berita2.jpeg') }}"
                alt="Kegiatan Sekolah"
                class="berita-image"
            >

            <div class="berita-content">

                <span class="berita-kategori">
                    Kegiatan
                </span>

                <h3>
                    Kegiatan Masa Pengenalan Lingkungan Sekolah
                </h3>

                <div class="berita-date">
                    📅 15 Agustus 2026
                </div>

                <p>
                    Kegiatan Masa Pengenalan Lingkungan Sekolah
                    berlangsung dengan meriah dan diikuti oleh seluruh
                    peserta didik baru.
                </p>

                <div class="baca-berita">
                    Baca Selengkapnya
                    <span class="arrow">→</span>
                </div>

            </div>

        </a>


        {{-- =========================================
             BERITA 3
        ========================================== --}}

        <a
            href="{{ route('berita.detail', 3) }}"
            class="berita-card"
        >

            <img
                src="{{ asset('images/berita/berita3.jpeg') }}"
                alt="Asesmen Nasional"
                class="berita-image"
            >

            <div class="berita-content">

                <span class="berita-kategori">
                    Akademik
                </span>

                <h3>
                    Persiapan Asesmen Nasional Tahun Pelajaran 2026
                </h3>

                <div class="berita-date">
                    📅 12 Agustus 2026
                </div>

                <p>
                    Sekolah mulai mempersiapkan siswa untuk
                    menghadapi pelaksanaan Asesmen Nasional.
                </p>

                <div class="baca-berita">
                    Baca Selengkapnya
                    <span class="arrow">→</span>
                </div>

            </div>

        </a>


        {{-- =========================================
             BERITA 4
        ========================================== --}}

        <a
            href="{{ route('berita.detail', 4) }}"
            class="berita-card"
        >

            <img
                src="{{ asset('images/berita/berita4.jpeg') }}"
                alt="Pemilihan OSIS"
                class="berita-image"
            >

            <div class="berita-content">

                <span class="berita-kategori">
                    Kesiswaan
                </span>

                <h3>
                    Pemilihan Pengurus OSIS Periode 2026/2027
                </h3>

                <div class="berita-date">
                    📅 10 Agustus 2026
                </div>

                <p>
                    Pemilihan pengurus OSIS dilaksanakan secara
                    demokratis dengan melibatkan seluruh siswa.
                </p>

                <div class="baca-berita">
                    Baca Selengkapnya
                    <span class="arrow">→</span>
                </div>

            </div>

        </a>


        {{-- =========================================
             BERITA 5
        ========================================== --}}

        <a
            href="{{ route('berita.detail', 5) }}"
            class="berita-card"
        >

            <img
                src="{{ asset('images/berita/berita5.jpg') }}"
                alt="Kegiatan Sekolah"
                class="berita-image"
            >

            <div class="berita-content">

                <span class="berita-kategori">
                    Pengumuman
                </span>

                <h3>
                    Informasi Jadwal Kegiatan Sekolah Bulan Agustus
                </h3>

                <div class="berita-date">
                    📅 8 Agustus 2026
                </div>

                <p>
                    Berikut informasi mengenai jadwal kegiatan sekolah
                    yang akan dilaksanakan selama bulan Agustus.
                </p>

                <div class="baca-berita">
                    Baca Selengkapnya
                    <span class="arrow">→</span>
                </div>

            </div>

        </a>


        {{-- =========================================
             BERITA 6
        ========================================== --}}

        <a
            href="{{ route('berita.detail', 6) }}"
            class="berita-card"
        >

            <img
                src="{{ asset('images/berita/berita6.jpg') }}"
                alt="Program Literasi"
                class="berita-image"
            >

            <div class="berita-content">

                <span class="berita-kategori">
                    Akademik
                </span>

                <h3>
                    Program Peningkatan Literasi Siswa di Sekolah
                </h3>

                <div class="berita-date">
                    📅 5 Agustus 2026
                </div>

                <p>
                    Sekolah terus meningkatkan budaya literasi
                    melalui berbagai program membaca bagi siswa.
                </p>

                <div class="baca-berita">
                    Baca Selengkapnya
                    <span class="arrow">→</span>
                </div>

            </div>

        </a>


    </div>

</div>

@endsection