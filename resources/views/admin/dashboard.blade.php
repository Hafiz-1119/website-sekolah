@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')

<div class="admin-layout">

    {{-- ================= SIDEBAR ================= --}}
    <aside class="admin-sidebar">

        <div class="sidebar-brand">

            <div class="sidebar-logo">
                <img
                    src="{{ asset('images/Logo Smp 2 Penawangan.png') }}"
                    alt="Logo SMP Negeri 2 Penawangan"
                >
            </div>

            <div>
                <h2>Admin Panel</h2>
                <p>SMP Negeri 2 Penawangan</p>
            </div>

        </div>


        {{-- ================= MENU ================= --}}
        <nav class="sidebar-menu">

            <a href="{{ route('admin.dashboard') }}" class="active">
                <span class="menu-icon">▦</span>
                Dashboard
            </a>

            <a href="{{ route('admin.berita') }}">
                <span class="menu-icon">▤</span>
                Kelola Berita
            </a>

            <a href="{{ route('admin.galeri') }}">
                <span class="menu-icon">▧</span>
                Kelola Galeri
            </a>

            <a href="{{ route('admin.profil') }}">
                <span class="menu-icon">▣</span>
                Kelola Profil
            </a>

            <a href="{{ route('admin.guru') }}">
                <span class="menu-icon">♙</span>
                Kelola Guru
            </a>

            <a href="{{ route('admin.prestasi.index') }}">
                <span class="menu-icon">★</span>
                Kelola Prestasi
            </a>

        </nav>

        {{-- ================= LOGOUT ================= --}}
        <div class="sidebar-bottom">

            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf

                <button type="submit">
                    <span>↪</span>
                    Logout
                </button>

            </form>

        </div>

    </aside>



    {{-- ================= MAIN CONTENT ================= --}}
    <main class="admin-main">


        {{-- ================= HEADER ================= --}}
        <header class="admin-header">

            <div>

                <h1>Selamat Datang, Admin</h1>

                <p>
                    SMP Negeri 2 Penawangan · Administrator Dashboard
                </p>

            </div>


            <div class="admin-profile">

                <div class="admin-avatar">
                    AD
                </div>

                <div>

                    <strong>Administrator</strong>

                    <span>System Active</span>

                </div>

            </div>

        </header>



        {{-- ================= CONTENT ================= --}}
        <div class="admin-content">


            {{-- ================= STATISTIK ================= --}}
            <div class="stats-grid">


                <div class="stat-card">

                    <div class="stat-top">

                        <span>Total Berita</span>

                        <div class="stat-icon">
                            ▤
                        </div>

                    </div>

                    <h2>48</h2>

                    <p class="stat-up">
                        ↑ 4 vs last month
                    </p>

                </div>



                <div class="stat-card">

                    <div class="stat-top">

                        <span>Total Guru</span>

                        <div class="stat-icon">
                            ♙
                        </div>

                    </div>

                    <h2>32</h2>

                    <p class="stat-up">
                        ↑ 0 vs last month
                    </p>

                </div>



                <div class="stat-card">

                    <div class="stat-top">

                        <span>Total Album Galeri</span>

                        <div class="stat-icon">
                            ▧
                        </div>

                    </div>

                    <h2>18</h2>

                    <p class="stat-up">
                        ↑ 2 vs last month
                    </p>

                </div>



                <div class="stat-card">

                    <div class="stat-top">

                        <span>Total Prestasi</span>

                        <div class="stat-icon">
                            ★
                        </div>

                    </div>

                    <h2>12</h2>

                    <p class="stat-up">
                        ↑ 3 vs last month
                    </p>

                </div>


            </div>



            {{-- ================= AKSI CEPAT ================= --}}
            <section class="quick-action">

                <h3>Aksi Cepat</h3>

                <div class="quick-buttons">

                    <a href="#" class="quick-primary">
                        ✚ Tambah Berita
                    </a>

                    <a href="#" class="quick-secondary">
                        ▧ Upload Foto
                    </a>

                </div>

            </section>



            {{-- ================= BERITA TERBARU ================= --}}
            <section class="recent-news">

                <div class="section-header">

                    <h3>Berita Terbaru</h3>

                    <a href="#">
                        Lihat Semua Berita →
                    </a>

                </div>


                <div class="table-wrapper">

                    <table>

                        <thead>

                            <tr>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                            </tr>

                        </thead>


                        <tbody>

                            <tr>

                                <td>
                                    Pendaftaran Siswa Baru Tahun Ajaran 2026
                                </td>

                                <td>Akademik</td>

                                <td>
                                    <span class="status published">
                                        Publish
                                    </span>
                                </td>

                                <td>12 May 2026</td>

                            </tr>


                            <tr>

                                <td>
                                    Siswa SMPN 2 Penawangan Juara Pencak Silat
                                </td>

                                <td>Prestasi</td>

                                <td>
                                    <span class="status published">
                                        Publish
                                    </span>
                                </td>

                                <td>08 May 2026</td>

                            </tr>


                            <tr>

                                <td>
                                    Rencana Pelaksanaan Ujian Akhir Semester
                                </td>

                                <td>Pengumuman</td>

                                <td>
                                    <span class="status draft">
                                        Draft
                                    </span>
                                </td>

                                <td>02 May 2026</td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </section>


        </div>

    </main>

</div>

@endsection



@section('styles')

<style>

    /* ================= GLOBAL ADMIN ================= */

    .admin-layout {
        min-height: 100vh;
        display: flex;
        background: #CAF0F8;
    }


    /* ================= SIDEBAR ================= */

    .admin-sidebar {
        width: 250px;
        min-height: 100vh;
        background: #ffffff;
        border-right: 1px solid #90E0EF;
        display: flex;
        flex-direction: column;
        flex-shrink: 0;
        box-shadow: 2px 0 15px rgba(3, 4, 94, 0.06);
    }


    .sidebar-brand {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 20px 18px;
        border-bottom: 1px solid #ADE8F4;
    }


    .sidebar-logo {
        width: 42px;
        height: 42px;
        display: flex;
        align-items: center;
        justify-content: center;
    }


    .sidebar-logo img {
        width: 42px;
        height: 42px;
        object-fit: contain;
    }


    .sidebar-brand h2 {
        font-size: 16px;
        color: #023E8A;
        margin: 0;
    }


    .sidebar-brand p {
        font-size: 10px;
        color: #0077B6;
        margin: 2px 0 0;
    }


    /* ================= MENU ================= */

    .sidebar-menu {
        padding: 16px 12px;
    }


    .sidebar-menu a {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 11px 12px;
        margin-bottom: 4px;
        border-radius: 7px;
        color: #023E8A;
        font-size: 13px;
        transition: 0.3s;
    }


    .sidebar-menu a:hover {
        background: #ADE8F4;
        color: #03045E;
    }


    .sidebar-menu a.active {
        background: #90E0EF;
        color: #03045E;
        font-weight: bold;
    }


    .menu-icon {
        width: 16px;
        text-align: center;
        font-size: 15px;
        color: #0077B6;
    }


    .sidebar-menu a.active .menu-icon {
        color: #03045E;
    }


    /* ================= LOGOUT ================= */

    .sidebar-bottom {
        margin-top: auto;
        padding: 15px;
        border-top: 1px solid #ADE8F4;
    }


    .sidebar-bottom button {
        width: 100%;
        border: none;
        background: transparent;
        text-align: left;
        color: #023E8A;
        cursor: pointer;
        padding: 10px;
        font-size: 13px;
        border-radius: 7px;
        transition: 0.3s;
    }


    .sidebar-bottom button:hover {
        background: #CAF0F8;
        color: #03045E;
    }


    /* ================= MAIN ================= */

    .admin-main {
        flex: 1;
        min-width: 0;
    }


    /* ================= HEADER ================= */

    .admin-header {
        min-height: 76px;
        background: #ffffff;
        border-bottom: 1px solid #90E0EF;
        padding: 15px 30px;

        display: flex;
        align-items: center;
        justify-content: space-between;
    }


    .admin-header h1 {
        font-size: 18px;
        color: #03045E;
        margin-bottom: 3px;
    }


    .admin-header p {
        font-size: 11px;
        color: #0077B6;
    }


    .admin-profile {
        display: flex;
        align-items: center;
        gap: 10px;
    }


    .admin-avatar {
        width: 38px;
        height: 38px;
        border-radius: 50%;

        background: #ADE8F4;
        color: #023E8A;

        display: flex;
        align-items: center;
        justify-content: center;

        font-size: 12px;
        font-weight: bold;
    }


    .admin-profile strong {
        display: block;
        font-size: 11px;
        color: #03045E;
    }


    .admin-profile span {
        display: block;
        font-size: 9px;
        color: #0077B6;
        margin-top: 2px;
    }


    /* ================= CONTENT ================= */

    .admin-content {
        padding: 25px;
        max-width: 1250px;
    }


    /* ================= STATISTICS ================= */

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 14px;
    }


    .stat-card {
        background: #ffffff;
        border: 1px solid #90E0EF;
        border-radius: 12px;
        padding: 18px;
        box-shadow: 0 4px 15px rgba(3, 4, 94, 0.05);
    }


    .stat-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }


    .stat-top span {
        color: #0077B6;
        font-size: 11px;
    }


    .stat-icon {
        width: 32px;
        height: 32px;
        border-radius: 8px;

        background: #ADE8F4;
        color: #0077B6;

        display: flex;
        align-items: center;
        justify-content: center;
    }


    .stat-card h2 {
        font-size: 24px;
        color: #03045E;
        margin: 10px 0 4px;
    }


    .stat-card p {
        font-size: 9px;
    }


    .stat-up {
        color: #0096C7;
    }


    /* ================= QUICK ACTION ================= */

    .quick-action {
        display: inline-block;
        margin-top: 15px;
        background: #ffffff;
        border: 1px solid #90E0EF;
        border-radius: 12px;
        padding: 15px;
        box-shadow: 0 4px 15px rgba(3, 4, 94, 0.04);
    }


    .quick-action h3 {
        font-size: 13px;
        color: #03045E;
        margin-bottom: 12px;
    }


    .quick-buttons {
        display: flex;
        gap: 10px;
    }


    .quick-buttons a {
        padding: 9px 14px;
        border-radius: 6px;
        font-size: 11px;
        font-weight: bold;
        transition: 0.3s;
    }


    .quick-primary {
        background: #023E8A;
        color: white;
    }


    .quick-primary:hover {
        background: #03045E;
    }


    .quick-secondary {
        background: #ffffff;
        border: 1px solid #90E0EF;
        color: #023E8A;
    }


    .quick-secondary:hover {
        background: #CAF0F8;
        color: #03045E;
    }


    /* ================= BERITA TERBARU ================= */

    .recent-news {
        margin-top: 18px;
        max-width: 760px;

        background: #ffffff;
        border: 1px solid #90E0EF;
        border-radius: 12px;
        padding: 18px;
        box-shadow: 0 4px 15px rgba(3, 4, 94, 0.04);
    }


    .section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 14px;
    }


    .section-header h3 {
        font-size: 14px;
        color: #03045E;
    }


    .section-header a {
        font-size: 10px;
        color: #0077B6;
        font-weight: bold;
    }


    .section-header a:hover {
        color: #03045E;
    }


    .table-wrapper {
        overflow-x: auto;
    }


    table {
        width: 100%;
        border-collapse: collapse;
        font-size: 10px;
    }


    th {
        background: #ADE8F4;
        color: #023E8A;
        text-align: left;
        padding: 10px;
        font-weight: bold;
    }


    td {
        padding: 10px;
        border-bottom: 1px solid #CAF0F8;
        color: #023E8A;
    }


    tbody tr:hover {
        background: #CAF0F8;
    }


    tbody tr:last-child td {
        border-bottom: none;
    }


    /* ================= STATUS ================= */

    .status {
        display: inline-block;
        padding: 3px 9px;
        border-radius: 10px;
        font-size: 9px;
        font-weight: bold;
    }


    .published {
        background: #ADE8F4;
        color: #0077B6;
    }


    .draft {
        background: #CAF0F8;
        color: #023E8A;
    }


    /* ================= RESPONSIVE ================= */

    @media (max-width: 1000px) {

        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }

    }


    @media (max-width: 768px) {

        .admin-layout {
            flex-direction: column;
        }

        .admin-sidebar {
            width: 100%;
            min-height: auto;
        }

        .sidebar-menu {
            display: flex;
            flex-wrap: wrap;
        }

        .sidebar-bottom {
            margin-top: 0;
        }

        .admin-header {
            padding: 15px 20px;
        }

        .admin-content {
            padding: 20px;
        }

        .recent-news {
            max-width: 100%;
        }

    }


    @media (max-width: 500px) {

        .stats-grid {
            grid-template-columns: 1fr;
        }

        .admin-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }

        .quick-buttons {
            flex-direction: column;
        }

    }

</style>

@endsection