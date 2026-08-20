@extends('layouts.app')

@section('title', 'Berita Sekolah')

@section('content')

<style>
    .berita-page {
        background: #f7f9fc;
        padding: 60px 0 80px;
    }

    .berita-container {
        width: 90%;
        max-width: 1200px;
        margin: auto;
    }

    /* HEADER */
    .berita-header {
        text-align: center;
        margin-bottom: 35px;
    }

    .berita-header h1 {
        font-size: 38px;
        font-weight: 700;
        color: #123b70;
        margin-bottom: 10px;
    }

    .berita-header p {
        color: #777;
        font-size: 16px;
    }

    /* CATEGORY */
    .kategori {
        display: flex;
        justify-content: center;
        gap: 12px;
        flex-wrap: wrap;
        margin-bottom: 40px;
    }

    .kategori a {
        text-decoration: none;
        color: #123b70;
        background: white;
        border: 1px solid #dce4ef;
        padding: 10px 20px;
        border-radius: 25px;
        font-size: 14px;
        transition: 0.3s;
    }

    .kategori a:hover,
    .kategori a.active {
        background: #123b70;
        color: white;
    }

    /* BERITA UTAMA */
    .berita-utama {
        display: grid;
        grid-template-columns: 1.2fr 1fr;
        background: white;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 8px 30px rgba(0,0,0,0.08);
        margin-bottom: 60px;
    }

    .berita-utama img {
        width: 100%;
        height: 100%;
        min-height: 380px;
        object-fit: cover;
    }

    .berita-utama-content {
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .label {
        display: inline-block;
        width: fit-content;
        background: #eaf2ff;
        color: #1755a5;
        padding: 7px 14px;
        border-radius: 20px;
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .berita-utama h2 {
        font-size: 30px;
        line-height: 1.3;
        color: #1c2d41;
        margin-bottom: 15px;
    }

    .tanggal {
        color: #888;
        font-size: 14px;
        margin-bottom: 18px;
    }

    .berita-utama p {
        color: #666;
        line-height: 1.7;
        margin-bottom: 25px;
    }

    .btn-baca {
        display: inline-block;
        width: fit-content;
        background: #123b70;
        color: white;
        padding: 12px 22px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 14px;
        transition: 0.3s;
    }

    .btn-baca:hover {
        background: #0d2c54;
        transform: translateY(-2px);
    }

    /* SECTION TITLE */
    .section-title {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
    }

    .section-title h2 {
        color: #1c2d41;
        font-size: 26px;
        margin: 0;
    }

    .section-title a {
        color: #123b70;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
    }

    /* CARD BERITA */
    .berita-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .berita-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.06);
        transition: 0.3s;
    }

    .berita-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.12);
    }

    .berita-card img {
        width: 100%;
        height: 210px;
        object-fit: cover;
    }

    .berita-card-content {
        padding: 22px;
    }

    .berita-card-content .label {
        margin-bottom: 10px;
        font-size: 12px;
    }

    .berita-card h3 {
        color: #1c2d41;
        font-size: 19px;
        line-height: 1.4;
        margin-bottom: 10px;
    }

    .berita-card .tanggal {
        margin-bottom: 12px;
    }

    .berita-card p {
        color: #777;
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 15px;
    }

    .read-more {
        color: #123b70;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
    }

    /* RESPONSIVE */
    @media (max-width: 900px) {

        .berita-utama {
            grid-template-columns: 1fr;
        }

        .berita-utama img {
            min-height: 280px;
        }

        .berita-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {

        .berita-page {
            padding: 40px 0 60px;
        }

        .berita-header h1 {
            font-size: 30px;
        }

        .berita-utama-content {
            padding: 25px;
        }

        .berita-utama h2 {
            font-size: 24px;
        }

        .berita-grid {
            grid-template-columns: 1fr;
        }
    }
</style>


<div class="berita-page">

    <div class="berita-container">

        {{-- HEADER --}}
        <div class="berita-header">
            <h1>Berita Sekolah</h1>

            <p>
                Informasi terbaru, kegiatan, prestasi,
                dan kabar terkini seputar sekolah
            </p>
        </div>


        {{-- KATEGORI --}}
        <div class="kategori">

            <a href="#" class="active">
                Semua
            </a>

            <a href="#">
                Akademik
            </a>

            <a href="#">
                Kegiatan
            </a>

            <a href="#">
                Prestasi
            </a>

            <a href="#">
                Pengumuman
            </a>

        </div>


        {{-- BERITA UTAMA --}}
        <div class="berita-utama">

            <img
                src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=1200&q=80"
                alt="Berita utama sekolah"
            >

            

            <div class="berita-utama-content">

                <span class="label">
                    Kegiatan Sekolah
                </span>

                <h2>
                    Semarak HUT Kemerdekaan RI ke-81 di SMP Negeri 1
                </h2>

                <div class="tanggal">
                    📅 18 Agustus 2026
                </div>

                <p>
                    Dalam rangka memperingati Hari Kemerdekaan Republik
                    Indonesia, SMP Negeri 1 mengadakan berbagai kegiatan
                    yang diikuti oleh seluruh siswa dan warga sekolah.
                </p>

                <a href="#" class="btn-baca">
                    Baca Selengkapnya →
                </a>

            </div>

        </div>


        {{-- BERITA TERBARU --}}
        <div class="section-title">

            <h2>
                Berita Terbaru
            </h2>

            <a href="#">
                Lihat Semua →
            </a>

        </div>


        <div class="berita-grid">

            {{-- CARD 1 --}}
            <div class="berita-card">

                <img
                    src="https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=800&q=80"
                    alt="Prestasi siswa"
                >

                <div class="berita-card-content">

                    <span class="label">
                        Prestasi
                    </span>

                    <h3>
                        Siswa SMP Negeri 1 Raih Juara Olimpiade Matematika
                    </h3>

                    <div class="tanggal">
                        📅 17 Agustus 2026
                    </div>

                    <p>
                        Prestasi membanggakan kembali diraih oleh siswa
                        SMP Negeri 1 dalam ajang olimpiade matematika.
                    </p>

                    <a href="#" class="read-more">
                        Baca Selengkapnya →
                    </a>

                </div>

            </div>


            {{-- CARD 2 --}}
            <div class="berita-card">

                <img
                    src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=800&q=80"
                    alt="Kegiatan sekolah"
                >

                <div class="berita-card-content">

                    <span class="label">
                        Kegiatan
                    </span>

                    <h3>
                        Kegiatan Masa Pengenalan Lingkungan Sekolah
                    </h3>

                    <div class="tanggal">
                        📅 15 Agustus 2026
                    </div>

                    <p>
                        Kegiatan MPLS berlangsung dengan meriah dan
                        diikuti oleh seluruh peserta didik baru.
                    </p>

                    <a href="#" class="read-more">
                        Baca Selengkapnya →
                    </a>

                </div>

            </div>


            {{-- CARD 3 --}}
            <div class="berita-card">

                <img
                    src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?auto=format&fit=crop&w=800&q=80"
                    alt="Kegiatan akademik"
                >

                <div class="berita-card-content">

                    <span class="label">
                        Akademik
                    </span>

                    <h3>
                        Persiapan Asesmen Nasional Tahun Pelajaran 2026
                    </h3>

                    <div class="tanggal">
                        📅 12 Agustus 2026
                    </div>

                    <p>
                        Sekolah mulai mempersiapkan siswa untuk menghadapi
                        pelaksanaan Asesmen Nasional.
                    </p>

                    <a href="#" class="read-more">
                        Baca Selengkapnya →
                    </a>

                </div>

            </div>


            {{-- CARD 4 --}}
            <div class="berita-card">

                <img
                    src="https://images.unsplash.com/photo-1529390079861-591de354faf5?auto=format&fit=crop&w=800&q=80"
                    alt="Kegiatan siswa"
                >

                <div class="berita-card-content">

                    <span class="label">
                        Kesiswaan
                    </span>

                    <h3>
                        Pemilihan Pengurus OSIS Periode 2026/2027
                    </h3>

                    <div class="tanggal">
                        📅 10 Agustus 2026
                    </div>

                    <p>
                        Pemilihan pengurus OSIS dilaksanakan secara
                        demokratis dengan melibatkan seluruh siswa.
                    </p>

                    <a href="#" class="read-more">
                        Baca Selengkapnya →
                    </a>

                </div>

            </div>


            {{-- CARD 5 --}}
            <div class="berita-card">

                <img
                    src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=800&q=80"
                    alt="Pengumuman sekolah"
                >

                <div class="berita-card-content">

                    <span class="label">
                        Pengumuman
                    </span>

                    <h3>
                        Informasi Jadwal Kegiatan Sekolah Bulan Agustus
                    </h3>

                    <div class="tanggal">
                        📅 8 Agustus 2026
                    </div>

                    <p>
                        Berikut informasi mengenai jadwal kegiatan sekolah
                        yang akan dilaksanakan selama bulan Agustus.
                    </p>

                    <a href="#" class="read-more">
                        Baca Selengkapnya →
                    </a>

                </div>

            </div>


            {{-- CARD 6 --}}
            <div class="berita-card">

                <img
                    src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=800&q=80"
                    alt="Belajar siswa"
                >

                <div class="berita-card-content">

                    <span class="label">
                        Akademik
                    </span>

                    <h3>
                        Program Peningkatan Literasi Siswa di Sekolah
                    </h3>

                    <div class="tanggal">
                        📅 5 Agustus 2026
                    </div>

                    <p>
                        Sekolah terus meningkatkan budaya literasi melalui
                        berbagai program membaca bagi siswa.
                    </p>

                    <a href="#" class="read-more">
                        Baca Selengkapnya →
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection