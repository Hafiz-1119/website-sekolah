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

        grid-template-columns:
            repeat(3, minmax(0, 1fr));

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
       GAMBAR KOSONG
    ========================================= */

    .berita-no-image {
        width: 100%;
        height: 190px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #e9eef4;

        color: #7b8794;

        font-size: 14px;
    }


    /* =========================================
       CONTENT
    ========================================= */

    .berita-content {
        padding: 19px;

        flex: 1;

        display: flex;
        flex-direction: column;
    }


    /* =========================================
       KATEGORI
    ========================================= */

    .berita-kategori {
        display: inline-block;

        width: fit-content;

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

        flex: 1;
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

        padding: 60px 20px;

        text-align: center;

        background: white;

        border-radius: 14px;

        color: #777;

        box-shadow:
            0 5px 20px rgba(0, 0, 0, 0.06);
    }


    .berita-kosong h2 {
        margin-bottom: 10px;

        color: #123f73;
    }


    .berita-kosong p {
        margin: 0;

        color: #777;
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


        .berita-image,
        .berita-no-image {
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
         DAFTAR BERITA DARI DATABASE
    ========================================== --}}

    <div class="berita-grid">

        @forelse($beritas as $berita)

            <a
                href="{{ route('berita.detail', $berita->id) }}"
                class="berita-card"
            >

                {{-- FOTO BERITA --}}

                @if($berita->foto)

                    <img
                        src="{{ asset('storage/' . $berita->foto) }}"
                        alt="{{ $berita->judul }}"
                        class="berita-image"
                    >

                @else

                    <div class="berita-no-image">
                        Tidak ada foto
                    </div>

                @endif


                {{-- KONTEN BERITA --}}

                <div class="berita-content">


                    {{-- KATEGORI --}}

                    <span class="berita-kategori">

                        {{ $berita->kategori }}

                    </span>


                    {{-- JUDUL --}}

                    <h3>

                        {{ $berita->judul }}

                    </h3>


                    {{-- TANGGAL --}}

                    <div class="berita-date">

                        📅
                        {{ $berita->tanggal->translatedFormat('d F Y') }}

                    </div>


                    {{-- RINGKASAN --}}

                    <p>

                        @if($berita->ringkasan)

                            {{ \Illuminate\Support\Str::limit($berita->ringkasan, 130) }}

                        @else

                            {{ \Illuminate\Support\Str::limit($berita->isi, 130) }}

                        @endif

                    </p>


                    {{-- BACA SELENGKAPNYA --}}

                    <div class="baca-berita">

                        Baca Selengkapnya

                        <span class="arrow">
                            →
                        </span>

                    </div>


                </div>

            </a>

        @empty

            {{-- =====================================
                 BELUM ADA BERITA
            ====================================== --}}

            <div class="berita-kosong">

                <h2>
                    Belum Ada Berita
                </h2>

                <p>
                    Belum ada berita sekolah yang dipublikasikan.
                </p>

            </div>

        @endforelse

    </div>


</div>


@endsection
