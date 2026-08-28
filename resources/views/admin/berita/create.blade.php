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

    .form-title {
        margin-bottom: 35px;
    }

    .form-title h1 {
        margin: 0;
        font-size: 36px;
        color: #155684;
    }

    .form-group {
        margin-bottom: 25px;
    }

    .form-group label {
        display: block;
        margin-bottom: 10px;
        font-size: 18px;
        font-weight: 600;
        color: #243f59;
    }

    .form-control {
        width: 100%;
        box-sizing: border-box;
        border: 1px solid #c8d6e4;
        border-radius: 11px;
        padding: 15px 16px;
        font-size: 16px;
        outline: none;
        background: white;
    }

    .form-control:focus {
        border-color: #155684;
        box-shadow: 0 0 0 3px rgba(21,86,132,0.08);
    }

    textarea.form-control {
        min-height: 150px;
        resize: vertical;
    }

    textarea.isi-berita {
        min-height: 300px;
    }

    .row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .error {
        color: #c0392b;
        font-size: 14px;
        margin-top: 6px;
    }

    .preview {
        margin-top: 12px;
        max-width: 250px;
        max-height: 160px;
        border-radius: 10px;
        display: none;
    }

    .button-area {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-top: 30px;
    }

    .btn-simpan {
        border: none;
        background: #155684;
        color: white;
        padding: 15px 28px;
        border-radius: 11px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
    }

    .btn-simpan:hover {
        background: #0e4268;
    }

    .btn-batal {
        color: #536f8a;
        text-decoration: none;
        font-size: 16px;
    }

    @media(max-width: 700px) {

        .form-card {
            padding: 25px;
        }

        .row {
            grid-template-columns: 1fr;
        }

    }

</style>


<div class="form-page">

    <div class="form-card">

        <div class="form-title">
            <h1>Tambah Berita</h1>
        </div>


        <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
            @csrf


            {{-- JUDUL --}}

            <div class="form-group">

                <label for="judul">
                    Judul Berita
                </label>

                <input
                    type="text"
                    name="judul"
                    id="judul"
                    class="form-control"
                    value="{{ old('judul') }}"
                    placeholder="Contoh: Siswa SMP Negeri 1 Meraih Juara Olimpiade"
                    required
                >

                @error('judul')
                    <div class="error">{{ $message }}</div>
                @enderror

            </div>


            {{-- KATEGORI + PENULIS --}}

            <div class="row">

                <div class="form-group">

                    <label for="kategori">
                        Kategori
                    </label>

                    <select
                        name="kategori"
                        id="kategori"
                        class="form-control"
                        required
                    >

                        <option value="">
                            -- Pilih Kategori --
                        </option>

                        <option value="Prestasi"
                            {{ old('kategori') == 'Prestasi' ? 'selected' : '' }}>
                            Prestasi
                        </option>

                        <option value="Kegiatan"
                            {{ old('kategori') == 'Kegiatan' ? 'selected' : '' }}>
                            Kegiatan
                        </option>

                        <option value="Akademik"
                            {{ old('kategori') == 'Akademik' ? 'selected' : '' }}>
                            Akademik
                        </option>

                        <option value="Pengumuman"
                            {{ old('kategori') == 'Pengumuman' ? 'selected' : '' }}>
                            Pengumuman
                        </option>

                        <option value="Sekolah"
                            {{ old('kategori') == 'Sekolah' ? 'selected' : '' }}>
                            Sekolah
                        </option>

                    </select>

                    @error('kategori')
                        <div class="error">{{ $message }}</div>
                    @enderror

                </div>


                <div class="form-group">

                    <label for="penulis">
                        Penulis
                    </label>

                    <input
                        type="text"
                        name="penulis"
                        id="penulis"
                        class="form-control"
                        value="{{ old('penulis') }}"
                        placeholder="Contoh: Admin Sekolah"
                    >

                    @error('penulis')
                        <div class="error">{{ $message }}</div>
                    @enderror

                </div>

            </div>


            {{-- TANGGAL --}}

            <div class="form-group">

                <label for="tanggal">
                    Tanggal Berita
                </label>

                <input
                    type="date"
                    name="tanggal"
                    id="tanggal"
                    class="form-control"
                    value="{{ old('tanggal', date('Y-m-d')) }}"
                    required
                >

                @error('tanggal')
                    <div class="error">{{ $message }}</div>
                @enderror

            </div>


            {{-- RINGKASAN --}}

            <div class="form-group">

                <label for="ringkasan">
                    Ringkasan Berita
                </label>

                <textarea
                    name="ringkasan"
                    id="ringkasan"
                    class="form-control"
                    placeholder="Tuliskan ringkasan singkat berita..."
                >{{ old('ringkasan') }}</textarea>

                @error('ringkasan')
                    <div class="error">{{ $message }}</div>
                @enderror

            </div>


            {{-- ISI BERITA --}}

            <div class="form-group">

                <label for="isi">
                    Isi Berita
                </label>

                <textarea
                    name="isi"
                    id="isi"
                    class="form-control isi-berita"
                    placeholder="Tuliskan isi berita secara lengkap..."
                    required
                >{{ old('isi') }}</textarea>

                @error('isi')
                    <div class="error">{{ $message }}</div>
                @enderror

            </div>


            {{-- FOTO --}}

            <div class="form-group">

                <label for="foto">
                    Upload Foto
                </label>

                <input
                    type="file"
                    name="foto"
                    id="foto"
                    class="form-control"
                    accept="image/jpeg,image/png,image/webp"
                >

                <img
                    id="previewFoto"
                    class="preview"
                    alt="Preview foto"
                >

                <small>
                    Format JPG, JPEG, PNG, WEBP. Maksimal 2 MB.
                </small>

                @error('foto')
                    <div class="error">{{ $message }}</div>
                @enderror

            </div>


            {{-- BUTTON --}}

            <div class="button-area">

                <button
                    type="submit"
                    class="btn-simpan"
                >
                    Simpan Berita
                </button>

                <a
                    href="{{ route('admin.berita') }}"
                    class="btn-batal"
                >
                    Batal
                </a>

            </div>

        </form>

    </div>

</div>


<script>

    document.getElementById('foto').addEventListener('change', function(event) {

        const file = event.target.files[0];
        const preview = document.getElementById('previewFoto');

        if (file) {

            preview.src = URL.createObjectURL(file);
            preview.style.display = 'block';

        } else {

            preview.style.display = 'none';

        }

    });

</script>

@endsection