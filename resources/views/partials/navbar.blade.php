<nav class="navbar">

    <div class="container navbar-container">

        {{-- LOGO DAN IDENTITAS SEKOLAH --}}
        <a href="{{ route('home') }}" class="navbar-brand">

            <img
                src="{{ asset('images/Logo Smp 2 Penawangan.png') }}"
                alt="Logo SMP Negeri 2 Penawangan"
                class="school-logo"
                loading="eager"
                decoding="sync"
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let lastScrollTop = 0;
        const navbar = document.querySelector('.navbar');
        const scrollThreshold = 10;

        // Menggunakan requestAnimationFrame untuk performa scroll 60FPS yang smooth
        let ticking = false;

        window.addEventListener('scroll', function() {
            if (!ticking) {
                window.requestAnimationFrame(function() {
                    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                    if (scrollTop <= scrollThreshold) {
                        navbar.classList.remove('navbar-hidden');
                    } else if (scrollTop > lastScrollTop) {
                        navbar.classList.add('navbar-hidden');
                    } else {
                        navbar.classList.remove('navbar-hidden');
                    }
                    
                    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
                    ticking = false;
                });

                ticking = true;
            }
        });
    });
</script>

<style>

    .navbar {
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(8px); /* Efek blur halus */
        -webkit-backdrop-filter: blur(8px);
        padding: 12px 0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 9999;
        
        /* Optimasi transisi dengan Kurva cubic-bezier dan Akselerasi GPU */
        transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        will-change: transform;
        backface-visibility: hidden;
    }

    .navbar-hidden {
        transform: translateY(-100%);
    }

    .navbar-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    /* ================= BRAND & ANIMASI LOGO ================= */

    .navbar-brand {
        display: flex;
        align-items: center;
        gap: 14px;
        text-decoration: none;
    }

    .school-logo {
        width: 58px;
        height: 58px;
        object-fit: contain;
        
        /* Animasi fade-in halus khusus logo saat dipanggil/refresh */
        animation: logoFadeIn 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        will-change: opacity, transform;
    }

    .school-name {
        display: flex;
        flex-direction: column;
        animation: textFadeIn 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards;
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

    /* Keyframes untuk Animasi Refresh */
    @keyframes logoFadeIn {
        from {
            opacity: 0;
            transform: scale(0.92) translateY(-4px);
        }
        to {
            opacity: 1;
            transform: scale(1) translateY(0);
        }
    }

    @keyframes textFadeIn {
        from {
            opacity: 0;
            transform: translateX(-6px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
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
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .navbar-menu a::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0;
        height: 3px;
        background: #0077b6;
        border-radius: 5px;
        transition: width 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .navbar-menu a:hover {
        color: #0077b6;
    }

    .navbar-menu a:hover::after,
    .navbar-menu a.active::after {
        width: 100%;
    }

    .navbar-menu a.active {
        color: #0077b6;
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