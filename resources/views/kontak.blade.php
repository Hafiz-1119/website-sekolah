@extends('layouts.app')

@section('content')

<style>
    * {
        box-sizing: border-box;
    }

    /* =====================
       CONTAINER
    ===================== */

    .kontak-container {
        width: 85%;
        margin: auto;
        padding: 50px 0;
    }


    /* =====================
       HEADER
    ===================== */

    .kontak-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .kontak-header h1 {
        color: #0F4C81;
        font-size: 36px;
        margin: 0 0 10px;
    }

    .kontak-header p {
        color: #64748B;
        font-size: 16px;
        line-height: 1.6;
        margin: 0;
    }


    /* =====================
       KOTAK BESAR
    ===================== */

    .info-kontak {
        background: linear-gradient(135deg, #0F4C81, #083B66);
        padding: 40px;
        border-radius: 20px;
        margin-bottom: 45px;
        box-shadow: 0 10px 25px rgba(15, 76, 129, 0.18);
    }

    .info-kontak h2 {
        color: white;
        text-align: center;
        margin: 0 0 35px;
        font-size: 26px;
    }


    /* =====================
       GRID 3 KOTAK
    ===================== */

    .info-wrapper {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }


    /* =====================
       KOTAK KECIL
    ===================== */

    .info-item {
        background-color: #F8FBFD;
        padding: 30px 20px;
        border-radius: 12px;
        text-align: center;
        border: 1px solid #DCE7EF;
        transition: 0.3s;
    }

    .info-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
    }


    /* =====================
       IKON BULAT
    ===================== */

    .info-icon {
        width: 48px;
        height: 48px;
        margin: 0 auto 12px;

        display: flex;
        align-items: center;
        justify-content: center;

        background-color: #E8F2FB;
        border-radius: 50%;
    }

    .info-icon svg {
        width: 20px;
        height: 20px;

        stroke: #0F4C81;
        stroke-width: 1.8;
        stroke-linecap: round;
        stroke-linejoin: round;
    }


    /* =====================
       TEKS KOTAK KECIL
    ===================== */

    .info-item h3 {
        color: #0F4C81;
        font-size: 16px;
        margin: 0 0 8px;
    }

    .info-item p {
        color: #64748B;
        font-size: 13px;
        line-height: 1.6;
        margin: 0;
    }


    /* =====================
       LOKASI SEKOLAH
    ===================== */

    .maps-title {
        text-align: center;
        margin-bottom: 25px;
    }

    .maps-title h2 {
        color: #0F4C81;
        font-size: 28px;
        margin: 0 0 8px;
    }

    .maps-title p {
        color: #64748B;
        font-size: 15px;
        margin: 0;
    }


    /* =====================
       GOOGLE MAPS
    ===================== */

    .maps {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .maps iframe {
        width: 100%;
        height: 400px;
        border: none;
        display: block;
    }


    /* =====================
       TABLET
    ===================== */

    @media (max-width: 768px) {

        .kontak-container {
            width: 90%;
        }

        .info-wrapper {
            grid-template-columns: 1fr;
        }

    }


    /* =====================
       MOBILE
    ===================== */

    @media (max-width: 500px) {

        .kontak-container {
            width: 92%;
            padding: 30px 0;
        }

        .kontak-header {
            margin-bottom: 30px;
        }

        .kontak-header h1 {
            font-size: 26px;
        }

        .kontak-header p {
            font-size: 12px;
        }


        .info-kontak {
            padding: 20px 15px;
            border-radius: 15px;
            margin-bottom: 35px;
        }

        .info-kontak h2 {
            font-size: 20px;
            margin-bottom: 20px;
        }


        /* TETAP 1 KOLOM DI MOBILE */

        .info-wrapper {
            grid-template-columns: 1fr;
            gap: 12px;
        }


        .info-item {
            padding: 15px;
            display: grid;
            grid-template-columns: 45px 1fr;
            gap: 10px;
            align-items: center;
            text-align: left;
            border-radius: 10px;
        }


        .info-icon {
            width: 40px;
            height: 40px;
            margin: 0;
        }

        .info-icon svg {
            width: 18px;
            height: 18px;
        }


        .info-item h3 {
            font-size: 14px;
            margin-bottom: 3px;
        }

        .info-item p {
            font-size: 11px;
            line-height: 1.5;
        }


        .maps-title h2 {
            font-size: 22px;
        }

        .maps-title p {
            font-size: 11px;
        }

        .maps iframe {
            height: 300px;
        }

    }

</style>


<div class="kontak-container">

    <!-- HEADER -->
    <div class="kontak-header">

        <h1>Hubungi Kami</h1>

        <p>
            Informasi yang dapat digunakan untuk menghubungi
            dan menemukan lokasi sekolah.
        </p>

    </div>


    <!-- INFORMASI KONTAK -->
    <div class="info-kontak">

        <h2>Informasi Kontak</h2>

        <div class="info-wrapper">


            <!-- ALAMAT -->
            <div class="info-item">

                <div class="info-icon">

                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M12 21s6-5.5 6-11a6 6 0 1 0-12 0c0 5.5 6 11 6 11Z"/>
                        <circle cx="12" cy="10" r="2"/>
                    </svg>

                </div>

                <div>

                    <h3>Alamat Kami</h3>

                    <p>
                        Jl. Raya Sedadi-Penawangan No. 49,
                        Kecamatan Penawangan, Grobogan,
                        Jawa Tengah.
                    </p>

                </div>

            </div>


            <!-- TELEPON -->
            <div class="info-item">

                <div class="info-icon">

                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M7 3h3l2 5-2 1.5a14 14 0 0 0 4.5 4.5L16 12l5 2v3c0 1-1 2-2 2C10.7 19 5 13.3 5 5c0-1 1-2 2-2Z"/>
                    </svg>

                </div>

                <div>

                    <h3>Telepon Resmi</h3>

                    <p>(0292) 7700885</p>

                </div>

            </div>


            <!-- EMAIL -->
            <div class="info-item">

                <div class="info-icon">

                    <svg viewBox="0 0 24 24" fill="none">
                        <rect x="3" y="5" width="18" height="14" rx="2"/>
                        <path d="m4 7 8 6 8-6"/>
                    </svg>

                </div>

                <div>

                    <h3>Surel / Email</h3>

                    <p>
                        smpduapenawangan@gmail.com
                    </p>

                </div>

            </div>

        </div>

    </div>


    <!-- JUDUL LOKASI -->
    <div class="maps-title">

        <h2>Lokasi Sekolah</h2>

        <p>
            SMP Negeri 2 Penawangan, Grobogan,
            Jawa Tengah, Indonesia
        </p>

    </div>


    <!-- GOOGLE MAPS -->
    <div class="maps">

        <iframe
            src="https://www.google.com/maps?q=SMP+Negeri+2+Penawangan,+Grobogan,+Jawa+Tengah,+Indonesia&output=embed"
            loading="lazy">
        </iframe>

    </div>

</div>

@endsection