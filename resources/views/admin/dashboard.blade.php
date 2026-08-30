@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')

@if(session('success'))
    <div style="background-color: #d1fae5; color: #065f46; padding: 15px; border-radius: 8px; margin-bottom: 20px; border-left: 5px solid #10b981;">
        <strong>Berhasil!</strong> {{ session('success') }}
    </div>
@endif

<div class="admin-layout">

    {{-- ================= SIDEBAR ================= --}}
    <aside class="admin-sidebar">

        <div class="sidebar-brand">
            <div class="sidebar-logo">
                <img src="{{ asset('images/Logo Smp 2 Penawangan.png') }}" alt="Logo SMP Negeri 2 Penawangan">
            </div>
            <div>
                <h2>Admin Panel</h2>
                <p>SMP Negeri 2 Penawangan</p>
            </div>
        </div>

        {{-- ================= MENU SIDEBAR ================= --}}
        <nav class="sidebar-menu">
            <a href="{{ route('admin.dashboard') }}" class="active">
                <span class="menu-icon">▦</span>
                Dashboard
            </a>
        </nav>

        {{-- ================= LOG AKTIVITAS ================= --}}
        <div class="sidebar-activity">
            <div class="sidebar-activity-header">
                <span>Aktivitas Terbaru</span>
                <span class="activity-badge">Log</span>
            </div>

            <ul class="sidebar-activity-list">
                <li class="sidebar-activity-item">
                    <div class="activity-dot primary"></div>
                    <div class="sidebar-activity-content">
                        <p><strong>Berita Baru</strong> "Pendaftaran Siswa Baru TA 2026/2027" diterbitkan.</p>
                        <span class="activity-time">Hari ini, 09:30</span>
                    </div>
                </li>

                <li class="sidebar-activity-item">
                    <div class="activity-dot success"></div>
                    <div class="sidebar-activity-content">
                        <p><strong>Galeri</strong> Album "Senam Pagi" diperbarui.</p>
                        <span class="activity-time">Kemarin, 14:15</span>
                    </div>
                </li>

                <li class="sidebar-activity-item">
                    <div class="activity-dot warning"></div>
                    <div class="sidebar-activity-content">
                        <p><strong>Data Guru</strong> Kontak staf diperbarui.</p>
                        <span class="activity-time">26 Ags, 11:00</span>
                    </div>
                </li>

                <li class="sidebar-activity-item">
                    <div class="activity-dot info"></div>
                    <div class="sidebar-activity-content">
                        <p><strong>Prestasi</strong> "Juara 1 Pencak Silat" ditambahkan.</p>
                        <span class="activity-time">24 Ags, 16:45</span>
                    </div>
                </li>
            </ul>
        </div>

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
                <h1>Dashboard Administrator</h1>
                <p>SMP Negeri 2 Penawangan · Panel Kontrol Sistem</p>
            </div>

            <div class="admin-profile">
                <div class="admin-avatar">AD</div>
                <div>
                    <strong>Administrator</strong>
                    <span>System Active</span>
                </div>
            </div>
        </header>


        {{-- ================= CONTENT AREA ================= --}}
        <div class="admin-content">

            {{-- 1. BANNER WELCOME --}}
            <div class="welcome-banner">
                <div class="welcome-text">
                    <h2>Selamat Datang Kembali, Admin!</h2>
                    <p>Kelola informasi sekolah, berita, dokumentasi galeri, hingga data staf & prestasi sekolah dari satu tempat.</p>
                </div>
                <div class="welcome-action">
                    <a href="{{ url('/') }}" target="_blank" class="btn-preview">
                        <span>🌐</span> Lihat Website
                    </a>
                </div>
            </div>

            {{-- 2. MENU PENGELOLAAN --}}
            <div class="menu-section">
                <div class="section-title">
                    <h2>Menu Pengelolaan</h2>
                    <p>Pilih menu di bawah ini untuk mengedit data sekolah.</p>
                </div>

                <div class="menu-grid">
                    <a href="{{ route('admin.berita') }}" class="menu-item base-card">
                        <div class="menu-item-icon">▤</div>
                        <div class="menu-item-text">
                            <h3>Kelola Berita</h3>
                            <p>Artikel & pengumuman sekolah</p>
                        </div>
                    </a>

                    <a href="{{ route('admin.galeri') }}" class="menu-item base-card">
                        <div class="menu-item-icon">▧</div>
                        <div class="menu-item-text">
                            <h3>Kelola Galeri</h3>
                            <p>Dokumentasi foto kegiatan</p>
                        </div>
                    </a>

                    <a href="{{ route('admin.profil') }}" class="menu-item base-card">
                        <div class="menu-item-icon">▣</div>
                        <div class="menu-item-text">
                            <h3>Kelola Profil</h3>
                            <p>Informasi visi, misi & sejarah</p>
                        </div>
                    </a>

                    <a href="{{ route('admin.guru.index') }}" class="menu-item base-card">
                        <div class="menu-item-icon">♙</div>
                        <div class="menu-item-text">
                            <h3>Kelola Guru</h3>
                            <p>Data tenaga pendidik & staf</p>
                        </div>
                    </a>

                    <a href="{{ route('admin.prestasi.index') }}" class="menu-item base-card">
                        <div class="menu-item-icon">★</div>
                        <div class="menu-item-text">
                            <h3>Kelola Prestasi</h3>
                            <p>Pencapaian siswa & sekolah</p>
                        </div>
                    </a>
                </div>
            </div>

        </div>

        {{-- 3. FOOTER SIMPEL --}}
        <footer class="admin-footer">
            <p>&copy; {{ date('Y') }} SMP Negeri 2 Penawangan. All rights reserved.</p>
        </footer>

    </main>

</div>

@endsection


@section('styles')
<style>
    /* ================= GLOBAL LAYOUT ================= */
    .admin-layout {
        min-height: 100vh;
        display: flex;
        background: var(--bg-2, #eef4f9);
    }

    .base-card {
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        border: 1px solid var(--input, #e5edf7);
    }

    /* ================= SIDEBAR ================= */
    .admin-sidebar {
        width: 260px;
        min-height: 100vh;
        background: #ffffff;
        border-right: 1px solid var(--input, #e5edf7);
        display: flex;
        flex-direction: column;
        flex-shrink: 0;
        box-shadow: 2px 0 15px rgba(10, 43, 75, 0.05);
    }

    .sidebar-brand {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 20px 18px;
        border-bottom: 1px solid var(--input, #e5edf7);
    }

    .sidebar-logo img {
        width: 40px;
        height: 40px;
        object-fit: contain;
    }

    .sidebar-brand h2 {
        font-size: 15px;
        color: var(--overlay-1, #0a2b4b);
        margin: 0;
        font-weight: bold;
    }

    .sidebar-brand p {
        font-size: 10px;
        color: var(--primary, #2f80ed);
        margin: 2px 0 0;
    }

    .sidebar-menu {
        padding: 16px 14px 8px;
    }

    .sidebar-menu a {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 11px 14px;
        border-radius: 8px;
        color: var(--heading, #123c69);
        font-size: 13px;
        text-decoration: none;
        transition: all 0.2s ease;
    }

    .sidebar-menu a:hover {
        background: var(--bg-1, #dbe4ee);
        color: var(--overlay-1, #0a2b4b);
    }

    .sidebar-menu a.active {
        background: var(--primary,  #0a2b4b);
        color: #ffffff;
        font-weight: bold;
    }

    .menu-icon {
        width: 18px;
        text-align: center;
        font-size: 14px;
    }

    /* ================= SIDEBAR ACTIVITY LOG ================= */
    .sidebar-activity {
        padding: 16px 14px;
        margin: 10px 14px;
        background: var(--bg-2, #eef4f9);
        border-radius: 10px;
        border: 1px solid var(--input, #e5edf7);
    }

    .sidebar-activity-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 12px;
        padding-bottom: 8px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.06);
    }

    .sidebar-activity-header span {
        font-size: 11px;
        font-weight: 700;
        color: var(--overlay-1, #0a2b4b);
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .activity-badge {
        font-size: 9px !important;
        background: var(--primary, #dbeafe);
        color: #ffffff;
        padding: 2px 6px;
        border-radius: 8px;
    }

    .sidebar-activity-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .sidebar-activity-item {
        display: flex;
        gap: 10px;
        margin-bottom: 12px;
        position: relative;
    }

    .sidebar-activity-item:last-child {
        margin-bottom: 0;
    }

    .activity-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        margin-top: 4px;
        flex-shrink: 0;
    }

    .activity-dot.primary { background: var(--primary, #2f80ed); }
    .activity-dot.success { background: #10b981; }
    .activity-dot.warning { background: #f59e0b; }
    .activity-dot.info { background: #6366f1; }

    .sidebar-activity-content p {
        margin: 0 0 2px 0;
        font-size: 11px;
        color: var(--heading, #123c69);
        line-height: 1.35;
    }

    .activity-time {
        font-size: 9px;
        color: var(--meta, #64748b);
        display: block;
    }

    /* ================= LOGOUT ================= */
    .sidebar-bottom {
        margin-top: auto;
        padding: 15px;
        border-top: 1px solid var(--input, #e5edf7);
    }

    .sidebar-bottom button {
        width: 100%;
        border: none;
        background: transparent;
        text-align: left;
        color: #ef4444;
        cursor: pointer;
        padding: 10px 14px;
        font-size: 13px;
        font-weight: 600;
        border-radius: 8px;
        transition: 0.2s;
    }

    .sidebar-bottom button:hover {
        background: #fee2e2;
    }

    /* ================= MAIN CONTAINER ================= */
    .admin-main {
        flex: 1;
        min-width: 0;
        display: flex;
        flex-direction: column;
    }

    .admin-header {
        min-height: 70px;
        background: #ffffff;
        border-bottom: 1px solid var(--input, #e5edf7);
        padding: 15px 30px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .admin-header h1 {
        font-size: 18px;
        color: var(--overlay-1, #0a2b4b);
        margin: 0 0 3px 0;
    }

    .admin-header p {
        font-size: 11px;
        color: var(--meta, #64748b);
        margin: 0;
    }

    .admin-profile {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .admin-avatar {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: var(--card, #dbeafe);
        color: var(--heading, #123c69);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        font-weight: bold;
    }

    .admin-profile strong {
        display: block;
        font-size: 12px;
        color: var(--overlay-1, #0a2b4b);
    }

    .admin-profile span {
        display: block;
        font-size: 10px;
        color: #10b981;
        margin-top: 1px;
    }

    /* ================= CONTENT BODY ================= */
    .admin-content {
        padding: 25px 30px;
        flex: 1;
    }

    /* 1. Welcome Banner */
    .welcome-banner {
        background: linear-gradient(135deg, var(--overlay-1, #0a2b4b) 0%, var(--overlay-2, #123c69) 100%);
        border-radius: 14px;
        padding: 24px 28px;
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        margin-bottom: 30px;
        box-shadow: 0 8px 25px rgba(10, 43, 75, 0.15);
    }

    .welcome-text h2 {
        font-size: 20px;
        margin: 0 0 6px 0;
        font-weight: 700;
    }

    .welcome-text p {
        font-size: 13px;
        margin: 0;
        opacity: 0.85;
        max-width: 650px;
        line-height: 1.5;
    }

    .btn-preview {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(255, 255, 255, 0.15);
        color: #ffffff;
        padding: 10px 18px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 12px;
        font-weight: 600;
        backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.25);
        white-space: nowrap;
        transition: 0.3s ease;
    }

    .btn-preview:hover {
        background: #ffffff;
        color: var(--overlay-1, #0a2b4b);
    }

    /* 2. Menu Pengelolaan */
    .section-title h2 {
        font-size: 17px;
        color: var(--overlay-1, #0a2b4b);
        margin: 0 0 4px 0;
        font-weight: 700;
    }

    .section-title p {
        font-size: 12px;
        color: var(--text, #6b7280);
        margin: 0 0 20px 0;
    }

    .menu-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 20px;
    }

    .menu-item {
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 22px;
        text-decoration: none;
        transition: all 0.25s ease;
    }

    .menu-item:hover {
        transform: translateY(-3px);
        border-color: var(--primary, #2f80ed);
        box-shadow: 0 8px 20px rgba(47, 128, 237, 0.12);
    }

    .menu-item-icon {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        background: var(--bg-2, #eef4f9);
        color: var(--primary, #2f80ed);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        flex-shrink: 0;
    }

    .menu-item-text h3 {
        margin: 0 0 4px 0;
        color: var(--overlay-1, #0a2b4b);
        font-size: 15px;
        font-weight: 700;
    }

    .menu-item-text p {
        margin: 0;
        color: var(--text, #6b7280);
        font-size: 12px;
    }

    /* 3. Footer */
    .admin-footer {
        padding: 15px 30px;
        background: #ffffff;
        border-top: 1px solid var(--input, #e5edf7);
        text-align: center;
    }

    .admin-footer p {
        margin: 0;
        font-size: 11px;
        color: var(--meta, #64748b);
    }

    /* ================= RESPONSIVE ================= */
    @media (max-width: 768px) {
        .admin-layout {
            flex-direction: column;
        }

        .admin-sidebar {
            width: 100%;
            min-height: auto;
        }

        .welcome-banner {
            flex-direction: column;
            align-items: flex-start;
        }
    }
</style>
@endsection