<nav class="navbar">

    <div class="container navbar-container">

        {{-- LOGO DAN IDENTITAS SEKOLAH --}}
        <a href="{{ route('home') }}" class="navbar-brand">

            <img 
            src="{{ asset('images/Logo Smp 2 Penawangan.png') }}" 
            alt="Logo SMP Negeri 2 Penawangan"
            class="school-logo"
            >

            <div class="school-name">
                <strong>SMP NEGERI 2 PENAWANGAN</strong>
                <span>KABUPATEN GROBOGAN</span>
            </div>

        </a>


        {{-- MENU --}}
        <div class="navbar-menu">

            <a href="{{ route('home') }}">
                Beranda
            </a>

            <a href="{{ route('profil') }}">
                Profil
            </a>

            <a href="{{ route('berita') }}">
                Berita
            </a>

            <a href="{{ route('galeri') }}">
                Galeri
            </a>

            <a href="{{ route('kontak') }}">
                Kontak
            </a>

        </div>

    </div>

</nav>


<style>

    .navbar {
        background: white;
        padding: 12px 0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        position: relative;
        z-index: 10;
    }

    .navbar-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }


    /* ================= BRAND ================= */

    .navbar-brand {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .school-logo {
    width: 58px;
    height: 58px;
    object-fit: contain;
    }

    .school-name {
        display: flex;
        flex-direction: column;
    }

    .school-name strong {
        color: #123c69;
        font-size: 18px;
    }

    .school-name span {
        color: #64748b;
        font-size: 14px;
        margin-top: 3px;
    }


    /* ================= MENU ================= */

    .navbar-menu {
        display: flex;
        align-items: center;
        gap: 25px;
    }

    .navbar-menu a {
        color: #111827;
        font-weight: bold;
        transition: 0.3s;
    }

    .navbar-menu a:hover {
        color: #123c69;
    }


    /* ================= RESPONSIVE ================= */

    @media (max-width: 900px) {

        .navbar-container {
            flex-direction: column;
            gap: 20px;
        }

        .navbar-menu {
            flex-wrap: wrap;
            justify-content: center;
        }

    }

</style>