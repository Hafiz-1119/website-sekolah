<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'SMP Negeri 2 Penawangan')
    </title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f5f7fa;
            color: #1f2937;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }

        .section {
            padding: 70px 0;
        }

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
        }
    </style>

    @yield('styles')
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    @yield('scripts')

</body>
</html>