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

        <h1>Galeri</h1>

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

        <button class="filter-btn" data-filter="Kegiatan Sekolah">
            Kegiatan Sekolah
        </button>

        <button class="filter-btn" data-filter="Ekstrakurikuler">
            Ekstrakurikuler
        </button>

        <button class="filter-btn" data-filter="Festival & Event">
            Festival & Event
        </button>
    </div>


    <!-- GALERI -->
    <div class="galeri-grid">

        @forelse($galeris as $galeri)

            <div class="galeri-card"
                data-kategori="{{ $galeri->kategori }}">

                <img
                    src="{{ asset('storage/' . $galeri->foto) }}"
                    alt="{{ $galeri->judul }}">

                <div class="galeri-info">

                    <h3>{{ $galeri->judul }}</h3>

                    <p>{{ $galeri->deskripsi }}</p>

                </div>

            </div>

        @empty

            <p style="text-align:center; grid-column: 1 / -1;">
                Belum ada dokumentasi galeri.
            </p>

        @endforelse

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

<script>

function filterGaleri(kategori) {

    const cards = document.querySelectorAll('.galeri-card');

    cards.forEach(card => {

        if (
            kategori === 'Semua' ||
            card.dataset.kategori === kategori
        ) {

            card.style.display = 'block';

        } else {

            card.style.display = 'none';

        }

    });

}

</script>


<script>
    const filterButtons = document.querySelectorAll('.filter-btn');
    const galeriCards = document.querySelectorAll('.galeri-card');

    filterButtons.forEach(button => {

        button.addEventListener('click', function() {

            const kategori = this.getAttribute('data-filter');

            // Mengubah tombol aktif
            filterButtons.forEach(btn => {
                btn.classList.remove('active');
            });

            this.classList.add('active');

            // Filter galeri
            galeriCards.forEach(card => {

                const kategoriCard = card.getAttribute('data-kategori');

                if (
                    kategori === 'semua' ||
                    kategoriCard === kategori
                ) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }

            });

        });

    });
</script>


@endsection