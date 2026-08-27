@extends('layouts.admin')

@section('title', 'Edit Guru & Staff')

@section('content')

<style>
    .guru-edit-page {
        padding: 20px 20px 50px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .guru-edit-header {
        width: 900px;
        max-width: 100%;
        margin-bottom: 28px;
    }

    .guru-edit-header h2 {
        color: #123f70;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 6px;
    }

    .guru-edit-header p {
        color: #718096;
        margin: 0;
        font-size: 15px;
    }

    .guru-edit-card {
        width: 900px;
        max-width: 100%;
        background: #ffffff;
        border: 1px solid #e5eaf0;
        border-radius: 16px;
        box-shadow: 0 5px 20px rgba(18, 63, 112, 0.07);
    }

    .guru-edit-card-body {
        padding: 32px;
    }

    .form-group-custom {
        margin-bottom: 22px;
    }

    .form-label-custom {
        display: block;
        color: #123f70;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .form-control-custom,
    .form-select-custom {
        width: 100%;
        padding: 11px 14px;
        border: 1px solid #d5dde8;
        border-radius: 9px;
        font-size: 14px;
        color: #243b53;
        background: #fff;
        outline: none;
        transition: all 0.2s ease;
        box-sizing: border-box;
    }

    .form-control-custom:focus,
    .form-select-custom:focus {
        border-color: #2563a8;
        box-shadow: 0 0 0 3px rgba(37, 99, 168, 0.12);
    }

    .form-help {
        display: block;
        margin-top: 7px;
        font-size: 12px;
        color: #8a96a3;
    }

    .foto-lama-box {
        display: flex;
        align-items: center;
        gap: 20px;
        padding: 18px;
        background: #f7f9fc;
        border: 1px solid #e3e9f0;
        border-radius: 12px;
        margin-top: 8px;
    }

    .foto-lama-box img {
        width: 110px;
        height: 135px;
        object-fit: cover;
        border-radius: 10px;
        border: 1px solid #dce3eb;
    }

    .foto-info h5 {
        margin: 0 0 6px;
        color: #123f70;
        font-size: 15px;
        font-weight: 700;
    }

    .foto-info p {
        margin: 0;
        color: #7b8794;
        font-size: 13px;
        line-height: 1.5;
    }

    .form-divider {
        height: 1px;
        background: #edf0f4;
        margin: 28px 0;
    }

    .button-wrapper {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 30px;
    }

    .btn-custom {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 10px 20px;
        border-radius: 9px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        border: none;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .btn-cancel {
        background: #eef2f6;
        color: #52606d;
    }

    .btn-cancel:hover {
        background: #e1e7ee;
        color: #334e68;
    }

    .btn-save {
        background: #164b7a;
        color: white;
    }

    .btn-save:hover {
        background: #0f3b63;
        color: white;
        transform: translateY(-1px);
    }

    .error-message {
        margin-top: 6px;
        font-size: 12px;
        color: #dc3545;
    }

    @media (max-width: 768px) {
        .guru-edit-card-body {
            padding: 22px;
        }

        .foto-lama-box {
            flex-direction: column;
            align-items: flex-start;
        }

        .button-wrapper {
            justify-content: stretch;
        }

        .button-wrapper .btn-custom {
            flex: 1;
        }
    }
</style>


<div class="guru-edit-page">

    {{-- HEADER --}}
    <div class="guru-edit-header">
        <h2>Edit Guru & Staff</h2>
        <p>Perbarui informasi data guru atau staff sekolah.</p>
    </div>


    {{-- CARD FORM --}}
    <div class="guru-edit-card">
        <div class="guru-edit-card-body">

            <form
                action="{{ route('admin.guru.update', $guru->id) }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf
                @method('PUT')


                {{-- NAMA --}}
                <div class="form-group-custom">

                    <label class="form-label-custom">
                        Nama Lengkap
                    </label>

                    <input
                        type="text"
                        name="nama"
                        class="form-control-custom"
                        value="{{ old('nama', $guru->nama) }}"
                        placeholder="Masukkan nama lengkap"
                        required
                    >

                    @error('nama')
                        <div class="error-message">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- KATEGORI --}}
                <div class="form-group-custom">

                    <label class="form-label-custom">
                        Kategori
                    </label>

                    <select
                        name="kategori"
                        id="kategori"
                        class="form-select-custom"
                        required
                    >

                        <option value="guru"
                            {{ old('kategori', $guru->kategori) === 'guru' ? 'selected' : '' }}>
                            Guru
                        </option>

                        <option value="staff"
                            {{ old('kategori', $guru->kategori) === 'staff' ? 'selected' : '' }}>
                            Staff
                        </option>

                    </select>

                    @error('kategori')
                        <div class="error-message">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- MAPEL --}}
                <div
                    class="form-group-custom"
                    id="mapel-wrapper"
                >

                    <label class="form-label-custom">
                        Mata Pelajaran
                    </label>

                    <input
                        type="text"
                        name="mapel"
                        class="form-control-custom"
                        value="{{ old('mapel', $guru->mapel) }}"
                        placeholder="Contoh: Bahasa Indonesia"
                    >

                    <small class="form-help">
                        Isi mata pelajaran yang diampu guru.
                    </small>

                </div>


                {{-- JABATAN --}}
                <div
                    class="form-group-custom"
                    id="jabatan-wrapper"
                >

                    <label class="form-label-custom">
                        Jabatan / Posisi Staff
                    </label>

                    <input
                        type="text"
                        name="jabatan"
                        class="form-control-custom"
                        value="{{ old('jabatan', $guru->jabatan) }}"
                        placeholder="Contoh: Tata Usaha"
                    >

                    <small class="form-help">
                        Isi jabatan atau posisi staff di sekolah.
                    </small>

                </div>


                <div class="form-divider"></div>


                {{-- FOTO SAAT INI --}}
                @if($guru->foto)

                    <div class="form-group-custom">

                        <label class="form-label-custom">
                            Foto Saat Ini
                        </label>

                        <div class="foto-lama-box">

                            <img
                                src="{{ asset('storage/' . $guru->foto) }}"
                                alt="{{ $guru->nama }}"
                            >

                            <div class="foto-info">

                                <h5>
                                    Foto {{ $guru->nama }}
                                </h5>

                                <p>
                                    Foto ini akan tetap digunakan
                                    jika kamu tidak memilih foto baru.
                                </p>

                            </div>

                        </div>

                    </div>

                @endif


                {{-- FOTO BARU --}}
                <div class="form-group-custom">

                    <label class="form-label-custom">
                        Ganti Foto
                    </label>

                    <input
                        type="file"
                        name="foto"
                        class="form-control-custom"
                        accept="image/*"
                    >

                    <small class="form-help">
                        Kosongkan jika tidak ingin mengganti foto.
                        Format JPG, JPEG, PNG, atau WEBP. Maksimal 2 MB.
                    </small>

                    @error('foto')
                        <div class="error-message">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- BUTTON --}}
                <div class="button-wrapper">

                    <a
                        href="{{ route('admin.guru.index') }}"
                        class="btn-custom btn-cancel"
                    >
                        Batal
                    </a>

                    <button
                        type="submit"
                        class="btn-custom btn-save"
                    >
                        Simpan Perubahan
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>


{{-- SCRIPT KATEGORI --}}
<script>

    const kategori = document.getElementById('kategori');
    const mapelWrapper = document.getElementById('mapel-wrapper');
    const jabatanWrapper = document.getElementById('jabatan-wrapper');

    function updateForm() {

        if (kategori.value === 'guru') {

            mapelWrapper.style.display = 'block';
            jabatanWrapper.style.display = 'none';

        } else if (kategori.value === 'staff') {

            mapelWrapper.style.display = 'none';
            jabatanWrapper.style.display = 'block';

        }

    }

    kategori.addEventListener('change', updateForm);

    updateForm();

</script>

@endsection