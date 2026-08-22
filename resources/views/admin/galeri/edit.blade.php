@extends('layouts.admin')

@section('content')

<style>

    .form-container {
        width: 600px;
        max-width: 90%;
        margin: 50px auto;
        background: white;
        padding: 35px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }

    .form-container h1 {
        color: #0F4C81;
        margin-bottom: 30px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #CBD5E1;
        border-radius: 8px;
    }

    .form-group textarea {
        height: 120px;
    }

    .foto-lama {
        width: 200px;
        border-radius: 10px;
        margin-top: 10px;
    }

    .btn-update {
        background: #0F4C81;
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 8px;
        cursor: pointer;
    }

</style>


<div class="form-container">

    <h1>Edit Galeri</h1>


    <form
        action="{{ route('admin.galeri.update', $galeri->id) }}"
        method="POST"
        enctype="multipart/form-data">

        @csrf

        @method('PUT')


        <!-- JUDUL -->

        <div class="form-group">

            <label>Judul</label>

            <input
                type="text"
                name="judul"
                value="{{ old('judul', $galeri->judul) }}">

        </div>


        <!-- KATEGORI -->

        <div class="form-group">

            <label>Kategori</label>

            <select name="kategori">

                <option value="Kegiatan Sekolah"
                    {{ $galeri->kategori == 'Kegiatan Sekolah' ? 'selected' : '' }}>

                    Kegiatan Sekolah

                </option>

                <option value="Ekstrakurikuler"
                    {{ $galeri->kategori == 'Ekstrakurikuler' ? 'selected' : '' }}>

                    Ekstrakurikuler

                </option>

                <option value="Festival & Event"
                    {{ $galeri->kategori == 'Festival & Event' ? 'selected' : '' }}>

                    Festival & Event

                </option>

            </select>

        </div>


        <!-- DESKRIPSI -->

        <div class="form-group">

            <label>Deskripsi</label>

            <textarea name="deskripsi">{{ old('deskripsi', $galeri->deskripsi) }}</textarea>

        </div>


        <!-- FOTO LAMA -->

        <div class="form-group">

            <label>Foto Saat Ini</label>

            <br>

            <img
                src="{{ asset('storage/' . $galeri->foto) }}"
                class="foto-lama">

        </div>


        <!-- FOTO BARU -->

        <div class="form-group">

            <label>Ganti Foto (Opsional)</label>

            <input
                type="file"
                name="foto"
                accept="image/*">

        </div>


        <button type="submit"
                class="btn-update">

            Update Galeri

        </button>

        <a href="{{ route('admin.galeri') }}">
            Batal
        </a>

    </form>

</div>

@endsection