@extends('layouts.app')

@section('title', 'Profil Sekolah')

@section('content')

<style>

    /* =========================================================
       PALET WARNA
    ========================================================= */

    :root {
        --navy: #071A52;
        --blue-dark: #123B8F;
        --blue: #1E56B0;
        --blue-mid: #356AC0;
        --blue-light: #EAF2FF;
        --blue-soft: #DCE9FA;
        --blue-bg: #EDF4FC;

        --text-dark: #344054;
        --text: #667085;
        --border: #D7E2EF;
        --white: #ffffff;
    }


    /* =========================================================
       GLOBAL
    ========================================================= */

    .profile-page {
        font-family: 'Poppins', sans-serif;
        color: var(--text);
        background: var(--white);
        overflow: hidden;
    }

    .container-profile {
        width: 86%;
        max-width: 1250px;
        margin: 0 auto;
    }


    /* =========================================================
       HERO
    ========================================================= */

    .profile-hero {
        background: var(--blue-light);
        padding: 75px 0;
    }

    .profile-hero h1 {
        color: var(--navy);
        font-size: 44px;
        font-weight: 800;
        margin: 0 0 12px;
        letter-spacing: -1px;
    }

    .profile-hero p {
        color: #59677D;
        font-size: 17px;
        margin: 0;
        line-height: 1.7;
    }


    /* =========================================================
       GENERAL SECTION
    ========================================================= */

    .profile-section {
        padding: 80px 0;
    }

    .section-label {
        color: var(--blue-dark);
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 4px;
        text-transform: uppercase;
        margin-bottom: 8px;
    }

    .section-title {
        color: var(--navy);
        font-size: 35px;
        font-weight: 800;
        margin-bottom: 15px;
    }


    /* =========================================================
       TENTANG SEKOLAH
    ========================================================= */

    .school-photo {
        height: 370px;
        background: var(--blue-soft);
        border-radius: 22px;

        display: flex;
        align-items: center;
        justify-content: center;

        overflow: hidden;
        color: #52709E;
        font-weight: 600;

        transition: all 0.35s ease;
    }

    .school-photo:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(18, 59, 143, 0.12);
    }

    .school-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .school-description {
        padding-left: 25px;
    }

    .school-description p {
        font-size: 16px;
        line-height: 1.9;
        color: var(--text);
        margin-bottom: 18px;
    }

    .school-info {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-top: 25px;
    }

    .school-info-icon {
        width: 44px;
        height: 44px;

        background: var(--blue-light);
        color: var(--blue-dark);

        border-radius: 12px;

        display: flex;
        align-items: center;
        justify-content: center;

        font-size: 19px;
    }

    .school-info strong {
        color: var(--navy);
        display: block;
        margin-bottom: 3px;
    }

    .school-info span {
        color: var(--text);
        font-size: 14px;
    }


    /* =========================================================
       VISI & MISI
    ========================================================= */

    .vision-mission {
        background: var(--blue-bg);
        padding: 80px 0;
    }

    .vision-mission-wrapper {
        display: grid;
        grid-template-columns: 0.9fr 1.1fr;
        gap: 35px;
        align-items: stretch;
    }


    /* =====================
       VISI
    ===================== */

    .vision-box {
        background: var(--blue-dark);
        color: var(--white);

        border-radius: 22px;
        padding: 42px;

        position: relative;
        overflow: hidden;

        transition: all 0.35s ease;
    }

    .vision-box:hover {
        transform: translateY(-6px);
        box-shadow: 0 18px 35px rgba(18, 59, 143, 0.22);
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


    /* =====================
       MISI
    ===================== */

    .mission-box {
        background: var(--white);

        border: 1px solid var(--border);
        border-radius: 22px;

        padding: 42px;

        transition: all 0.35s ease;
    }

    .mission-box:hover {
        transform: translateY(-6px);

        border-color: var(--blue);

        box-shadow:
            0 18px 35px rgba(18, 59, 143, 0.10);
    }

    .mission-box h2 {
        color: var(--navy);

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

        color: var(--blue);

        font-weight: 800;
    }


    /* =========================================================
       SEJARAH
    ========================================================= */

    .history-section {
        padding: 85px 0;
    }

    .history-content {
        max-width: 950px;
        margin: auto;
    }

    .history-header {
        text-align: center;
        margin-bottom: 35px;
    }

    .history-content p {
        color: var(--text);

        font-size: 16px;
        line-height: 1.9;

        margin-bottom: 20px;
    }

    .history-highlight {
        margin-top: 30px;

        padding: 25px 30px;

        background: #F4F7FC;

        border-left: 5px solid var(--blue-dark);

        border-radius: 0 14px 14px 0;

        line-height: 1.7;
    }

    .history-highlight strong {
        color: var(--navy);
    }


    /* =========================================================
       STRUKTUR ORGANISASI
    ========================================================= */

    .organization-section {
        background: var(--blue-bg);

        padding: 85px 0 100px;
    }

    .organization-header {
        text-align: center;

        margin-bottom: 60px;
    }

    .organization-header h2 {
        color: var(--navy);

        font-size: 36px;
        font-weight: 800;

        margin: 8px 0 12px;
    }

    .organization-header p {
        color: var(--text);

        margin: 0;
    }


    /* =====================
       ORGANIZATION CHART
    ===================== */

    .org-chart {
        width: 100%;
        text-align: center;
    }

    .org-level {
        display: flex;

        justify-content: center;

        gap: 30px;

        position: relative;
    }


    /* =====================
       PERSON CARD
    ===================== */

    .org-person {
        width: 250px;
        min-height: 150px;

        background: var(--white);

        border: 1px solid var(--border);

        border-radius: 17px;

        padding: 23px 20px;

        display: flex;

        flex-direction: column;

        align-items: center;

        justify-content: center;

        position: relative;

        z-index: 2;

        box-shadow:
            0 5px 15px rgba(23, 55, 100, 0.04);

        transition: all 0.3s ease;

        cursor: pointer;
    }

    .org-person:hover {
        transform: translateY(-7px);

        border-color: var(--blue);

        box-shadow:
            0 15px 30px rgba(23, 55, 100, 0.13);
    }


    /* =====================
       FOTO ORGANISASI
    ===================== */

    .org-photo {
        width: 65px;
        height: 65px;

        border-radius: 50%;

        background: var(--blue-soft);

        color: var(--blue-dark);

        display: flex;

        align-items: center;
        justify-content: center;

        font-weight: 800;
        font-size: 17px;

        margin-bottom: 13px;

        overflow: hidden;
    }

    .org-photo img {
        width: 100%;
        height: 100%;

        object-fit: cover;
    }


    .org-person h4 {
        color: var(--navy);

        font-size: 16px;
        font-weight: 800;

        margin: 0 0 6px;
    }

    .org-person span {
        color: var(--text);

        font-size: 13px;
    }


    /* =====================
       CONNECTOR
    ===================== */

    .org-connector {
        width: 2px;
        height: 45px;

        background: #8BA6CC;

        margin: 0 auto;
    }


    /* =====================
       MIDDLE LEVEL
    ===================== */

    .org-middle {
        position: relative;

        display: flex;

        justify-content: center;
    }


    /* =====================
       BOTTOM LEVEL
    ===================== */

    .org-bottom {
        display: grid;

        grid-template-columns:
            repeat(4, 1fr);

        gap: 25px;

        position: relative;

        margin-top: 45px;
    }


    /* GARIS HORIZONTAL */

    .org-bottom::before {
        content: "";

        position: absolute;

        top: -23px;

        left: 12.5%;
        right: 12.5%;

        height: 2px;

        background: #8BA6CC;
    }


    /* GARIS VERTIKAL SETIAP CARD */

    .org-bottom .org-person::before {
        content: "";

        position: absolute;

        top: -25px;

        left: 50%;

        width: 2px;
        height: 25px;

        background: #8BA6CC;
    }


    /* =========================================================
       GURU & TENAGA KEPENDIDIKAN
    ========================================================= */

    .staff-section {
        background: var(--white);

        padding: 90px 0 100px;
    }


    /*
       AREA STAFF DIBUAT LEBIH KECIL
       AGAR ADA MARGIN KIRI DAN KANAN
    */

    .staff-container {
        width: 78%;

        max-width: 1080px;

        margin: 0 auto;
    }


    /* =====================
       HEADER
    ===================== */

    .staff-header {
        text-align: center;

        margin-bottom: 50px;
    }

    .staff-header .section-label {
        color: var(--blue-dark);
    }

    .staff-header h2 {
        color: var(--navy);

        font-size: 36px;
        font-weight: 800;

        margin: 8px 0 12px;
    }

    .staff-header p {
        color: var(--text);

        font-size: 15px;

        margin: 0;
    }


    /* =====================
       GRID
       3 CARD PER BARIS
    ===================== */

    .staff-grid {
        display: grid;

        grid-template-columns:
            repeat(3, 1fr);

        gap: 30px;
    }


    /* =====================
       STAFF CARD
    ===================== */

    .staff-card {
        background: var(--white);

        border: 1px solid var(--border);

        border-radius: 18px;

        overflow: hidden;

        transition: all 0.3s ease;

        cursor: pointer;
    }

    .staff-card:hover {
        transform: translateY(-7px);

        border-color: var(--blue);

        box-shadow:
            0 16px 30px rgba(24, 59, 110, 0.13);
    }


    /* =====================
       STAFF PHOTO
    ===================== */

    .staff-photo {
        width: 100%;

        height: 190px;

        background: var(--blue-soft);

        display: flex;

        align-items: center;
        justify-content: center;

        color: #52709E;

        font-size: 14px;
        font-weight: 600;

        overflow: hidden;
    }

    .staff-photo img {
        width: 100%;
        height: 100%;

        object-fit: cover;
    }


    /* =====================
       STAFF INFO
    ===================== */

    .staff-info {
        padding: 20px 15px 22px;

        text-align: center;
    }

    .staff-info h4 {
        color: var(--navy);

        font-size: 16px;

        font-weight: 800;

        margin: 0 0 7px;
    }

    .staff-info p {
        color: var(--text);

        font-size: 13px;

        margin: 0;
    }


    /* =====================
       POSITION
    ===================== */

    .staff-position {
        display: inline-block;

        margin-top: 11px;

        padding: 6px 14px;

        background: var(--blue-light);

        color: var(--blue-dark);

        border-radius: 50px;

        font-size: 11px;

        font-weight: 700;
    }


    /* =========================================================
       RESPONSIVE
    ========================================================= */

    @media (max-width: 1000px) {

        .staff-container {
            width: 88%;
        }

        .vision-mission-wrapper {
            grid-template-columns: 1fr;
        }

        .org-bottom {
            grid-template-columns:
                repeat(2, 1fr);
        }

        .org-bottom::before {
            display: none;
        }

        .org-bottom .org-person::before {
            display: none;
        }
    }


    @media (max-width: 768px) {

        .container-profile {
            width: 90%;
        }

        .profile-hero {
            padding: 55px 0;
        }

        .profile-hero h1 {
            font-size: 34px;
        }

        .profile-section,
        .vision-mission,
        .history-section,
        .organization-section,
        .staff-section {
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .section-title {
            font-size: 30px;
        }

        .school-description {
            padding-left: 0;
        }

        .school-photo {
            height: 280px;
        }

        .vision-box,
        .mission-box {
            padding: 30px;
        }

        .org-bottom {
            grid-template-columns: 1fr;
        }

        .org-level {
            flex-direction: column;

            align-items: center;
        }

        .staff-grid {
            grid-template-columns:
                repeat(2, 1fr);
        }

    }


    @media (max-width: 550px) {

        .staff-container {
            width: 90%;
        }

        .staff-grid {
            grid-template-columns: 1fr;
        }

        .staff-photo {
            height: 220px;
        }

        .org-person {
            width: 230px;
        }

    }

</style>


<div class="profile-page">


    {{-- =====================================================
         HERO
    ===================================================== --}}

    <section class="profile-hero">

        <div class="container-profile">

            <h1>
                Profil Sekolah
            </h1>

            <p>
                Mengenal lebih dekat visi, misi, sejarah,
                dan struktur organisasi SMP Negeri 2 Penawangan.
            </p>

        </div>

    </section>


    {{-- =====================================================
         TENTANG SEKOLAH
    ===================================================== --}}

    <section class="profile-section">

        <div class="container-profile">

            <div class="row align-items-center g-5">


                {{-- FOTO SEKOLAH --}}

                <div class="col-lg-6">

                    <div class="school-photo">

                        {{--

                        JIKA SUDAH ADA FOTO:

                        <img src="{{ asset('images/sekolah.jpg') }}"
                             alt="SMP Negeri 2 Penawangan">

                        --}}

                        <span>
                            Foto Sekolah
                        </span>

                    </div>

                </div>


                {{-- DESKRIPSI --}}

                <div class="col-lg-6">

                    <div class="school-description">

                        <div class="section-label">
                            Tentang Kami
                        </div>

                        <h2 class="section-title">
                            SMP Negeri 2 Penawangan
                        </h2>

                        <p>
                            SMP Negeri 2 Penawangan merupakan salah satu
                            satuan pendidikan yang berada di Kabupaten
                            Grobogan. Sekolah berkomitmen memberikan
                            pendidikan yang berkualitas serta menciptakan
                            lingkungan belajar yang aman, nyaman, dan
                            mendukung perkembangan peserta didik.
                        </p>

                        <p>
                            Melalui proses pembelajaran yang aktif dan
                            pembinaan karakter, sekolah terus mendorong
                            peserta didik untuk mengembangkan potensi,
                            prestasi, dan kepedulian terhadap lingkungan.
                        </p>


                        <div class="school-info">

                            <div class="school-info-icon">
                                📍
                            </div>

                            <div>

                                <strong>
                                    Lokasi Sekolah
                                </strong>

                                <span>
                                    Kabupaten Grobogan, Jawa Tengah
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         VISI & MISI
    ===================================================== --}}

    <section class="vision-mission">

        <div class="container-profile">

            <div class="vision-mission-wrapper">


                {{-- VISI --}}

                <div class="vision-box">

                    <h2>
                        Visi Sekolah
                    </h2>

                    <p>
                        "Mewujudkan insan sekolah yang berprestasi
                        tinggi, berbudi pekerti luhur, berbudaya
                        lingkungan berdasarkan iman dan takwa kepada
                        Tuhan Yang Maha Esa."
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
                                Melaksanakan pembelajaran aktif dan
                                bimbingan secara efektif.
                            </span>

                        </li>

                        <li>

                            <span class="mission-number">
                                02.
                            </span>

                            <span>
                                Menumbuhkan penghayatan terhadap
                                ajaran agama yang dianut.
                            </span>

                        </li>

                        <li>

                            <span class="mission-number">
                                03.
                            </span>

                            <span>
                                Menciptakan lingkungan sekolah yang
                                bersih, sehat, dan rindang.
                            </span>

                        </li>

                        <li>

                            <span class="mission-number">
                                04.
                            </span>

                            <span>
                                Mengembangkan potensi peserta didik
                                dalam bidang akademik maupun
                                nonakademik.
                            </span>

                        </li>

                    </ol>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         SEJARAH
    ===================================================== --}}

    <section class="history-section">

        <div class="container-profile">

            <div class="history-content">


                <div class="history-header">

                    <div class="section-label">
                        Perjalanan Sekolah
                    </div>

                    <h2 class="section-title">
                        Sejarah Singkat Sekolah
                    </h2>

                </div>


                <p>
                    SMP Negeri 2 Penawangan merupakan bagian dari
                    lembaga pendidikan yang memiliki peran penting
                    dalam mencerdaskan kehidupan masyarakat di
                    Kabupaten Grobogan.
                </p>

                <p>
                    Dalam perkembangannya, sekolah terus berupaya
                    meningkatkan kualitas pembelajaran, sarana dan
                    prasarana, serta kompetensi tenaga pendidik.
                    Berbagai kegiatan akademik dan nonakademik
                    dikembangkan untuk mendukung potensi peserta didik.
                </p>

                <p>
                    Hingga saat ini, SMP Negeri 2 Penawangan terus
                    berkomitmen menciptakan lingkungan pendidikan
                    yang berkualitas, berkarakter, dan berwawasan
                    lingkungan.
                </p>


                <div class="history-highlight">

                    <strong>
                        Catatan:
                    </strong>

                    Data sejarah ini masih berupa data sementara
                    dan nantinya dapat diganti dengan sejarah resmi
                    sekolah.

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         STRUKTUR ORGANISASI
    ===================================================== --}}

    <section class="organization-section">

        <div class="container-profile">


            <div class="organization-header">

                <div class="section-label">
                    Tenaga Pendidik
                </div>

                <h2>
                    Struktur Organisasi & Staff
                </h2>

                <p>
                    Struktur organisasi SMP Negeri 2 Penawangan
                </p>

            </div>


            <div class="org-chart">


                {{-- =================================================
                     LEVEL 1
                     KEPALA SEKOLAH
                ================================================== --}}

                <div class="org-level">

                    <div class="org-person">

                        <div class="org-photo">

                            {{-- FOTO KEPALA SEKOLAH NANTI --}}

                            KS

                        </div>

                        <h4>
                            Nama Kepala Sekolah
                        </h4>

                        <span>
                            Kepala Sekolah
                        </span>

                    </div>

                </div>


                {{-- GARIS --}}

                <div class="org-connector"></div>


                {{-- =================================================
                     LEVEL 2
                     WAKIL KEPALA SEKOLAH
                ================================================== --}}

                <div class="org-middle">

                    <div class="org-person">

                        <div class="org-photo">

                            WK

                        </div>

                        <h4>
                            Nama Wakil Kepala Sekolah
                        </h4>

                        <span>
                            Wakil Kepala Sekolah
                        </span>

                    </div>

                </div>


                {{-- GARIS --}}

                <div class="org-connector"></div>


                {{-- =================================================
                     LEVEL 3
                     BAGIAN ORGANISASI
                ================================================== --}}

                <div class="org-bottom">


                    {{-- KURIKULUM --}}

                    <div class="org-person">

                        <div class="org-photo">
                            K
                        </div>

                        <h4>
                            Nama Pengelola
                        </h4>

                        <span>
                            Wakasek Kurikulum
                        </span>

                    </div>


                    {{-- KESISWAAN --}}

                    <div class="org-person">

                        <div class="org-photo">
                            S
                        </div>

                        <h4>
                            Nama Pengelola
                        </h4>

                        <span>
                            Wakasek Kesiswaan
                        </span>

                    </div>


                    {{-- SARANA PRASARANA --}}

                    <div class="org-person">

                        <div class="org-photo">
                            SP
                        </div>

                        <h4>
                            Nama Pengelola
                        </h4>

                        <span>
                            Sarana & Prasarana
                        </span>

                    </div>


                    {{-- HUMAS --}}

                    <div class="org-person">

                        <div class="org-photo">
                            H
                        </div>

                        <h4>
                            Nama Pengelola
                        </h4>

                        <span>
                            Hubungan Masyarakat
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         GURU & TENAGA KEPENDIDIKAN
    ===================================================== --}}

    <section class="staff-section">

        <div class="staff-container">


            {{-- HEADER --}}

            <div class="staff-header">

                <div class="section-label">
                    Tenaga Pendidik
                </div>

                <h2>
                    Guru & Tenaga Kependidikan
                </h2>

                <p>
                    Tenaga pendidik dan tenaga kependidikan
                    SMP Negeri 2 Penawangan.
                </p>

            </div>


            {{-- GRID STAFF --}}

            <div class="staff-grid">


                {{-- =================================================
                     STAFF 1
                ================================================== --}}

                <div class="staff-card">

                    <div class="staff-photo">

                        {{--

                        FOTO GURU:

                        <img src="{{ asset('images/guru/guru-1.jpg') }}"
                             alt="Nama Guru">

                        --}}

                        Foto Guru

                    </div>

                    <div class="staff-info">

                        <h4>
                            Nama Kepala Sekolah
                        </h4>

                        <p>
                            Nama Lengkap, Gelar
                        </p>

                        <span class="staff-position">
                            Kepala Sekolah
                        </span>

                    </div>

                </div>


                {{-- =================================================
                     STAFF 2
                ================================================== --}}

                <div class="staff-card">

                    <div class="staff-photo">
                        Foto Guru
                    </div>

                    <div class="staff-info">

                        <h4>
                            Nama Wakil Kepala Sekolah
                        </h4>

                        <p>
                            Nama Lengkap, Gelar
                        </p>

                        <span class="staff-position">
                            Wakil Kepala Sekolah
                        </span>

                    </div>

                </div>


                {{-- =================================================
                     STAFF 3
                ================================================== --}}

                <div class="staff-card">

                    <div class="staff-photo">
                        Foto Guru
                    </div>

                    <div class="staff-info">

                        <h4>
                            Nama Guru
                        </h4>

                        <p>
                            Nama Lengkap, Gelar
                        </p>

                        <span class="staff-position">
                            Guru
                        </span>

                    </div>

                </div>


                {{-- =================================================
                     STAFF 4
                ================================================== --}}

                <div class="staff-card">

                    <div class="staff-photo">
                        Foto Guru
                    </div>

                    <div class="staff-info">

                        <h4>
                            Nama Guru
                        </h4>

                        <p>
                            Nama Lengkap, Gelar
                        </p>

                        <span class="staff-position">
                            Guru
                        </span>

                    </div>

                </div>


                {{-- =================================================
                     STAFF 5
                ================================================== --}}

                <div class="staff-card">

                    <div class="staff-photo">
                        Foto Guru
                    </div>

                    <div class="staff-info">

                        <h4>
                            Nama Guru
                        </h4>

                        <p>
                            Nama Lengkap, Gelar
                        </p>

                        <span class="staff-position">
                            Guru
                        </span>

                    </div>

                </div>


                {{-- =================================================
                     STAFF 6
                ================================================== --}}

                <div class="staff-card">

                    <div class="staff-photo">
                        Foto Guru
                    </div>

                    <div class="staff-info">

                        <h4>
                            Nama Guru
                        </h4>

                        <p>
                            Nama Lengkap, Gelar
                        </p>

                        <span class="staff-position">
                            Guru
                        </span>

                    </div>

                </div>


            </div>

        </div>

    </section>


</div>

@endsection