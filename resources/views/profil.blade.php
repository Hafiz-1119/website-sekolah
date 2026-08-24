@extends('layouts.app')

@section('title', 'Profil Sekolah - SMP Negeri 2 Penawangan')

@section('content')

<div class="profil-page">

    {{-- ================= HEADER PROFIL ================= --}}
    
            <div class="section-title">
            <span class="section-label">
                PROFIL SEKOLAH
            </span>

            <h2>
                Profil SMP Negeri 2 Penawangan
            </h2>

            <p>
                Sejarah, Visi Misi, Struktur Organisasi, serta Guru dan Tenaga Kependidikan
            </p>
        </div>

    {{-- ================= VISI & MISI ================= --}}
    <section class="vision-mission">
        <div class="vision-mission-wrapper">
            <div class="vision-box">
                <h2>Visi Sekolah</h2>
                {{ $profil->visi }}
            </div>
            <div class="mission-box">
                <h2>Misi Sekolah</h2>
                <ol class="mission-list">
                    @if($profil && $profil->misi)
                        {{-- Memecah teks berdasarkan baris baru (Enter) dari inputan admin --}}
                        @foreach(explode("\n", $profil->misi) as $index => $item)
                            @if(trim($item) != '')
                                <li>
                                    {{-- Membuat nomor otomatis 01, 02, dst --}}
                                    <span class="mission-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}.</span>
                                    <span>{{ trim($item) }}</span>
                                </li>
                            @endif
                        @endforeach
                    @else
                        <li><span>Belum ada misi.</span></li>
                    @endif
                </ol>
            </div>
        </div>
    </section>

    {{-- ================= SEJARAH ================= --}}
    @php
        // Cek apakah ada foto di database. Kalau tidak ada, pakai default.
        $bgFoto = ($profil && $profil->foto_sekolah) 
            ? asset('storage/' . $profil->foto_sekolah) 
            : asset('images/slider/ft 1.jpg');
    @endphp

    {{-- Tambahkan inline style di sini, CSS aslinya biarkan saja --}}
    <section class="history-section" style="background-image: url('{{ $bgFoto }}') !important;">
        <div class="history-content">        
            <div class="section-title">
                <span class="section-label">
                    SEJARAH SINGKAT
                </span>
    
            @if($profil && $profil->sejarah)
                {{-- Memecah teks berdasarkan Enter, lalu looping jadi paragraf terpisah --}}
                @foreach(explode("\n", $profil->sejarah) as $paragraph)
                    @if(trim($paragraph) != '')
                        <p>{{ trim($paragraph) }}</p>
                    @endif
                @endforeach
            @else
                <p>Belum ada sejarah sekolah.</p>
            @endif
            </div>
            
        </div>
    </section>

    {{-- ================= STRUKTUR ORGANISASI ================= --}}
    @php
        $kepalaSekolah = [
            'nama' => 'Edy Susanto, S.Pd.',
            'jabatan' => 'Kepala Sekolah',
            'foto' => 'Edy.jpeg',
        ];

        $wakilKepala = [
            ['nama' => 'Sudar, S.Pd.', 'jabatan' => 'Wakil Kepala Sekolah', 'foto' => 'sudar.jpeg'],
            ['nama' => 'Parsuni, S.Pd.', 'jabatan' => 'Wakil Kepala Sekolah', 'foto' => 'parsuni.jpeg'],
            ['nama' => 'Agung Ruswanto, S.Pd.', 'jabatan' => 'Wakil Kepala Sekolah', 'foto' => 'agung.jpeg'],
        ];

        $strukturBawah = [
            ['nama' => 'Sunawan, S.Pd.', 'jabatan' => 'PKS Bidang Kurikulum', 'foto' => 'sunawan.jpeg'],
            ['nama' => 'Mohamad Suharto, S.Pd.', 'jabatan' => 'PKS Bidang Kesiswaan', 'foto' => 'mohamad.jpeg'],
            ['nama' => 'Endah Widyaningsih, S.Pd.', 'jabatan' => 'PKS Bidang Sarana Prasarana', 'foto' => 'endah.jpeg'],
            ['nama' => 'Mustaqhfirin, M.Pd.', 'jabatan' => 'PKS Bidang Hubungan Masyarakat', 'foto' => 'mustaqfirin.jpeg'],
            ['nama' => 'Fathonah, S.Ag.', 'jabatan' => 'Bendahara BOS', 'foto' => 'fathonah.jpeg'],
            ['nama' => 'Priska Sihalina', 'jabatan' => 'Operator Sekolah', 'foto' => 'priska.jpeg'],
        ];
    @endphp

    <section class="organization-section">
        <div class="organization-container">
            <div class="section-title text-center">
                <span class="section-label">STRUKTUR SEKOLAH</span>
                <h2>Struktur Organisasi</h2>
                <p>Struktur organisasi SMP Negeri 2 Penawangan.</p>
            </div>

            {{-- Kepala Sekolah --}}
            <div class="org-level org-head">
                <div class="org-person">
                    <div class="org-photo">
                        @if (!empty($kepalaSekolah['foto']))
                            <img src="{{ asset('images/tendik/' . $kepalaSekolah['foto']) }}" alt="{{ $kepalaSekolah['nama'] }}">
                        @else
                            <span>Foto</span>
                        @endif
                    </div>
                    <div class="org-info">
                        <h4>{{ $kepalaSekolah['nama'] }}</h4>
                        <p>{{ $kepalaSekolah['jabatan'] }}</p>
                    </div>
                </div>
            </div>

            {{-- Wakil Kepala Sekolah --}}
            <div class="org-level org-wakil">
                @foreach ($wakilKepala as $person)
                    <div class="org-person">
                        <div class="org-photo">
                            @if (!empty($person['foto']))
                                <img src="{{ asset('images/tendik/' . $person['foto']) }}" alt="{{ $person['nama'] }}">
                            @else
                                <span>Foto</span>
                            @endif
                        </div>
                        <div class="org-info">
                            <h4>{{ $person['nama'] }}</h4>
                            <p>{{ $person['jabatan'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- PKS / Staff Bawah --}}
            <div class="org-level org-bottom">
                @foreach ($strukturBawah as $person)
                    <div class="org-person">
                        <div class="org-photo">
                            @if (!empty($person['foto']))
                                <img src="{{ asset('images/tendik/' . $person['foto']) }}" alt="{{ $person['nama'] }}">
                            @else
                                <span>Foto</span>
                            @endif
                        </div>
                        <div class="org-info">
                            <h4>{{ $person['nama'] }}</h4>
                            <p>{{ $person['jabatan'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================= GURU & TENAGA KEPENDIDIKAN ================= --}}

    <section class="staff-section">

        <div class="staff-container">

            <div class="section-title text-center">
                <span class="section-label">TENAGA PENDIDIK</span>

                <h2>Guru & Tenaga Kependidikan</h2>

                <p>
                    Tenaga pendidik dan tenaga kependidikan SMP Negeri 2 Penawangan.
                </p>
            </div>


            <div class="staff-grid">

                @forelse ($guruStaff as $item)

                    <div class="staff-card">

                        {{-- FOTO --}}
                        <div class="staff-photo">

                            @if ($item->foto)

                                <img
                                    src="{{ asset('storage/' . $item->foto) }}"
                                    alt="{{ $item->nama }}"
                                >

                            @else

                                <span>Foto Belum Tersedia</span>

                            @endif

                        </div>


                        {{-- INFORMASI --}}
                        <div class="staff-info">

                            <h4>
                                {{ $item->nama }}
                            </h4>


                            @if ($item->kategori === 'guru')

                                <p>
                                    Guru
                                </p>

                                @if ($item->mapel)
                                    <span class="staff-position">
                                        {{ $item->mapel }}
                                    </span>
                                @endif

                            @else

                                <p>
                                    Staff
                                </p>

                                @if ($item->jabatan)
                                    <span class="staff-position">
                                        {{ $item->jabatan }}
                                    </span>
                                @endif

                            @endif

                        </div>

                    </div>

                @empty

                    <div class="staff-empty">
                        Belum ada data guru atau tenaga kependidikan.
                    </div>

                @endforelse

            </div>

        </div>

    </section>

@section('styles')
<style>
    .profil-page {
        min-height: 100vh;
        padding: 40px 0 80px;
        background: #eef4f9;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .text-center {
        text-align: center;
    }

    /* ================= HEADER ================= */
    .profil-header {
        text-align: center;
        padding: 0px 7% 50px;
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

    /* ================= VISI MISI ================= */
    .vision-mission {
        background: #ffffff;
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

    /* ================= SEJARAH ================= */

.history-section {
        padding: 80px 7%;
        position: relative;
        min-height: 500px;

        background-image: url('/images/slider/ft 1.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed; 

        overflow: hidden;
    }

    .history-section::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(
            125deg,
            rgba(0, 63, 152, 0.40) 0%,
            rgba(0, 53, 142, 0.82) 50%,
            rgba(0, 63, 152, 0.0) 100%
            ); 
        z-index: 0;
    }

    .history-content {
        position: relative;
        z-index: 1;
        width: 100%;
        max-width: 900px; /* Ditambahkan max-width biar paragrafnya tidak terlalu melebar ke samping */
        margin: auto;
    }

    .history-header {
        text-align: center;
        margin-bottom: 35px;
    }

    /* Mengubah warna teks judul di atas menjadi PUTIH agar kontras dengan background gelap */
    .history-content .section-label {
        color: #dbeafe; 
    }

    .history-content h2 {
        color: #ffffff !important; 
    }

    .history-content h3 {
        color: #e5edf7 !important;
        font-weight: 600;
    }

    /* Mengatur warna dan tampilan paragraf sejarah */
    .history-content .section-title p {
        color: #f1f5f9; /* Menggunakan warna putih keabuan terang agar nyaman dibaca */
        font-size: 16px;
        line-height: 1.9;
        margin-bottom: 20px;
        text-align: justify; 
    }
    
    /* ================= STRUKTUR ORGANISASI ================= */
    .organization-section {
        background: #eef4f9;
        padding: 90px 7% 100px;
    }
    .organization-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
    }
    .organization-section .section-title {
        margin-bottom: 75px;
    }

    /* LEVEL UMUM */
    .org-level {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    /* KARTU ORANG */
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
        border-radius: 12px 0 0 12px;
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

    /* INFORMASI TEKS */
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

    /* GARIS PENGHUBUNG */
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
    .org-wakil {
        display: flex;
        justify-content: center;
        gap: 35px;
        margin-bottom: 60px;
        position: relative;
    }
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

    /* ================= GURU & TENDIK ================= */
    .staff-section {
        background: var(--card);
        padding: 90px 7% 100px;
    }
    .staff-container {
        width: 100%;
        max-width: 1080px;
        margin: 0 auto;
    }
    .staff-section .section-title {
        margin-bottom: 50px;
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

    /* ================= RESPONSIF ================= */
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
        .org-bottom::before, .org-bottom .org-person::before { display: none; }
    }
    @media (max-width: 1000px) {
        .vision-mission-wrapper { grid-template-columns: 1fr; }
        .org-bottom { grid-template-columns: repeat(2, 1fr); }
        .org-bottom::before, .org-bottom .org-person::before { display: none; }
    }
    @media (max-width: 768px) {
        .profil-header h1 { font-size: 34px; }
        .history-header h2 { 
            font-size: 34px; 
            white-space: normal;
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
        .organization-section .section-title { margin-bottom: 60px; }
        
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
@endsection