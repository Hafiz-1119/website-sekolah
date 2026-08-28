@extends('layouts.app')

@section('title', 'Beranda - SMP Negeri 2 Penawangan')

@php
    use App\Models\Prestasi;

    $prestasis = Prestasi::latest()->take(3)->get();
@endphp

@section('content')

{{-- ================= HERO SLIDER ================= --}}
<section class="hero">

    {{-- SLIDER BACKGROUND --}}
    <div class="hero-slider">

        <div class="hero-slide active"
            style="background-image: url('{{ asset('images/slider/ft 8.jpg') }}');">
        </div>

        <div class="hero-slide"
            style="background-image: url('{{ asset('images/slider/ft 2.jpg') }}');">
        </div>

        <div class="hero-slide"
            style="background-image: url('{{ asset('images/slider/ft 1.jpg') }}');">
        </div>

    </div>

    {{-- OVERLAY --}}
    <div class="hero-overlay"></div>

    {{-- ISI HERO --}}
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

        </div>

    </div>

    {{-- TOMBOL SLIDER --}}
    <button class="slider-btn prev" id="prevSlide">
        &#10094;
    </button>

    <button class="slider-btn next" id="nextSlide">
        &#10095;
    </button>

    {{-- DOT SLIDER --}}
    <div class="slider-dots">

        <button class="dot active" data-slide="0"></button>
        <button class="dot" data-slide="1"></button>
        <button class="dot" data-slide="2"></button>

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

            {{-- BERITA 1 --}}
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


            {{-- BERITA 2 --}}
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


            {{-- BERITA 3 --}}
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

            @forelse($prestasis as $prestasi)

                <div class="achievement-card">

                    @if($prestasi->foto)

                        <div class="achievement-photo">
                            <img
                                src="{{ asset('storage/' . $prestasi->foto) }}"
                                alt="{{ $prestasi->judul }}">
                        </div>

                    @else

                        <div class="achievement-icon">
                            ★
                        </div>

                    @endif


                    <h3>
                        {{ $prestasi->judul }}
                    </h3>

                    <p>
                        {{ $prestasi->deskripsi }}
                    </p>

                </div>

            @empty

                <p>
                    Belum ada prestasi sekolah.
                </p>

            @endforelse

        </div>

    </div>

</section>


{{-- ================= SAMBUTAN KEPALA SEKOLAH ================= --}}
<section class="section">

    <div class="container principal">

        <div class="principal-photo">
            <img
            src="{{ asset('images/tendik/Edy.jpeg') }}"
            alt="Kepala Sekolah">
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
                Edy Susanto, S.Pd.
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

    /* ===============================
       HERO
    =============================== */

    .hero {
        min-height: 520px;
        position: relative;
        display: flex;
        align-items: center;
        overflow: hidden;
    }


    /* ===============================
       HERO SLIDER
    =============================== */

    .hero-slider {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .hero-slide {
        position: absolute;
        inset: 0;

        background-size: cover;
        background-position: center;

        opacity: 0;

        transform: scale(1.05);

        transition:
            opacity 1.2s ease-in-out,
            transform 6s ease;

        z-index: 1;
    }

    .hero-slide.active {
        opacity: 1;
        transform: scale(1);
        z-index: 2;
    }


    /* ===============================
       OVERLAY HERO
    =============================== */

    .hero-overlay {
        position: absolute;
        inset: 0;

        background:
            linear-gradient(
                90deg,
                rgba(10, 43, 75, 0.92),
                rgba(18, 60, 105, 0.50),
                rgba(18, 60, 105, 0.15)
            );

        z-index: 3;
    }


    /* ===============================
       HERO CONTENT
    =============================== */

    .hero-container {
        position: relative;
        z-index: 4;

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

        color: white;
    }

    .hero-slogan {
        font-size: 20px;
        margin-bottom: 30px;

        color: #e5edf7;
    }


    /* ===============================
       TOMBOL SLIDER
    =============================== */

    .slider-btn {
        position: absolute;
        top: 50%;

        transform: translateY(-50%);

        z-index: 5;

        width: 48px;
        height: 48px;

        border: none;
        border-radius: 50%;

        background: rgba(255, 255, 255, 0.18);

        color: white;

        font-size: 28px;

        cursor: pointer;

        transition: 0.3s;
    }

    .slider-btn:hover {
        background: rgba(255, 255, 255, 0.35);
    }

    .prev {
        left: 30px;
    }

    .next {
        right: 30px;
    }


    /* ===============================
       DOT SLIDER
    =============================== */

    .slider-dots {
        position: absolute;

        bottom: 30px;
        left: 50%;

        transform: translateX(-50%);

        z-index: 5;

        display: flex;
        gap: 10px;
    }

    .dot {
        width: 11px;
        height: 11px;

        padding: 0;

        border: none;
        border-radius: 50%;

        background: rgba(255, 255, 255, 0.45);

        cursor: pointer;

        transition: 0.3s;
    }

    .dot.active {
        width: 30px;

        border-radius: 10px;

        background: white;
    }


    /* ===============================
       NEWS
    =============================== */

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

        transition: 0.3s;
    }

    .news-card:hover {
        transform: translateY(-6px);

        box-shadow: 0 12px 30px rgba(0,0,0,0.12);
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

        text-decoration: none;
    }

    .center-button {
        text-align: center;
        margin-top: 35px;
    }


    /* ===============================
       ACHIEVEMENT
    =============================== */

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

        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    }

    .achievement-card img {
        width: 100%;
        height: 220px;

        object-fit: cover;

        border-radius: 10px;

        margin-bottom: 20px;
    }

    .achievement-card h3 {
        color: #123c69;
        margin-bottom: 10px;
    }

    .achievement-card p {
        color: #6b7280;
        font-size: 14px;
    }

    .achievement-photo {
    width: 100%;
    height: 220px;
    margin-bottom: 20px;
    border-radius: 10px;
    overflow: hidden;
    background: #F1F5F9;

    display: flex;
    align-items: center;
    justify-content: center;
}

.achievement-photo img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

    /* ===============================
       PRINCIPAL
    =============================== */

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


    /* ===============================
       RESPONSIVE TABLET
    =============================== */

    @media (max-width: 900px) {

        .hero h1 {
            font-size: 42px;
        }

        .news-grid,
        .achievement-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .principal {
            grid-template-columns: 1fr;
            gap: 35px;
        }

    }


    /* ===============================
       RESPONSIVE MOBILE
    =============================== */

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

        .slider-btn {
            width: 40px;
            height: 40px;

            font-size: 22px;
        }

        .prev {
            left: 12px;
        }

        .next {
            right: 12px;
        }

    }

</style>

@endsection


@section('scripts')

<script>

    document.addEventListener('DOMContentLoaded', function () {

        const slides = document.querySelectorAll('.hero-slide');
        const dots = document.querySelectorAll('.dot');

        const nextButton = document.getElementById('nextSlide');
        const prevButton = document.getElementById('prevSlide');

        let currentSlide = 0;
        let slideInterval;


        function showSlide(index) {

            slides.forEach(function (slide) {
                slide.classList.remove('active');
            });

            dots.forEach(function (dot) {
                dot.classList.remove('active');
            });


            slides[index].classList.add('active');
            dots[index].classList.add('active');

            currentSlide = index;
        }


        function nextSlide() {

            currentSlide++;

            if (currentSlide >= slides.length) {
                currentSlide = 0;
            }

            showSlide(currentSlide);
        }


        function previousSlide() {

            currentSlide--;

            if (currentSlide < 0) {
                currentSlide = slides.length - 1;
            }

            showSlide(currentSlide);
        }


        function startAutoSlide() {

            slideInterval = setInterval(function () {
                nextSlide();
            }, 5000);

        }


        function resetAutoSlide() {

            clearInterval(slideInterval);
            startAutoSlide();

        }


        nextButton.addEventListener('click', function () {

            nextSlide();
            resetAutoSlide();

        });


        prevButton.addEventListener('click', function () {

            previousSlide();
            resetAutoSlide();

        });


        dots.forEach(function (dot) {

            dot.addEventListener('click', function () {

                const index = parseInt(
                    this.getAttribute('data-slide')
                );

                showSlide(index);
                resetAutoSlide();

            });

        });


        startAutoSlide();

    });

</script>

@endsection