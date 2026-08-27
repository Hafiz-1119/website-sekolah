@extends('layouts.app')

@section('content')

<style>

    .form-page {
        min-height: 100vh;
        padding: 50px 7% 80px;
        background: #f1f6fb;
    }

    .form-card {
        max-width: 950px;
        margin: auto;
        background: white;
        padding: 45px;
        border-radius: 18px;
        box-shadow: 0 8px 30px rgba(0,0,0,0.06);
    }

    h1 {
        color: #155684;
        margin-bottom: 35px;
    }

    .form-group {
        margin-bottom: 23px;
    }

    label {
        display: block;
        margin-bottom: 9px;
        font-size: 18px;
        font-weight: 600;
        color: #243f59;
    }

    .form-control {
        width: 100%;
        box-sizing: border-box;
        padding: 14px 16px;
        border: 1px solid #c8d6e4;
        border-radius: 10px;
        font-size: 16px;
    }

    textarea {
        resize: vertical;
    }

    .isi {
        min-height: 300px;
    }

    .row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .foto-lama {
        width: 220px;
        height: 140px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 12px;
        display: block;
    }

    .btn-simpan {
        background: #155684;
        color: white;
        border: none;
        padding: 14px 25px;
        border-radius: 10px;
        font-weight: 600;
        cursor: pointer;
    }

    .btn-batal {
        color: #536f8a;
        text-decoration: none;
        margin-left: 18px;
    }

    @media(max-width:700px) {

        .row {
            grid-template-columns: 1fr;
        }

        .form-card {
            padding: 25px;
        }

    }

</style>


<div class="form-page">

    <div class="form-card">

        <h1>Edit Berita</h1>


        <form
            action="{{ route('admin.berita.update', $berita->id) }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf
            @method('PUT')


            <div class="form-group">

                <label>Judul Berita</label>

                <input
                    type="text"
                    name="judul"
                    class="form-control"
                    value="{{ old('judul', $berita->judul) }}"
                    required
                >

            </div>


            <div class="row">

                <div class="form-group">

                    <label>Kategori</label>

                    <select
                        name="kategori"
                        class="form-control"
                        required
                    >

                        <option value="Prestasi"
                            {{ $berita->kategori == 'Prestasi' ? 'selected' : '' }}>
                            Prestasi
                        </option>

                        <option value="Kegiatan"
                            {{ $berita->kategori == 'Kegiatan' ? 'selected' : '' }}>
                            Kegiatan
                        </option>

                        <option value="Akademik"
                            {{ $berita->kategori == 'Akademik' ? 'selected' : '' }}>
                            Akademik
                        </option>

                        <option value="Pengumuman"
                            {{ $berita->kategori == 'Pengumuman' ? 'selected' : '' }}>
                            Pengumuman
                        </option>

                        <option value="Sekolah"
                            {{ $berita->kategori == 'Sekolah' ? 'selected' : '' }}>
                            Sekolah
                        </option>

                    </select>

                </div>


                <div class="form-group">

                    <label>Penulis</label>

                    <input
                        type="text"
                        name="penulis"
                        class="form-control"
                        value="{{ old('penulis', $berita->penulis) }}"
                    >

                </div>

            </div>


            <div class="form-group">

                <label>Tanggal Berita</label>

                <input
                    type="date"
                    name="tanggal"
                    class="form-control"
                    value="{{ old('tanggal', $berita->tanggal) }}"
                    required
                >

            </div>


            <div class="form-group">

                <label>Ringkasan Berita</label>

                <textarea
                    name="ringkasan"
                    class="form-control"
                    rows="5"
                >{{ old('ringkasan', $berita->ringkasan) }}</textarea>

            </div>


            <div class="form-group">

                <label>Isi Berita</label>

                <textarea
                    name="isi"
                    class="form-control isi"
                    required
                >{{ old('isi', $berita->isi) }}</textarea>

            </div>


            <div class="form-group">

                <label>Foto Berita</label>

                @if($berita->foto)

                    <img
                        src="{{ asset('storage/' . $berita->foto) }}"
                        class="foto-lama"
                    >

                @endif

                <input
                    type="file"
                    name="foto"
                    class="form-control"
                    accept="image/jpeg,image/png,image/webp"
                >

            </div>


            <button
                type="submit"
                class="btn-simpan"
            >
                Simpan Perubahan
            </button>


            <a
                href="{{ route('admin.berita') }}"
                class="btn-batal"
            >
                Batal
            </a>

        </form>

    </div>

</div>

@endsection