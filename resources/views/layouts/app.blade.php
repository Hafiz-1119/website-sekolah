<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Website Sekolah')</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        html, body{
            height:100%;
        }

        body{
            background:#f5f5f5;
            display:flex;
            flex-direction:column;
        }

        /* =======================
            NAVBAR
        ======================= */

        nav{
            background:#0d6efd;
            padding:18px 80px;

            display:flex;
            justify-content:space-between;
            align-items:center;

            box-shadow:0 2px 10px rgba(0,0,0,.15);
        }

        nav .logo a{
            color:white;
            text-decoration:none;
            font-size:32px;
            font-weight:bold;
        }

        nav ul{
            list-style:none;
            display:flex;
            gap:30px;
        }

        nav ul li a{
            color:white;
            text-decoration:none;
            font-size:18px;
            transition:0.3s ease;
        }

        nav ul li a:hover{
            color:#001f5c;
        }

        /* =======================
            ISI HALAMAN
        ======================= */

        main{
            flex:1;
            width:90%;
            max-width:1200px;
            margin:auto;
            padding:50px 0;
        }

        /* =======================
            FOOTER
        ======================= */

        footer{
            background:#0d6efd;
            color:white;
            text-align:center;
            padding:20px;
        }

    </style>

</head>
<body>

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Isi Halaman --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

</body>
</html>