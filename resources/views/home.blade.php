@extends('layouts.app')

@section('title', 'Beranda - SMP Negeri 2 Penawangan')

@section('content')

{{-- ================= HERO ================= --}}
<section class="hero">

    <div class="container hero-container">

        <div class="hero-content">

            <span class="hero-label">
                PORTAL RESMI SEKOLAH
            </span>

            <h1>
                SMP Negeri 2 Penawangan
            </h1>

            <p class="hero-slogan">
                Membangun Generasi Berilmu, Berakhlak, dan Berprestasi
            </p>

            <a href="/ppdb" class="hero-button">
                Lihat Info PPDB
            </a>

        </div>

    </div>

</section>


{{-- ================= BERITA ================= --}}
<section class="section">

    <div class="container">

        <div class="section-title">
            <span class="section-label">
                BULLETIN INFORMASI
            </span>

            <h2>
                Berita & Kegiatan Terbaru
            </h2>

            <p>
                Informasi terbaru mengenai kegiatan dan perkembangan sekolah.
            </p>
        </div>


        <div class="news-grid">

            <article class="news-card">

                <div class="news-image">
                    <div class="image-placeholder">
                        FOTO BERITA
                    </div>
                </div>

                <div class="news-content">

                    <span class="news-date">
                        25 November 2024
                    </span>

                    <h3>
                        Upacara Hari Guru Nasional
                    </h3>

                    <p>
                        Kegiatan upacara dalam rangka memperingati Hari Guru Nasional.
                    </p>

                    <a href="/berita">
                        Baca Selengkapnya →
                    </a>

                </div>

            </article>


            <article class="news-card">

                <div class="news-image">
                    <div class="image-placeholder">
                        FOTO BERITA
                    </div>
                </div>

                <div class="news-content">

                    <span class="news-date">
                        12 November 2024
                    </span>

                    <h3>
                        Siswa SMPN 2 Juara Pencak Silat
                    </h3>

                    <p>
                        Prestasi siswa dalam kompetisi pencak silat tingkat Kabupaten.
                    </p>

                    <a href="/berita">
                        Baca Selengkapnya →
                    </a>

                </div>

            </article>


            <article class="news-card">

                <div class="news-image">
                    <div class="image-placeholder">
                        FOTO BERITA
                    </div>
                </div>

                <div class="news-content">

                    <span class="news-date">
                        05 November 2024
                    </span>

                    <h3>
                        Kegiatan Pramuka & Kemah Bakti
                    </h3>

                    <p>
                        Dokumentasi kegiatan Pramuka dan Kemah Bakti sekolah.
                    </p>

                    <a href="/berita">
                        Baca Selengkapnya →
                    </a>

                </div>

            </article>

        </div>


        <div class="center-button">
            <a href="/berita" class="btn btn-primary">
                Lihat Semua Berita →
            </a>
        </div>

    </div>

</section>


{{-- ================= PRESTASI ================= --}}
<section class="achievement-section">

    <div class="container">

        <div class="section-title">
            <span class="section-label">
                BANGGA MENJADI BAGIAN
            </span>

            <h2>
                Prestasi & Penghargaan Sekolah
            </h2>
        </div>


        <div class="achievement-grid">

            <div class="achievement-card">

                <div class="achievement-icon">
                    A
                </div>

                <h3>
                    Akreditasi A Unggul
                </h3>

                <p>
                    Diakreditasi secara resmi dengan hasil yang sangat memuaskan.
                </p>

            </div>


            <div class="achievement-card">

                <div class="achievement-icon">
                    1
                </div>

                <h3>
                    Juara 1 Adiwiyata Kabupaten
                </h3>

                <p>
                    Sekolah ramah lingkungan dengan pelestarian alam yang asri.
                </p>

            </div>


            <div class="achievement-card">

                <div class="achievement-icon">
                    ★
                </div>

                <h3>
                    Juara Umum OSN
                </h3>

                <p>
                    Prestasi gemilang bidang sains tingkat Kabupaten Grobogan.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- ================= SAMBUTAN KEPALA SEKOLAH ================= --}}
<section class="section">

    <div class="container principal">

        <div class="principal-photo">
            FOTO
        </div>


        <div class="principal-content">

            <span class="section-label">
                SAMBUTAN KEPALA SEKOLAH
            </span>

            <h2>
                Selamat Datang di Portal Resmi SMP Negeri 2 Penawangan
            </h2>

            <p>
                Assalamu'alaikum Wr. Wb.
            </p>

            <p>
                Kami berkomitmen untuk terus meningkatkan mutu pendidikan,
                membentuk karakter siswa yang mulia, serta siap bersaing
                secara akademis maupun non akademis.
            </p>

            <p>
                Pendidikan adalah jembatan menuju masa depan cemerlang.
            </p>

            <h3>
                Drs. H. Mulyono, M.Pd.
            </h3>

            <span>
                Kepala Sekolah SMP Negeri 2 Penawangan
            </span>

        </div>

    </div>

</section>


@endsection


@section('styles')

<style>

    /* ================= HERO ================= */

    .hero {
        min-height: 520px;

        display: flex;
        align-items: center;

        background:
            linear-gradient(
                90deg,
                rgba(10, 43, 75, 0.95),
                rgba(18, 60, 105, 0.65)
            ),
            url('/images/hero-sekolah.jpg');

        background-size: cover;
        background-position: center;
    }

    .hero-container {
        display: flex;
        align-items: center;
    }

    .hero-content {
        max-width: 700px;
        color: white;
    }

    .hero-label,
    .section-label {
        display: inline-block;

        color: #2f80ed;
        font-size: 13px;
        font-weight: bold;
        letter-spacing: 1.5px;

        margin-bottom: 12px;
    }

    .hero-label {
        color: #dbeafe;
    }

    .hero h1 {
        font-size: 52px;
        line-height: 1.15;
        margin-bottom: 20px;
    }

    .hero-slogan {
        font-size: 20px;
        margin-bottom: 30px;
        color: #e5edf7;
    }

    .hero-button {
        display: inline-block;

        background: white;
        color: #123c69;

        padding: 13px 24px;
        border-radius: 8px;

        font-weight: bold;
    }


    /* ================= NEWS ================= */

    .news-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .news-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;

        box-shadow: 0 5px 20px rgba(0,0,0,0.06);
    }

    .news-image {
        height: 190px;
    }

    .image-placeholder {
        width: 100%;
        height: 100%;

        background: #dbe4ee;

        display: flex;
        align-items: center;
        justify-content: center;

        color: #64748b;
        font-weight: bold;
    }

    .news-content {
        padding: 22px;
    }

    .news-date {
        color: #2f80ed;
        font-size: 13px;
        font-weight: bold;
    }

    .news-content h3 {
        margin: 10px 0;
        color: #123c69;
        font-size: 20px;
    }

    .news-content p {
        color: #6b7280;
        font-size: 14px;
        margin-bottom: 15px;
    }

    .news-content a {
        color: #123c69;
        font-weight: bold;
        font-size: 14px;
    }

    .center-button {
        text-align: center;
        margin-top: 35px;
    }


    /* ================= ACHIEVEMENT ================= */

    .achievement-section {
        padding: 70px 0;
        background: #eef4f9;
    }

    .achievement-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .achievement-card {
        background: white;
        padding: 30px;
        border-radius: 12px;

        text-align: center;
    }

    .achievement-icon {
        width: 60px;
        height: 60px;

        margin: 0 auto 20px;

        border-radius: 50%;

        background: #123c69;
        color: white;

        display: flex;
        align-items: center;
        justify-content: center;

        font-size: 22px;
        font-weight: bold;
    }

    .achievement-card h3 {
        color: #123c69;
        margin-bottom: 10px;
    }

    .achievement-card p {
        color: #6b7280;
        font-size: 14px;
    }


    /* ================= PRINCIPAL ================= */

    .principal {
        display: grid;
        grid-template-columns: 350px 1fr;
        gap: 60px;

        align-items: center;
    }

    .principal-photo {
        height: 420px;

        background: #dbe4ee;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 12px;

        color: #64748b;
        font-weight: bold;
    }

    .principal-content h2 {
        font-size: 34px;
        color: #123c69;
        margin-bottom: 20px;
    }

    .principal-content p {
        color: #6b7280;
        margin-bottom: 15px;
    }

    .principal-content h3 {
        color: #123c69;
        margin-top: 25px;
    }

    .principal-content span {
        color: #6b7280;
    }


    /* ================= RESPONSIVE ================= */

    @media (max-width: 900px) {

        .hero h1 {
            font-size: 40px;
        }

        .news-grid,
        .achievement-grid {
            grid-template-columns: 1fr 1fr;
        }

        .principal {
            grid-template-columns: 1fr;
        }

    }


    @media (max-width: 600px) {

        .hero {
            min-height: 450px;
        }

        .hero h1 {
            font-size: 34px;
        }

        .hero-slogan {
            font-size: 17px;
        }

        .news-grid,
        .achievement-grid {
            grid-template-columns: 1fr;
        }

        .principal-photo {
            height: 300px;
        }

        .principal-content h2 {
            font-size: 27px;
        }

    }

</style>

@endsection