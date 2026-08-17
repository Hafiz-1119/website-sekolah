<header class="navbar">

    <div class="navbar-container">

        <a href="/" class="brand">
            <div class="brand-logo">
                SMP
            </div>

            <div class="brand-text">
                <strong>SMP NEGERI 2 PENAWANGAN</strong>
                <span>KABUPATEN GROBOGAN</span>
            </div>
        </a>

        <nav class="nav-menu">

            <a href="/" class="active">Beranda</a>
            <a href="/profil">Profil</a>
            <a href="/berita">Berita</a>
            <a href="/galeri">Galeri</a>
            <a href="/ppdb">PPDB</a>
            <a href="/kontak">Kontak</a>
            <a href="/login" class="login-button">Login Admin</a>

        </nav>

    </div>

</header>

<style>
    .navbar {
        background: #ffffff;
        border-bottom: 1px solid #e5e7eb;
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    .navbar-container {
        width: 90%;
        max-width: 1200px;
        margin: auto;
        min-height: 78px;

        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 30px;
    }

    .brand {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .brand-logo {
        width: 48px;
        height: 48px;
        border-radius: 50%;

        background: #123c69;
        color: white;

        display: flex;
        align-items: center;
        justify-content: center;

        font-size: 14px;
        font-weight: bold;
    }

    .brand-text {
        display: flex;
        flex-direction: column;
    }

    .brand-text strong {
        color: #123c69;
        font-size: 15px;
    }

    .brand-text span {
        color: #6b7280;
        font-size: 12px;
    }

    .nav-menu {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .nav-menu a {
        color: #374151;
        font-size: 14px;
        font-weight: 600;
        transition: 0.3s;
    }

    .nav-menu a:hover,
    .nav-menu a.active {
        color: #123c69;
    }

    .login-button {
        background: #123c69;
        color: white !important;
        padding: 10px 16px;
        border-radius: 7px;
    }

    .login-button:hover {
        background: #0d2e50;
    }

    @media (max-width: 900px) {
        .navbar-container {
            flex-direction: column;
            padding: 18px 0;
        }

        .nav-menu {
            flex-wrap: wrap;
            justify-content: center;
        }
    }
</style>