@extends('layouts.app')

@section('content')

<style>

    /* =========================================
       HALAMAN DETAIL BERITA
    ========================================= */

    .detail-berita-page {

        min-height: 100vh;

        padding:
            60px 7% 80px;

        background:
            linear-gradient(
                rgba(242, 247, 253, 0.95),
                rgba(242, 247, 253, 0.95)
            ),
            url("{{ asset('images/bg-berita.jpg') }}");

        background-size: cover;

        background-position: center;

        background-attachment: fixed;

        font-family:
            Arial,
            Helvetica,
            sans-serif;

        box-sizing: border-box;
    }


    .detail-berita-page *,
    .detail-berita-page *::before,
    .detail-berita-page *::after {

        box-sizing: border-box;
    }


    /* =========================================
       CONTAINER
    ========================================= */

    .detail-container {

        max-width: 900px;

        margin:
            0 auto;

        background:
            #ffffff;

        border-radius:
            16px;

        overflow:
            hidden;

        box-shadow:
            0 8px 30px
            rgba(0, 0, 0, 0.10);
    }


    /* =========================================
       GAMBAR UTAMA
    ========================================= */

    .detail-image {

        width:
            100%;

        height:
            430px;

        object-fit:
            cover;

        display:
            block;

        background:
            #e9eef4;
    }


    /* =========================================
       ISI
    ========================================= */

    .detail-content {

        padding:
            35px 40px 45px;
    }


    /* =========================================
       KATEGORI
    ========================================= */

    .detail-kategori {

        display:
            inline-block;

        padding:
            7px 13px;

        margin-bottom:
            15px;

        background:
            #edf5ff;

        color:
            #15539a;

        border-radius:
            20px;

        font-size:
            11px;

        font-weight:
            600;
    }


    /* =========================================
       JUDUL
    ========================================= */

    .detail-content h1 {

        margin:
            0 0 15px;

        color:
            #123f73;

        font-size:
            30px;

        line-height:
            1.4;
    }


    /* =========================================
       TANGGAL
    ========================================= */

    .detail-date {

        margin-bottom:
            25px;

        color:
            #888;

        font-size:
            13px;
    }


    /* =========================================
       ISI BERITA
    ========================================= */

    .detail-isi {

        color:
            #555;

        font-size:
            15px;

        line-height:
            1.9;

        text-align:
            justify;
    }


    .detail-isi p {

        margin:
            0 0 20px;
    }


    /* =========================================
       TOMBOL KEMBALI
    ========================================= */

    .kembali-berita {

        display:
            inline-flex;

        align-items:
            center;

        margin-top:
            10px;

        padding:
            10px 18px;

        background:
            #15539a;

        color:
            white;

        border-radius:
            8px;

        text-decoration:
            none;

        font-size:
            13px;

        font-weight:
            600;

        transition:
            0.2s ease;
    }


    .kembali-berita:hover {

        background:
            #123f73;

        transform:
            translateY(-2px);
    }


    /* =========================================
       RESPONSIVE TABLET
    ========================================= */

    @media (max-width: 900px) {

        .detail-berita-page {

            padding:
                50px 5% 60px;
        }


        .detail-image {

            height:
                350px;
        }
    }


    /* =========================================
       RESPONSIVE HP
    ========================================= */

    @media (max-width: 600px) {

        .detail-berita-page {

            padding:
                40px 20px 50px;
        }


        .detail-image {

            height:
                250px;
        }


        .detail-content {

            padding:
                25px 20px 30px;
        }


        .detail-content h1 {

            font-size:
                23px;
        }


        .detail-isi {

            font-size:
                14px;

            line-height:
                1.8;
        }
    }

</style>


<div class="detail-berita-page">


    <div class="detail-container">


        {{-- =====================================
             GAMBAR BERITA
        ====================================== --}}

        <img
            src="{{ asset('storage/' . ($berita->foto ?? $berita['foto'] ?? $berita['gambar'])) }}"
            alt="{{ $berita->judul ?? $berita['judul'] }}"
            class="detail-image"
        >


        {{-- =====================================
             KONTEN BERITA
        ====================================== --}}

        <div class="detail-content">


            {{-- KATEGORI --}}

            <span class="detail-kategori">

                {{ $berita['kategori'] }}

            </span>


            {{-- JUDUL --}}

            <h1>

                {{ $berita['judul'] }}

            </h1>


            {{-- TANGGAL --}}

            <div class="detail-date">

                📅 {{ $berita['tanggal'] }}

            </div>


            {{-- ISI BERITA --}}

            <div class="detail-isi">
                @foreach (explode("\n", $berita->isi ?? $berita['isi']) as $paragraf)
                    @if (trim($paragraf) !== '')
                        <p>{{ $paragraf }}</p>
                    @endif
                @endforeach
            </div>


            {{-- =================================
                 TOMBOL KEMBALI
            ================================== --}}

            <a
                href="{{ route('berita') }}"
                class="kembali-berita"
            >

                ← Kembali ke Berita

            </a>


        </div>

    </div>

</div>


@endsection