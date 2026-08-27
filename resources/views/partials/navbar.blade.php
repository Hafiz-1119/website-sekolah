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

            <a
                href="{{ route('home') }}"
                class="{{ request()->routeIs('home') ? 'active' : '' }}"
            >
                Beranda
            </a>

            <a
                href="{{ route('profil') }}"
                class="{{ request()->routeIs('profil') ? 'active' : '' }}"
            >
                Profil
            </a>

            <a
                href="{{ route('berita') }}"
                class="{{ request()->routeIs('berita') ? 'active' : '' }}"
            >
                Berita
            </a>

            <a
                href="{{ route('galeri') }}"
                class="{{ request()->routeIs('galeri') ? 'active' : '' }}"
            >
                Galeri
            </a>

            <a
                href="{{ route('kontak') }}"
                class="{{ request()->routeIs('kontak') ? 'active' : '' }}"
            >
                Kontak
            </a>

        </div>

    </div>

</nav>


<style>

    /* ================= NAVBAR ================= */

    .navbar {
        background: white;
        padding: 12px 0;

        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);

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
        letter-spacing: 0.3px;
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
        position: relative;

        color: #111827;

        font-weight: bold;

        padding: 12px 0;

        transition:
            color 0.3s ease,
            transform 0.3s ease;
    }


    /* GARIS BAWAH */

    .navbar-menu a::after {
        content: "";

        position: absolute;

        left: 0;
        bottom: 0;

        width: 0;
        height: 3px;

        background: #0077b6;

        border-radius: 5px;

        transition: width 0.3s ease;
    }


    /* SAAT HOVER */

    .navbar-menu a:hover {
        color: #0077b6;
    }


    .navbar-menu a:hover::after {
        width: 100%;
    }


    /* MENU YANG SEDANG DIBUKA */

    .navbar-menu a.active {
        color: #0077b6;
    }


    .navbar-menu a.active::after {
        width: 100%;
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


    @media (max-width: 600px) {

        .navbar {
            padding: 10px 0;
        }


        .navbar-brand {
            gap: 10px;
        }


        .school-logo {
            width: 50px;
            height: 50px;
        }


        .school-name strong {
            font-size: 15px;
        }


        .school-name span {
            font-size: 12px;
        }


        .navbar-menu {
            gap: 18px;
        }


        .navbar-menu a {
            font-size: 14px;
        }

    }

</style>