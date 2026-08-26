@extends('layouts.admin')

@section('title', 'Edit Prestasi')

@section('content')

<style>

    .form-container {
        max-width: 650px;
        margin: 30px auto;
        background: white;
        padding: 30px;
        border-radius: 14px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    }

    .form-container h1 {
        color: #0F4C81;
        margin-bottom: 25px;
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
    .form-group textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #CBD5E1;
        border-radius: 8px;
        font-family: inherit;
    }

    .form-group textarea {
        min-height: 120px;
        resize: vertical;
    }

    .preview-foto {
    width: 120px;
    height: 80px;
    object-fit: cover;
    border-radius: 8px;
    display: block;
    margin-bottom: 15px;
    border: 1px solid #E2E8F0;
    }

    .btn-update {
        background: #0F4C81;
        color: white;
        border: none;
        padding: 11px 18px;
        border-radius: 8px;
        font-weight: bold;
        cursor: pointer;
    }

    .btn-batal {
        margin-left: 10px;
        color: #64748B;
        text-decoration: none;
    }

</style>


<div class="form-container">

    <h1>Edit Prestasi</h1>

    @if($prestasi->foto)
        <img src="{{ asset('storage/' . $prestasi->foto) }}"
         alt="{{ $prestasi->judul }}"
         class="preview-foto">
    @else
        <p style="color:#64748B; margin-bottom:15px;">
        Belum ada foto prestasi.
    <   /p>
    @endif

    <form
        action="{{ route('admin.prestasi.update', $prestasi->id) }}"
        method="POST">

        @csrf
        @method('PUT')


        <div class="form-group">

            <label>Judul Prestasi</label>

            <input
                type="text"
                name="judul"
                value="{{ old('judul', $prestasi->judul) }}">

        </div>


        <div class="form-group">

            <label>Deskripsi</label>

            <textarea
                name="deskripsi">{{ old('deskripsi', $prestasi->deskripsi) }}</textarea>

        </div>


        <button type="submit"
                class="btn-update">
            Update Prestasi
        </button>

        <a href="{{ route('admin.prestasi.index') }}"
           class="btn-batal">
            Batal
        </a>

    </form>

</div>

@endsection