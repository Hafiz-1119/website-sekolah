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
    }

    .filter-galeri button:hover {
        background-color: #0F4C81;
        color: white;
    }

    .galeri-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

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
    }

    .galeri-info {
        padding: 20px;
    }

    .galeri-info h3 {
        color: #0F4C81;
        margin-bottom: 8px;
    }

    .galeri-info p {
        color: #64748B;
        font-size: 14px;
        line-height: 1.5;
    }

    @media (max-width: 768px) {
        .galeri-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 500px) {
        .galeri-grid {
            grid-template-columns: 1fr;
        }
    }
</style>


<div class="galeri-container">

    <div class="galeri-header">
        <h1>Galeri Dokumentasi</h1>

        <p>
            Potret berbagai kegiatan akademik,
            ekstrakurikuler, dan kegiatan sekolah.
        </p>
    </div>


    <div class="filter-galeri">
        <button>Semua</button>
        <button>Akademik</button>
        <button>Ekstrakurikuler</button>
        <button>Festival & Event</button>
    </div>


    <div class="galeri-grid">

        <div class="galeri-card">
            <img src="{{ asset('images/galeri/ekstrakurikuler/voly.jpg') }}">

            <div class="galeri-info">
                <h3>Olahraga Voly</h3>
                <p>
                    Aktivitas Olahraga Voly
                </p>
            </div>
        </div>


        <div class="galeri-card">
            <img src="https://images.unsplash.com/photo-1546519638-68e109498ffc">

            <div class="galeri-info">
                <h3>Olahraga Sekolah</h3>
                <p>
                    Aktivitas olahraga dan
                    pengembangan bakat siswa.
                </p>
            </div>
        </div>


        <div class="galeri-card">
            <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655">

            <div class="galeri-info">
                <h3>Kegiatan Pramuka</h3>
                <p>
                    Latihan rutin dan kegiatan
                    kepramukaan siswa.
                </p>
            </div>
        </div>


        <div class="galeri-card">
            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3">

            <div class="galeri-info">
                <h3>Laboratorium Komputer</h3>
                <p>
                    Pembelajaran teknologi dan
                    literasi digital.
                </p>
            </div>
        </div>


        <div class="galeri-card">
            <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30">

            <div class="galeri-info">
                <h3>Festival Sekolah</h3>
                <p>
                    Dokumentasi acara dan
                    kegiatan sekolah.
                </p>
            </div>
        </div>


        <div class="galeri-card">
            <img src="{{ asset('images/galeri/festival/karnaval.jpg') }}">

            <div class="galeri-info">
                <h3>Festival Sekolah</h3>
                <p>
                    Karnaval HUT RI Ke 81
                </p>
            </div>
        </div>

    </div>

</div>

@endsection