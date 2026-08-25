@extends('layouts.app')

@section('content')

<style>

    * {
        box-sizing: border-box;
    }

    body {
        background: #F1F5F9;
    }

    .form-container {
        width: 600px;
        max-width: 92%;
        margin: 50px auto;
        background: #FFFFFF;
        padding: 35px;
        border-radius: 16px;
        box-shadow: 0 8px 25px rgba(15, 76, 129, 0.10);
    }

    .form-header {
        margin-bottom: 30px;
    }

    .form-header h1 {
        color: #0F4C81;
        margin: 0 0 8px;
        font-size: 30px;
    }

    .form-header p {
        margin: 0;
        color: #64748B;
        font-size: 14px;
    }

    .form-group {
        margin-bottom: 22px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: #1E293B;
        font-weight: 600;
        font-size: 14px;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 12px 14px;
        border: 1px solid #CBD5E1;
        border-radius: 9px;
        background: #FFFFFF;
        color: #334155;
        font-size: 14px;
        outline: none;
        transition: 0.2s;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        border-color: #0F4C81;
        box-shadow: 0 0 0 3px rgba(15, 76, 129, 0.10);
    }

    .form-group textarea {
        min-height: 130px;
        resize: vertical;
        line-height: 1.6;
    }

    .file-info {
        margin-top: 7px;
        font-size: 12px;
        color: #64748B;
    }

    .form-actions {
        display: flex;
        gap: 10px;
        margin-top: 30px;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 11px 20px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        border: none;
        transition: 0.2s;
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

    .btn-simpan:hover {
        background: #083B66;
    }

    .btn-batal {
        background: transparent;
        color: #64748B;
        padding: 11px 0;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
    }

    .btn-batal:hover {
        color: #0F4C81;
    }


    /* =========================
       RESPONSIVE MOBILE
       ========================= */

    @media (max-width: 600px) {

        .form-container {
            width: 94%;
            margin: 25px auto;
            padding: 22px;
            border-radius: 12px;
        }

        .form-header h1 {
            font-size: 24px;
        }

        .form-header p {
            font-size: 13px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group input,
        .form-group textarea {
            font-size: 13px;
            padding: 11px 12px;
        }

        .form-actions {
            flex-direction: column;
        }

        .btn {
            width: 100%;
        }

    }

</style>


<div class="form-container">

    <div class="form-header">

        <h1>Tambah Prestasi</h1>

        <p>
            Tambahkan prestasi dan penghargaan sekolah.
        </p>

    </div>


    <form
        action="{{ route('admin.prestasi.store') }}"
        method="POST"
        enctype="multipart/form-data">

        @csrf


        <!-- JUDUL -->

        <div class="form-group">

            <label for="judul">
                Judul Prestasi
            </label>

            <input
                type="text"
                id="judul"
                name="judul"
                value="{{ old('judul') }}"
                placeholder="Contoh: Juara 1 Adiwiyata Kabupaten"
                required>

        </div>


        <!-- DESKRIPSI -->

        <div class="form-group">

            <label for="deskripsi">
                Deskripsi
            </label>

            <textarea
                id="deskripsi"
                name="deskripsi"
                placeholder="Masukkan deskripsi prestasi..."
                required>{{ old('deskripsi') }}</textarea>

        </div>


        <!-- FOTO -->

        <div class="form-group">

            <label for="foto">
                Foto Prestasi
            </label>

            <input
                type="file"
                id="foto"
                name="foto"
                accept="image/jpeg,image/png,image/webp">


        </div>


        <!-- BUTTON -->

        <div class="form-actions">

            <button
                type="submit"
                class="btn btn-simpan">

                Simpan Prestasi

            </button>


            <a
                href="{{ route('admin.prestasi.index') }}"
                class="btn btn-batal">

                Batal

            </a>

        </div>

    </form>

</div>

@endsection