@extends('layouts.app')
@section('title', 'Profil Sekolah')
@section('content')
<style>

     .profil-page {
        min-height: 100vh;
        padding: 60px 0 80px;

        background:var(--bg-1);
        background-size: cover;
        background-position: center;
        background-attachment: fixed;

        font-family: Arial, Helvetica, sans-serif;
        box-sizing: border-box;
    }

<h2>Misi</h2>

    .profil-page *,
    .profil-page *::before,
    .profil-page *::after {
        box-sizing: border-box;
    }


    /* =========================================
       HEADER
    ========================================= */

    .profil-header {
        text-align: center;
        padding: 10px 7% 50px;
    }


    .profil-header h1 {
        margin: 0 0 12px;

        font-size: 34px;
        font-weight: 700;

        color: var(--overlay-1);
    }


    .profil-header p {
        margin: 0;

        font-size: 14px;
        line-height: 1.7;

        color: var(--text);
    }

    /* =========================================================
       VISI MISI
    ========================================================= */
    .vision-mission {
        background: white;
        padding: 80px 7%;
    }
    .vision-mission-wrapper {
        display: grid;
        grid-template-columns: 0.9fr 1.1fr;
        gap: 35px;
        align-items: stretch;
    }
    .vision-box {
        background: var(--overlay-2);
        color: var(--bg-1);
        border-radius: 22px;
        padding: 42px;
        position: relative;
        overflow: hidden;
        transition: all 0.35s ease;
    }
    .vision-box:hover {
        transform: translateY(-6px);
        box-shadow: 0 18px 35px rgba(18, 60, 105, 0.22);
    }
    .vision-box::after {
        content: "";
        position: absolute;
        width: 190px;
        height: 190px;
        border-radius: 50%;
        background: rgba(255,255,255,0.06);
        right: -75px;
        bottom: -75px;
    }
    .vision-box h2 {
        font-size: 28px;
        font-weight: 800;
        margin-bottom: 25px;
        position: relative;
        z-index: 1;
    }
    .vision-box p {
        font-size: 17px;
        line-height: 1.9;
        margin: 0;
        position: relative;
        z-index: 1;
    }
    .mission-box {
        background: var(--bg-2);
        border: 1px solid var(--heading);
        border-radius: 22px;
        padding: 42px;
        transition: all 0.35s ease;
    }
    .mission-box:hover {
        transform: translateY(-6px);
        border-color: var(--primary);
        box-shadow: 0 18px 35px rgba(18, 60, 105, 0.10);
    }
    .mission-box h2 {
        color: var(--heading);
        font-size: 28px;
        font-weight: 800;
        margin-bottom: 25px;
    }
    .mission-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .mission-list li {
        display: flex;
        gap: 15px;
        margin-bottom: 17px;
        line-height: 1.7;
        color: var(--text);
    }
    .mission-number {
        min-width: 27px;
        color: var(--primary);
        font-weight: 800;
    }

    /* =========================================================
       SEJARAH
    ========================================================= */
    .history-section {
        padding: 100px 7%;
        background: var(--white);
        background-size: cover;
        background-position: center 30%;
        background-attachment: fixed; 
    }
    .history-content {
        width: 100%; 
        margin: auto;
    }
    .history-header {
        text-align: center;
        margin-bottom: 35px;
    }
    .history-header h2 {
        font-size: 34px;
        font-weight: 700;
        color: var(--heading);
        margin: 0;
        white-space: nowrap;
    }

        .history-header h3 {
        font-size: 18px;
        font-weight: 700;
        color: var(--text);
        margin: 0;
        white-space: nowrap;
    }
    .history-content p {
        color: var(--heading);
        font-size: 16px;
        line-height: 1.9;
        margin-bottom: 20px;
        text-align: justify; 
    }

/* =========================================================
       STRUKTUR ORGANISASI (Bentuk Kotak Horizontal & Garis Hirarki)
    ========================================================= */
    .organization-section {
        background: #ffffff;
        padding: 90px 7% 100px;
    }
    .organization-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
    }
    .organization-header {
        text-align: center;
        margin-bottom: 75px;
    }
    .organization-header .section-label {
        color: var(--heading);
    }
    .organization-header h2 {
        color: var(--heading);
        font-size: 36px;
        font-weight: 800;
        margin: 8px 0 12px;
    }
    .organization-header p {
        color: var(--text);
        font-size: 15px;
        margin: 0;
    }

    /* LEVEL UMUM */
    .org-level {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    /* KARTU ORANG (Kotak Horizontal: Foto Full di Kiri, Teks di Kanan) */
    .org-person {
        width: 290px;
        background: var(--card);
        border: 1px solid var(--bg-1);
        border-radius: 12px;
        display: flex;
        align-items: center;
        padding: 0;
        text-align: left;
        position: relative;
        z-index: 2;
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    }
    .org-person:hover {
        transform: translateY(-5px);
        border-color: var(--primary);
        box-shadow: 0 15px 30px rgba(24, 59, 110, 0.15);
    }

    /* FOTO FULL DI KIRI */
    .org-photo {
        width: 95px;
        height: 110px;
        margin: 0;
        border-radius: 12px 0 0 12px; /* Melengkung di sisi kiri mengikuti card */
        overflow: hidden;
        background: var(--input);
        flex-shrink: 0;
        position: relative;
    }
    .org-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center top;
    }
    .org-photo span {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        font-size: 11px;
        color: var(--text);
    }

    /* INFORMASI / TEKS DI KANAN */
    .org-info {
        padding: 12px 15px;
        flex-grow: 1;
    }
    .org-info h4 {
        color: var(--heading);
        font-size: 14px;
        font-weight: 800;
        line-height: 1.3;
        margin: 0 0 4px;
    }
    .org-info p {
        color: var(--text);
        font-size: 11px;
        line-height: 1.3;
        margin: 0;
    }

    /* =========================================================
       GARIS PENGHUBUNG HIERARKI (Sesuai Sketsa)
    ========================================================= */
    
    /* 1. Kepala Sekolah ke bawah */
    .org-head {
        margin-bottom: 50px;
    }
    .org-head::after {
        content: "";
        position: absolute;
        width: 2px;
        height: 50px;
        background: var(--primary);
        bottom: -50px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1;
    }

    /* 2. Wakil Kepala Sekolah (3 Kolom dengan Garis Horizontal) */
    .org-wakil {
        display: flex;
        justify-content: center;
        gap: 35px;
        margin-bottom: 60px;
        position: relative;
    }
    /* Garis horizontal atas penghubung wakil kepsek */
    .org-wakil::before {
        content: "";
        position: absolute;
        height: 2px;
        background: var(--primary);
        top: -25px;
        left: calc(50% - 326px);
        right: calc(50% - 326px);
        z-index: 0;
    }
    .org-wakil .org-person::before {
            content: "";
            position: absolute;
            width: 2px;
            height: 25px;
            background: var(--primary);
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
            z-index: -1;
    }

    /* 3. Staf Bawah / PKS / Bendahara / Operator (6 Kolom Grid) */
    .org-bottom {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 15px;
        position: relative;
        margin-top: 50px;
        max-width: 1150px;
        margin-left: auto;
        margin-right: auto;
    }
    /* Garis horizontal panjang di atas baris staf bawah */
    .org-bottom::before {
        content: "";
        position: absolute;
        height: 2px;
        background: var(--primary);
        top: -25px;
        left: 1.5%;
        right: 0.5%;
        z-index: 0;
    }
    /* Garis vertikal pendek turun ke setiap kotak staf bawah */
    .org-bottom .org-person::before {
        content: "";
        position: absolute;
        width: 2px;
        height: 25px;
        background: var(--primary);
        top: -25px;
        left: 50%;
        transform: translateX(-50%);
        z-index: -1;
    }
    .org-bottom .org-person {
        width: 100%;
    }

    /* =========================================================
       RESPONSIF MOBILE (Otomatis Menurun ke Bawah jika Layar Kecil)
    ========================================================= */
    @media (max-width: 1024px) {
        .org-bottom {
            grid-template-columns: repeat(2, 1fr);
            gap: 30px 20px;
        }
        .org-bottom::before, .org-bottom .org-person::before {
            display: none; /* Sembunyikan garis rumit di tablet/HP agar tetap rapi */
        }
    }
    @media (max-width: 768px) {
        .org-wakil {
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }
        .org-wakil::before, .org-wakil .org-person::before,
        .org-head::after {
            display: none; /* Hilangkan garis penghubung di HP agar berbaris vertikal bersih */
        }
        .org-bottom {
            grid-template-columns: 1fr;
        }
        .org-person {
            width: 100%;
            max-width: 320px;
            margin: 0 auto;
        }
    }
 

    /* =========================================================
       GURU & TENAGA KEPENDIDIKAN
    ========================================================= */
    .staff-section {
        background: var(--card);
        padding: 90px 7% 100px;
    }
    .staff-container {
        width: 100%;
        max-width: 1080px;
        margin: 0 auto;
    }
    .staff-header {
        text-align: center;
        margin-bottom: 50px;
    }
    .staff-header .section-label {
        color: var(--heading);
    }
    .staff-header h2 {
        color: var(--heading);
        font-size: 36px;
        font-weight: 800;
        margin: 8px 0 12px;
    }
    .staff-header p {
        color: var(--text);
        font-size: 15px;
        margin: 0;
    }
    .staff-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 36px;
        align-items: start;
    }
    .staff-card {
        background: var(--bg-2);
        border: 1px solid var(--input);
        border-radius: 10px;
        overflow: hidden;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    .staff-card:hover {
        transform: translateY(-7px);
        border-color: var(--primary);
        box-shadow: 0 16px 30px rgba(18, 60, 105, 0.13);
    }
    .staff-photo {
        width: 100%;
        height: 250px;
        background: var(--bg-2);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary);
        font-size: 14px;
        font-weight: 600;
        overflow: hidden;
    }
    .staff-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center 10%;
    }
    .staff-info {
        padding: 20px 15px 22px;
        text-align: center;
    }
    .staff-info h4 {
        color: var(--heading);
        font-size: 16px;
        font-weight: 800;
        margin: 0 0 7px;
    }
    .staff-info p {
        color: var(--text);
        font-size: 13px;
        margin: 0;
    }
    .staff-position {
        display: inline-block;
        margin-top: 11px;
        padding: 6px 14px;
        background: var(--card);
        color: var(--heading);
        border-radius: 50px;
        font-size: 11px;
        font-weight: 700;
    }

    /* =========================================================
       MEDIA QUERIES
    ========================================================= */
    @media (max-width: 1100px) {
        .org-person { width: 170px; }
        .org-wakil { gap: 20px; }
        .org-wakil::before {
            left: calc(50% - 280px);
            right: calc(50% - 280px);
        }
        .org-bottom {
            grid-template-columns: repeat(3, 1fr);
            row-gap: 70px;
        }
        .org-bottom::before { display: none; }
        .org-bottom .org-person::before { display: none; }
    }
    @media (max-width: 1000px) {
        .vision-mission-wrapper { grid-template-columns: 1fr; }
        .org-bottom { grid-template-columns: repeat(2, 1fr); }
        .org-bottom::before { display: none; }
        .org-bottom .org-person::before { display: none; }
    }
    @media (max-width: 768px) {
        .profil-header h1 { font-size: 34px; }
        .history-header h2 { 
            font-size: 34px; 
            white-space: normal; /* Kembali ke normal di HP agar rapi */
        }
        .profil-header p { font-size: 18px; }
        
        .vision-mission,
        .history-section,
        .organization-section,
        .staff-section {
            padding-top: 60px;
            padding-bottom: 60px;
        }
        .vision-box, .mission-box { padding: 30px; }
        .org-bottom { grid-template-columns: 1fr; }
        .org-level {
            flex-direction: column;
            align-items: center;
        }
        .staff-grid { grid-template-columns: repeat(2, 1fr); }
        .organization-header { margin-bottom: 60px; }
        .organization-header h2 { font-size: 30px; }
        
        .org-wakil {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 70px;
        }
        .org-wakil::before { left: 15%; right: 15%; }
        .org-wakil .org-person { width: 100%; }
        .org-bottom { gap: 55px 15px; }
        .org-person { width: 100%; }
        .org-photo {
            width: 105px;
            height: 105px;
        }
    }
    @media (max-width: 550px) {
        .staff-grid { grid-template-columns: 1fr; }
        .staff-photo { height: 220px; }
        .org-person { width: 230px; }
        .organization-header h2 { font-size: 26px; }
        .organization-header p { font-size: 14px; }
        
        .org-wakil {
            grid-template-columns: 1fr;
            gap: 70px;
            margin-bottom: 80px;
        }
        .org-wakil::before { display: none; }
        .org-wakil .org-person {
            width: 200px;
            margin: 0 auto;
        }
        .org-bottom {
            grid-template-columns: 1fr;
            gap: 70px;
        }
        .org-bottom .org-person {
            width: 200px;
            margin: 0 auto;
        }
        .org-photo {
            width: 110px;
            height: 110px;
        }
    }
</style>
<div class="profil-page">

    {{-- =========================================
         HEADER
    ========================================== --}}
    <div class="profil-header">
        <h1>
            Profil Sekolah
        </h1>
        <p>
            Mengenal lebih dekat tentang SMP Negeri 2 Penawangan, sejarah, visi misi, struktur organisasi, serta guru dan tenaga kependidikan yang berdedikasi.
        </p>
    </div>


    {{-- =====================================================
         VISI & MISI
    ===================================================== --}}
    <section class="vision-mission">
        <div class="vision-mission-wrapper">
            {{-- VISI --}}
            <div class="vision-box">
                <h2>
                    Visi Sekolah
                </h2>
                <p>
                    “BERKEIMANAN DAN KETAKWAAN KEPADA TUHAN YANG MAHA ESA, 
                    UNGGUL DALAM PRESTASI, DAN PEDULI LINGKUNGAN.”
                </p>
            </div>

            {{-- MISI --}}
            <div class="mission-box">
                <h2>
                    Misi Sekolah
                </h2>
                <ol class="mission-list">
                    <li>
                        <span class="mission-number">
                            01.
                        </span>
                        <span>
                            Mewujudkan peningkatan murid yang beriman dan bertaqwa 
                            kepada Tuhan Yang Maha Esa, serta berakhlak mulia.
                        </span>
                    </li>
                    <li>
                        <span class="mission-number">
                            02.
                        </span>
                        <span>
                            Mewujudkan peningkatan prestasi dalam bidang akademik 
                            dan non akademik.
                        </span>
                    </li>
                    <li>
                        <span class="mission-number">
                            03.
                        </span>
                        <span>
                            Mewujudkan peningkatan karakter murid yang mandiri 
                            dan bernalar kritis.
                        </span>
                    </li>
                    <li>
                        <span class="mission-number">
                            04.
                        </span>
                        <span>
                            Mewujudkan peningkatan kreativitas murid dalam pembelajaran 
                            intrakurikuler, kokurikuler dimensi profil lulusan, 
                            dan ekstrakurikuler.
                        </span>
                    </li>
                    <li>
                        <span class="mission-number">
                            05.
                        </span>
                        <span>
                            Mewujudkan peningkatan dalam bidang kepedulian lingkungan, 
                            budaya hidup sehat dan budaya 7K.
                        </span>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    {{-- =====================================================
         SEJARAH
    ===================================================== --}}
    <section class="history-section">
        <div class="history-content">
            <div class="history-header">
                <h2>
                    Sejarah Singkat
                </h2>

                <h3>
                    Sejarah SMP Negeri 2 Penawangan
                </h3>
            </div>
            <p>
                SMP Negeri 2 Penawangan berdiri pada tahun 1990, dengan kegiatan belajar mengajar menumpang di SDN di Desa Sedadi. 
                Barulah mulai tahun 1991 sekolah memiliki gedung yang ditempati sampai sekarang. Sekolah ini terletak di lokasi yang cukup strategis 
                yaitu di pinggir jalan raya Sedadi-Penawangan, tepatnya di Desa Sedadi, Kecamatan Penawangan, Kabupaten Grobogan, Jawa Tengah.
            </p>
            <p>
                Saat ini SMP Negeri 2 Penawangan memiliki gedung sekolah yang mampu menampung 672 siswa,
                terbagi dalam 7 kelas VII, 7 Kelas VIII dan 7 Kelas IX. 
                Dari gedung inilah para siswa digembleng, dibina , dididik dan dibentuk 
                agar menjadi manusia- manusia yang berguna bagi nusa dan bangsa.
            </p>
        </div>
    </section>

{{-- =========================================================
     STRUKTUR ORGANISASI
========================================================= --}}
@php
    /*
    |--------------------------------------------------------------------------
    | KEPALA SEKOLAH
    |--------------------------------------------------------------------------
    */
    $kepalaSekolah = [
        'nama' => 'Edy Susanto, S.Pd.',
        'jabatan' => 'Kepala Sekolah',
        'foto' => 'Edy.jpeg',
    ];

    /*
    |--------------------------------------------------------------------------
    | WAKIL KEPALA SEKOLAH
    |--------------------------------------------------------------------------
    */
    $wakilKepala = [
        [
            'nama' => 'Sudar, S.Pd.',
            'jabatan' => 'Wakil Kepala Sekolah',
            'foto' => 'sudar.jpeg',
        ],
        [
            'nama' => 'Parsuni, S.Pd.',
            'jabatan' => 'Wakil Kepala Sekolah',
            'foto' => 'parsuni.jpeg',
        ],
        [
            'nama' => 'Agung Ruswanto, S.Pd.',
            'jabatan' => 'Wakil Kepala Sekolah',
            'foto' => 'agung.jpeg',
        ],
    ];

    /*
    |--------------------------------------------------------------------------
    | PKS + BENDAHARA + OPERATOR
    |--------------------------------------------------------------------------
    |
    | Semua berada dalam SATU LEVEL.
    |
    */
    $strukturBawah = [
        [
            'nama' => 'Sunawan, S.Pd.',
            'jabatan' => 'PKS Bidang Kurikulum',
            'foto' => 'sunawan.jpeg',
        ],
        [
            'nama' => 'Mohamad Suharto, S.Pd.',
            'jabatan' => 'PKS Bidang Kesiswaan',
            'foto' => 'mohamad.jpeg',
        ],
        [
            'nama' => 'Endah Widyaningsih, S.Pd.',
            'jabatan' => 'PKS Bidang Sarana Prasarana',
            'foto' => 'endah.jpeg',
        ],
        [
            'nama' => 'Mustaqhfirin, M.Pd.',
            'jabatan' => 'PKS Bidang Hubungan Masyarakat',
            'foto' => 'mustaqfirin.jpeg',
        ],
        [
            'nama' => 'Fathonah, S.Ag.',
            'jabatan' => 'Bendahara BOS',
            'foto' => 'fathonah.jpeg',
        ],
        [
            'nama' => 'Priska Sihalina',
            'jabatan' => 'Operator Sekolah',
            'foto' => 'priska.jpeg',
        ],
    ];
@endphp

<section class="organization-section">
    <div class="organization-container">
        {{-- =================================================
             HEADER
        ================================================== --}}
        <div class="organization-header">
            <span class="section-label">
                STRUKTUR SEKOLAH
            </span>
            <h2>
                Struktur Organisasi
            </h2>
            <p>
                Struktur organisasi SMP Negeri 2 Penawangan.
            </p>
        </div>

        {{-- =================================================
             KEPALA SEKOLAH
        ================================================== --}}
        <div class="org-level org-head">
            <div class="org-person">
                <div class="org-photo">
                    @if (!empty($kepalaSekolah['foto']))
                        <img
                            src="{{ asset('images/tendik/' . $kepalaSekolah['foto']) }}"
                            alt="{{ $kepalaSekolah['nama'] }}"
                        >
                    @else
                        <span>
                            Foto
                        </span>
                    @endif
                </div>
                <div class="org-info">
                    <h4>
                        {{ $kepalaSekolah['nama'] }}
                    </h4>
                    <p>
                        {{ $kepalaSekolah['jabatan'] }}
                    </p>
                </div>
            </div>
        </div>

        {{-- =================================================
             WAKIL KEPALA SEKOLAH
        ================================================== --}}
        <div class="org-level org-wakil">
            @foreach ($wakilKepala as $person)
                <div class="org-person">
                    <div class="org-photo">
                        @if (!empty($person['foto']))
                            <img
                                src="{{ asset('images/tendik/' . $person['foto']) }}"
                                alt="{{ $person['nama'] }}"
                            >
                        @else
                            <span>
                                Foto
                            </span>
                        @endif
                    </div>
                    <div class="org-info">
                        <h4>
                            {{ $person['nama'] }}
                        </h4>
                        <p>
                            {{ $person['jabatan'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- =================================================
             PKS + BENDAHARA + OPERATOR
        ================================================== --}}
        <div class="org-level org-bottom">
            @foreach ($strukturBawah as $person)
                <div class="org-person">
                    <div class="org-photo">
                        @if (!empty($person['foto']))
                            <img
                                src="{{ asset('images/tendik/' . $person['foto']) }}"
                                alt="{{ $person['nama'] }}"
                            >
                        @else
                            <span>
                                Foto
                            </span>
                        @endif
                    </div>
                    <div class="org-info">
                        <h4>
                            {{ $person['nama'] }}
                        </h4>
                        <p>
                            {{ $person['jabatan'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- =========================================================
     DATA GURU & TENAGA KEPENDIDIKAN
========================================================= --}}
@php
    $staff = [
        [
            'nama' => 'Agung Ruswanto, S.Pd.',
            'mapel' => 'Bahasa Indonesia',
            'jabatan' => 'Guru',
            'foto' => 'agung.Jpeg',
        ],
        [
            'nama' => 'Agus Prayetno, S.Pd.',
            'mapel' => 'Pendidikan Pancasila',
            'jabatan' => 'Guru',
            'foto' => 'agus.jpeg',
        ],
        [
            'nama' => 'Drs. Bambang Nudiman',
            'mapel' => 'Bahasa Indonesia',
            'jabatan' => 'Guru',
            'foto' => 'bambang.jpeg',
        ],
        [
            'nama' => 'Bregas Nanda Priyawardana, ST.',
            'mapel' => 'Informatika',
            'jabatan' => 'Guru',
            'foto' => 'bregas.jpeg',
        ],
        [
            'nama' => 'Devi Prasetyaningrum, S.Pd.',
            'mapel' => 'Matematika',
            'jabatan' => 'Guru',
            'foto' => 'devi.jpeg',
        ],
        [
            'nama' => 'Djoko Supriyanto, S.Pd.',
            'mapel' => 'Bahasa Inggris',
            'jabatan' => 'Guru',
            'foto' => 'djoko.jpeg',
        ],
        [
            'nama' => 'Eko Budiyono, S.Pd.',
            'mapel' => 'Olahraga',
            'jabatan' => 'Guru',
            'foto' => 'eko.jpeg',
        ],
        [
            'nama' => 'Endah Wahyuningsih, S.Pd.',
            'mapel' => 'Ilmu Pengetahuan Alam',
            'jabatan' => 'Guru',
            'foto' => 'endahW.jpeg',
        ],
        [
            'nama' => 'Endah Widyaningsih, S.Pd.',
            'mapel' => 'Bahasa Inggris',
            'jabatan' => 'Guru',
            'foto' => 'endah.jpeg',
        ],
        [
            'nama' => 'Endang Sri Mukti, S.Pd.',
            'mapel' => 'Matematika',
            'jabatan' => 'Guru',
            'foto' => 'endang.jpeg',
        ],
        [
            'nama' => 'Fathonah, S.Ag.',
            'mapel' => 'Pendidikan Agama Islam',
            'jabatan' => 'Guru',
            'foto' => 'fathonah.jpeg',
        ],
        [
            'nama' => 'Fits Dewi Parwati, S.Pd.',
            'mapel' => 'Bahasa Indonesia',
            'jabatan' => 'Guru',
            'foto' => 'fits.jpeg',
        ],
        [
            'nama' => 'Galuh Ajeng, S.Pd.',
            'mapel' => 'Seni Musik',
            'jabatan' => 'Guru',
            'foto' => 'galuh.jpeg',
        ],
        [
            'nama' => 'Heri Soertikanti, S.Pd.',
            'mapel' => 'Ilmu Pengetahuan Alam',
            'jabatan' => 'Guru',
            'foto' => 'heri.jpeg',
        ],
        [
            'nama' => 'Jadi Susanto, S.Pd.',
            'mapel' => 'Ilmu Pengetahuan Sosial',
            'jabatan' => 'Guru',
            'foto' => 'jadi.jpeg',
        ],
        [
            'nama' => 'Mala Nur Anisa, S.Pd.',
            'mapel' => 'Bahasa Indonesia',
            'jabatan' => 'Guru',
            'foto' => 'mala.jpeg',
        ],
        [
            'nama' => 'Mohamad Suharto, S.Pd.',
            'mapel' => 'Olahraga',
            'jabatan' => 'Guru',
            'foto' => 'mohamad.jpeg',
        ],
        [
            'nama' => 'Mustaqhfirin, M.Pd.',
            'mapel' => 'Pendidikan Agama Islam',
            'jabatan' => 'Guru',
            'foto' => 'mustaqfirin.jpeg',
        ],
        [
            'nama' => 'Parsuni, S.Pd.',
            'mapel' => 'Bahasa Indonesia',
            'jabatan' => 'Guru',
            'foto' => 'parsuni.jpeg',
        ],
        [
            'nama' => 'Retno Aris Sugiarti, S.Pd.',
            'mapel' => 'Ilmu Pengetahuan Alam',
            'jabatan' => 'Guru',
            'foto' => 'retno.jpeg',
        ],
        [
            'nama' => 'Riris Pratiwi, S.Pd.',
            'mapel' => 'Ilmu Pengetahuan Sosial',
            'jabatan' => 'Guru',
            'foto' => 'riris.jpeg',
        ],
        [
            'nama' => 'Sri Ambarwati, S.Pd.',
            'mapel' => 'Bahasa Indonesia',
            'jabatan' => 'Guru',
            'foto' => 'sri.jpeg',
        ],
        [
            'nama' => 'Sudar, S.Pd.',
            'mapel' => 'Ilmu Pengetahuan Sosial',
            'jabatan' => 'Guru',
            'foto' => 'sudar.jpeg',
        ],
        [
            'nama' => 'Suwarningsih, S.Pd.',
            'mapel' => 'Pendidikan Pancasila',
            'jabatan' => 'Guru',
            'foto' => 'suearningsih.jpeg',
        ],
        [
            'nama' => 'Suhartini, S.Pd.',
            'mapel' => 'Bahasa Inggris',
            'jabatan' => 'Guru',
            'foto' => 'suhartini.jpeg',
        ],
        [
            'nama' => 'Sunawan, S.Pd.',
            'mapel' => 'Bahasa Jawa',
            'jabatan' => 'Guru',
            'foto' => 'sunawan.jpeg',
        ],
        [
            'nama' => 'Suryowati, S.Pd.',
            'mapel' => 'Ilmu Pengetahuan Sosial',
            'jabatan' => 'Guru',
            'foto' => 'suryowati.jpeg',
        ],
        [
            'nama' => 'Woro Hapsari, S.Pd.',
            'mapel' => 'Matematika',
            'jabatan' => 'Guru',
            'foto' => 'woro.jpeg',
        ],
        [
            'nama' => 'Ika Rismawati.',
            'mapel' => 'Perpustakaan',
            'jabatan' => 'Staff',
            'foto' => 'ika.jpeg',
        ],
        [
            'nama' => 'Mayangsari Putri W.',
            'mapel' => 'Tata Usaha',
            'jabatan' => 'Staff',
            'foto' => 'mayangsari.jpeg',
        ],
        [
            'nama' => 'Priska Sihalina.',
            'mapel' => 'Tata Usaha',
            'jabatan' => 'Staff',
            'foto' => 'priska.jpeg',
        ],
        [
            'nama' => 'Siti Umi Styaningsih.',
            'mapel' => 'Tata Usaha',
            'jabatan' => 'Staff',
            'foto' => 'siti.jpeg',
        ],
        [
            'nama' => 'Sukarno.',
            'mapel' => 'Tata Usaha',
            'jabatan' => 'Staff',
            'foto' => 'sukarno.jpeg',
        ],
        [
            'nama' => 'Pak Kus.',
            'mapel' => 'Penjaga',
            'jabatan' => 'Staff',
            'foto' => 'pakkus.jpeg',
        ],
        [
            'nama' => 'Jaman.',
            'mapel' => 'Kebon',
            'jabatan' => 'Staff',
            'foto' => 'jaman.jpeg',
        ],
        [
            'nama' => 'Supriyanto.',
            'mapel' => 'Kebon',
            'jabatan' => 'Staff',
            'foto' => 'supriyanto.jpeg',
        ],
        [
            'nama' => 'Suwito.',
            'mapel' => 'Satpam',
            'jabatan' => 'Staff',
            'foto' => 'suwito.jpeg',
        ],
    ];
@endphp

{{-- =========================================================
     GURU & TENAGA KEPENDIDIKAN
========================================================= --}}
<section class="staff-section">
    <div class="staff-container">
        {{-- HEADER --}}
        <div class="staff-header">
            <span class="section-label">
                TENAGA PENDIDIK
            </span>
            <h2>
                Guru & Tenaga Kependidikan
            </h2>
            <p>
                Tenaga pendidik dan tenaga kependidikan
                SMP Negeri 2 Penawangan.
            </p>
        </div>

        {{-- STAFF GRID --}}
        <div class="staff-grid">
            @foreach ($staff as $person)
                <div class="staff-card">
                    {{-- FOTO --}}
                    <div class="staff-photo">
                        @if (!empty($person['foto']))
                            <img
                                src="{{ asset('images/tendik/' . $person['foto']) }}"
                                alt="{{ $person['nama'] }}"
                            >
                        @else
                            <span>
                                Foto Guru
                            </span>
                        @endif
                    </div>
                    {{-- INFORMASI --}}
                    <div class="staff-info">
                        <h4>
                            {{ $person['nama'] }}
                        </h4>
                        <p>
                            {{ $person['jabatan'] }}
                        </p>
                        <span class="staff-position">
                            {{ $person['mapel'] }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
</div>
@endsection
