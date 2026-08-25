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

            background: white;

            display: flex;
            justify-content: center;
            align-items: center;

            z-index: 9999;

            opacity: 1;
            visibility: visible;

            transition:
                opacity 0.8s ease,
                visibility 0.8s ease;
        }


        /* Saat splash screen menghilang */

        .splash-screen.hide {
            opacity: 0;
            visibility: hidden;

            pointer-events: none;
        }


        /* ================= LOGO SPLASH ================= */

        .splash-logo {
            width: 180px;
            max-width: 60%;

            animation:
                logoMuncul 1s ease forwards,
                logoBerdenyut 2s ease-in-out infinite 1s;
        }


        /* Animasi logo muncul */

        @keyframes logoMuncul {

            from {
                opacity: 0;
                transform: scale(0.7);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }

        }


        /* Animasi halus setelah logo muncul */

        @keyframes logoBerdenyut {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.04);
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

</head>


<body>


@if(request()->routeIs('home'))

    {{-- SPLASH SCREEN HANYA UNTUK BERANDA --}}
    <div class="splash-screen" id="splashScreen">

        <img
            src="{{ asset('images/Logo Smp 2 Penawangan.png') }}"
            alt="Logo SMP Negeri 2 Penawangan"
            class="splash-logo">

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

    window.addEventListener('load', function () {

        const splashScreen =
            document.getElementById('splashScreen');

        setTimeout(function () {

            splashScreen.classList.add('hide');

        }, 1500);


        setTimeout(function () {

            splashScreen.remove();

        }, 2300);

    });

</script>

@endif


</body>

</html>