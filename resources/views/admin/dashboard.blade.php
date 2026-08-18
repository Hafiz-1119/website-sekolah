<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin - SMP Negeri 2 Penawangan</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #CAF0F8;
            color: #1F2937;
        }

        .header {
            background: #03045E;
            color: white;
            padding: 20px 40px;
        }

        .header h1 {
            font-size: 24px;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
        }

        .welcome {
            background: white;
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 30px;
        }

        .welcome h2 {
            color: #023E8A;
            margin-bottom: 10px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            border-left: 5px solid #0077B6;
        }

        .card h3 {
            color: #023E8A;
            margin-bottom: 8px;
        }

        .card p {
            color: #64748B;
        }

        @media (max-width: 768px) {
            .cards {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 480px) {
            .cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <header class="header">
        <h1>Admin Panel - SMP Negeri 2 Penawangan</h1>
    </header>

    <main class="container">

        <section class="welcome">
            <h2>Selamat Datang, Admin</h2>

            <p>
                Selamat datang di halaman administrator
                Website SMP Negeri 2 Penawangan.
            </p>
        </section>

        <section class="cards">

            <div class="card">
                <h3>Profil</h3>
                <p>Kelola informasi sekolah.</p>
            </div>

            <div class="card">
                <h3>Berita</h3>
                <p>Kelola berita sekolah.</p>
            </div>

            <div class="card">
                <h3>Galeri</h3>
                <p>Kelola foto dan galeri sekolah.</p>
            </div>

            <div class="card">
                <h3>Pesan</h3>
                <p>Lihat pesan dari pengunjung.</p>
            </div>

        </section>

    </main>

</body>
</html>