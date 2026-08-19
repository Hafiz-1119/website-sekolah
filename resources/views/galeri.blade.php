@extends('layouts.app')

@section('content')

<style>
    * {
        box-sizing: border-box;
    }

    .galeri-container {
        width: 85%;
        margin: auto;
        padding: 50px 0;
    }

    .galeri-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .galeri-header h1 {
        color: #0F4C81;
        font-size: 36px;
        margin-bottom: 10px;
    }

    .galeri-header p {
        color: #64748B;
        font-size: 16px;
    }

    /* FILTER KATEGORI */
    .filter-galeri {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-bottom: 40px;
        flex-wrap: wrap;
    }

    .filter-galeri button {
        border: none;
        padding: 10px 20px;
        border-radius: 20px;
        background-color: #DBEAFE;
        color: #0F4C81;
        cursor: pointer;
        font-weight: bold;
        transition: 0.3s;
    }

    .filter-galeri button:hover,
    .filter-galeri button.active {
        background-color: #0F4C81;
        color: white;
    }

    /* GRID GALERI */
    .galeri-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    /* CARD */
    .galeri-card {
        background-color: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: 0.3s;
    }

    .galeri-card:hover {
        transform: translateY(-7px);
    }

    .galeri-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        display: block;
    }

    .galeri-info {
        padding: 20px;
    }

    .galeri-info h3 {
        color: #0F4C81;
        margin-top: 0;
        margin-bottom: 8px;
    }

    .galeri-info p {
        color: #64748B;
        font-size: 14px;
        line-height: 1.5;
        margin-bottom: 0;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
        .galeri-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 500px) {

    .galeri-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 8px;
    }

    .galeri-card {
        border-radius: 8px;
    }

    .galeri-card img {
        height: 100px;
    }

    .galeri-info {
        padding: 7px;
    }

    .galeri-info h3 {
        font-size: 10px;
        margin: 0;
    }

    /* SEMBUNYIKAN DESKRIPSI DI MOBILE */
    .galeri-info p {
        display: none;
    }

}
</style>


<div class="galeri-container">

    <!-- HEADER -->
    <div class="galeri-header">

        <h1>Galeri Dokumentasi</h1>

        <p>
            Potret berbagai kegiatan sekolah,
            ekstrakurikuler, dan festival & event.
        </p>

    </div>


    <!-- TOMBOL FILTER -->
    <div class="filter-galeri">

        <button class="filter-btn active" data-filter="semua">
            Semua
        </button>

        <button class="filter-btn" data-filter="sekolah">
            Kegiatan Sekolah
        </button>

        <button class="filter-btn" data-filter="ekstrakurikuler">
            Ekstrakurikuler
        </button>

        <button class="filter-btn" data-filter="festival">
            Festival & Event
        </button>

    </div>


    <!-- GALERI -->
    <div class="galeri-grid">


        <!-- =========================
             KEGIATAN SEKOLAH
        ========================== -->

        <div class="galeri-card sekolah">
            <img src="{{ asset('images/galeri/kegiatan sekolah/kerja bakti.jpg') }}">

            <div class="galeri-info">
                <h3>Kerja Bakti</h3>
                <p>
                    Kegiatan gotong royong siswa membersihkan dan
                    merawat taman di lingkungan sekolah.
                </p>
            </div>
        </div>


        <div class="galeri-card sekolah">
            <img src="{{ asset('images/galeri/kegiatan sekolah/senam.jpg') }}">

            <div class="galeri-info">
                <h3>Senam Pagi</h3>
                <p>
                    Kegiatan senam bersama seluruh siswa di lapangan sekolah
                    untuk menjaga kebugaran jasmani.
                </p>
            </div>
        </div>


        <div class="galeri-card sekolah">
            <img src="{{ asset('images/galeri/kegiatan sekolah/penyuluhan kesehatan.jpg') }}">

            <div class="galeri-info">
                <h3>Penyuluhan Kesehatan</h3>
                <p>
                    Kegiatan edukasi kesehatan bagi siswa yang disampaikan
                    oleh petugas atau tenaga kesehatan.
                </p>
            </div>
        </div>


        <div class="galeri-card sekolah">
            <img src="{{ asset('images/galeri/kegiatan sekolah/upacara.jpg') }}">

            <div class="galeri-info">
                <h3>Upacara Pagi</h3>
                <p>
                    Pelaksanaan upacara bendera rutin yang
                    diikuti oleh seluruh siswa dan guru.
                </p>
            </div>
        </div>


        <div class="galeri-card sekolah">
            <img src="{{ asset('images/galeri/kegiatan sekolah/perjusa.jpg') }}">

            <div class="galeri-info">
                <h3>Perkemahan Jumat dan Sabtu</h3>
                <p>
                    Kegiatan perkemahan pramuka yang diikuti siswa
                    dengan mendirikan tenda dan apel di lapangan sekolah.
                </p>
            </div>
        </div>


        <div class="galeri-card sekolah">
            <img src="{{ asset('images/galeri/kegiatan sekolah/isra miraj.jpg') }}">

            <div class="galeri-info">
                <h3>Peringatan Isra Mi'raj Nabi Muhammad SAW</h3>
                <p>
                    Kegiatan keagamaan dalam rangka memperingati Isra Mi'raj,
                    diisi dengan tausiyah bersama guru dan siswa.
                </p>
            </div>
        </div>


        <div class="galeri-card sekolah">
            <img src="{{ asset('images/galeri/kegiatan sekolah/rohani.jpg') }}">

            <div class="galeri-info">
                <h3>Rohani</h3>
                <p>
                    Kegiatan keagamaan berupa renungan atau kultum
                    yang dilaksanakan setiap hari Jumat.
                </p>
            </div>
        </div>



        <!-- =========================
             EKSTRAKURIKULER
        ========================== -->

        <div class="galeri-card ekstrakurikuler">
            <img src="{{ asset('images/galeri/ekstrakurikuler/pramuka.jpg') }}">

            <div class="galeri-info">
                <h3>Kegiatan Pramuka</h3>
                <p>
                    Latihan rutin dan kegiatan kepramukaan siswa.
                </p>
            </div>
        </div>


        <div class="galeri-card ekstrakurikuler">
            <img src="{{ asset('images/galeri/ekstrakurikuler/voly.jpg') }}">

            <div class="galeri-info">
                <h3>Olahraga Voli</h3>
                <p>
                    Aktivitas latihan bola voli bersama pelatih
                    di halaman sekolah.
                </p>
            </div>
        </div>


        <div class="galeri-card ekstrakurikuler">
            <img src="{{ asset('images/galeri/ekstrakurikuler/drumband.jpg') }}">

            <div class="galeri-info">
                <h3>Drumband</h3>
                <p>
                    Latihan dan penampilan drumband siswa
                    dalam formasi baris-berbaris di lapangan sekolah.
                </p>
            </div>
        </div>


        <div class="galeri-card ekstrakurikuler">
            <img src="{{ asset('images/galeri/ekstrakurikuler/pmr.jpg') }}">

            <div class="galeri-info">
                <h3>PMR</h3>
                <p>
                    Kegiatan pelatihan dan pembinaan siswa
                    dalam bidang kepalangmerahan dan pertolongan pertama.
                </p>
            </div>
        </div>



        <!-- =========================
             FESTIVAL & EVENT
        ========================== -->

        <div class="galeri-card festival">
            <img src="{{ asset('images/galeri/festival/jalan sehat.jpg') }}">

            <div class="galeri-info">
                <h3>Jalan Sehat</h3>
                <p>
                    Kegiatan jalan sehat dalam rangka memperingati
                    hari kemerdekaan tingkat Kecamatan Penawangan.
                </p>
            </div>
        </div>


        <div class="galeri-card festival">
            <img src="{{ asset('images/galeri/festival/karnaval.jpg') }}">

            <div class="galeri-info">
                <h3>Karnaval Kemerdekaan Indonesia</h3>
                <p>
                    Karnaval HUT RI ke-81.
                </p>
            </div>
        </div>

    </div>

</div>


<script>

    // Mengambil semua tombol filter
    const tombolFilter = document.querySelectorAll('.filter-btn');

    // Mengambil tempat semua card
    const galeriGrid = document.querySelector('.galeri-grid');

    // Mengambil semua card dan mengubahnya menjadi array
    const galeriCard = Array.from(
        document.querySelectorAll('.galeri-card')
    );


    // Menyimpan urutan asli dari HTML
    const urutanAsli = [...galeriCard];


    // Fungsi untuk mengembalikan card ke urutan asli
    function kembalikanUrutan() {

        urutanAsli.forEach(function(card) {
            galeriGrid.appendChild(card);
        });

    }


    // Fungsi untuk mengacak urutan card
    function acakGaleri() {

        // Membuat salinan array
        const cardAcak = [...galeriCard];

        // Mengacak array
        cardAcak.sort(function() {
            return Math.random() - 0.5;
        });

        // Menampilkan ulang sesuai urutan acak
        cardAcak.forEach(function(card) {
            galeriGrid.appendChild(card);
        });

    }


    // Ketika tombol kategori diklik
    tombolFilter.forEach(function(tombol) {

        tombol.addEventListener('click', function() {

            // Mengambil kategori dari tombol
            const kategori = this.getAttribute('data-filter');


            // Menghapus class active dari semua tombol
            tombolFilter.forEach(function(btn) {
                btn.classList.remove('active');
            });


            // Memberikan class active pada tombol yang diklik
            this.classList.add('active');


            // Jika klik SEMUA
            if (kategori === 'semua') {

                // Menampilkan semua card
                galeriCard.forEach(function(card) {
                    card.style.display = 'block';
                });

                // Mengacak urutan card
                acakGaleri();

            } else {

                // Mengembalikan card ke urutan asli
                kembalikanUrutan();


                // Menampilkan hanya kategori yang dipilih
                galeriCard.forEach(function(card) {

                    if (card.classList.contains(kategori)) {

                        card.style.display = 'block';

                    } else {

                        card.style.display = 'none';

                    }

                });

            }

        });

    });

</script>

@endsection