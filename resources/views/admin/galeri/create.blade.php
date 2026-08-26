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
        color: #334155;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #CBD5E1;
        border-radius: 8px;
        outline: none;
    }

    .form-group textarea {
        height: 120px;
        resize: vertical;
    }

    .btn-simpan {
        background: #0F4C81;
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 8px;
        cursor: pointer;
        font-weight: bold;
    }

    .btn-kembali {
        margin-left: 10px;
        text-decoration: none;
        color: #64748B;
    }

    .error {
        color: #DC2626;
        font-size: 13px;
        margin-top: 5px;
    }

</style>


<div class="form-container">

    <h1>Tambah Galeri</h1>


    <form
        action="{{ route('admin.galeri.store') }}"
        method="POST"
        enctype="multipart/form-data">

        @csrf


        <!-- JUDUL -->

        <div class="form-group">

            <label>Judul Kegiatan</label>

            <input
                type="text"
                name="judul"
                value="{{ old('judul') }}"
                placeholder="Contoh: Kerja Bakti">

            @error('judul')
                <div class="error">
                    {{ $message }}
                </div>
            @enderror

        </div>


        <!-- KATEGORI -->

        <div class="form-group">

            <label>Kategori</label>

            <select name="kategori">

                <option value="">
                    -- Pilih Kategori --
                </option>

                <option value="Kegiatan Sekolah">
                    Kegiatan Sekolah
                </option>

                <option value="Ekstrakurikuler">
                    Ekstrakurikuler
                </option>

                <option value="Festival & Event">
                    Festival & Event
                </option>

            </select>

            @error('kategori')
                <div class="error">
                    {{ $message }}
                </div>
            @enderror

        </div>


        <!-- DESKRIPSI -->

        <div class="form-group">

            <label>Deskripsi</label>

            <textarea
                name="deskripsi"
                placeholder="Tulis deskripsi kegiatan...">{{ old('deskripsi') }}</textarea>

            @error('deskripsi')
                <div class="error">
                    {{ $message }}
                </div>
            @enderror

        </div>


        <!-- FOTO -->

        <div class="form-group">

            <label>Upload Foto</label>

            <input
                type="file"
                name="foto"
                accept="image/jpeg,image/png,image/webp">


            @error('foto')
                <div class="error">
                    {{ $message }}
                </div>
            @enderror

        </div>


        <button type="submit"
                class="btn-simpan">

            Simpan Galeri

        </button>


        <a href="{{ route('admin.galeri') }}"
           class="btn-kembali">

            Batal

        </a>

    </form>

</div>

@endsection