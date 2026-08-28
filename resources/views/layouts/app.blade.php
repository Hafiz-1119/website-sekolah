<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'SMP Negeri 2 Penawangan')
    </title>

    <style>
        /* ================= RESET ================= */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* ================= BODY ================= */
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f5f7fa;
            color: #1f2937;
            line-height: 1.6;
        }

        main {
            padding-top: 95px; /* Menggeser SEMUA halaman ke bawah secara otomatis sekaligus! */
        }

        /* ================= LINK ================= */
        a {
            text-decoration: none;
            color: inherit;
        }

        /* ================= IMAGE ================= */
        img {
            max-width: 100%;
            display: block;
        }

        /* ================= CONTAINER ================= */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }

        /* ================= SECTION ================= */
        .section {
            padding: 70px 0;
        }

        /* ================= SECTION TITLE ================= */
        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title h2 {
            font-size: 32px;
            margin-bottom: 10px;
            color: #123c69;
        }

        .section-title p {
            color: #6b7280;
        }

        /* ================= BUTTON ================= */
        .btn {
            display: inline-block;
            padding: 12px 22px;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-primary {
            background: #123c69;
            color: white;
        }

        .btn-primary:hover {
            background: #0d2e50;
        }

        /* ================= SPLASH SCREEN ================= */
        .splash-screen {
            position: fixed;
            inset: 0;
            width: 100%;
            height: 100vh;
            background: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 99999;
            opacity: 1;
            visibility: visible;
            
            /* Smoothing Transisi Keluar (Fade Out & Scale Up) */
            transition: 
                opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1),
                visibility 0.8s cubic-bezier(0.16, 1, 0.3, 1),
                transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
            
            will-change: opacity, transform, visibility;
            backface-visibility: hidden;
        }

        /* Saat splash screen menghilang */
        .splash-screen.hide {
            opacity: 0;
            visibility: hidden;
            transform: scale(1.05); /* Efek zoom-in halus saat menghilang */
            pointer-events: none;
        }

        /* ================= LOGO SPLASH ================= */
        .splash-logo {
            width: 180px;
            max-width: 60%;
            object-fit: contain;

            /* Gabungan animasi masuk dan berdenyut halus */
            animation: 
                logoSmoothEntrance 0.9s cubic-bezier(0.16, 1, 0.3, 1) forwards,
                logoPulseSmooth 2.5s ease-in-out infinite 0.9s;

            will-change: transform, opacity;
            backface-visibility: hidden;
        }

        /* Animasi Logo Muncul (Smooth Pop-up & Blur Reveal) */
        @keyframes logoSmoothEntrance {
            0% {
                opacity: 0;
                transform: scale(0.65) translateY(12px);
                filter: blur(8px);
            }
            100% {
                opacity: 1;
                transform: scale(1) translateY(0);
                filter: blur(0px);
            }
        }

        /* Animasi Berdenyut Halus */
        @keyframes logoPulseSmooth {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.035);
            }
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 768px) {
            .container {
                width: 92%;
            }

            .section {
                padding: 50px 0;
            }

            .section-title h2 {
                font-size: 26px;
            }

            .splash-logo {
                width: 140px;
            }
        }
    </style>

    {{-- CSS KHUSUS SETIAP HALAMAN --}}
    @yield('styles')
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

@if(request()->routeIs('home'))
    {{-- SPLASH SCREEN HANYA UNTUK BERANDA --}}
    <div class="splash-screen" id="splashScreen">
        <img
            src="{{ asset('images/Logo Smp 2 Penawangan.png') }}"
            alt="Logo SMP Negeri 2 Penawangan"
            class="splash-logo"
            loading="eager"
            decoding="sync"
        >
    </div>
@endif

    {{-- ================= NAVBAR ================= --}}
    @include('partials.navbar')

    {{-- ================= KONTEN HALAMAN ================= --}}
    <main>
        @yield('content')
    </main>

    {{-- ================= FOOTER ================= --}}
    @include('partials.footer')

    {{-- ================= SCRIPT KHUSUS HALAMAN ================= --}}
    @yield('scripts')

    {{-- ================= SPLASH SCREEN SCRIPT ================= --}}
@if(request()->routeIs('home'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const splashScreen = document.getElementById('splashScreen');

        if (splashScreen) {
            // Memberikan waktu logo muncul sempurna sebelum mulai fade out
            setTimeout(function () {
                splashScreen.classList.add('hide');
            }, 1200);

            // Menghapus elemen dari DOM tepat setelah animasi CSS (0.8s) selesai
            setTimeout(function () {
                splashScreen.remove();
            }, 2000);
        }
    });
</script>
@endif

</body>
</html>