@extends('layouts.admin')

@section('title', 'Tambah Guru & Staff')

@section('content')

<div class="guru-create-page">

    {{-- HEADER --}}
    <div class="page-header">
        <div>
            <div class="page-label">DATA GURU & STAFF</div>
            <h2>Tambah Guru & Staff</h2>
            <p>Tambahkan data guru atau staff sekolah.</p>
        </div>

        <a href="{{ route('admin.guru.index') }}" class="btn-back">
            ← Kembali
        </a>
    </div>


    {{-- FORM CARD --}}
    <div class="form-card">

        <div class="form-card-header">
            <div class="header-icon">
                +
            </div>

            <div>
                <h4>Data Guru & Staff</h4>
                <p>Lengkapi informasi berikut untuk menambahkan data baru.</p>
            </div>
        </div>


        <form
            action="{{ route('admin.guru.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf

            <div class="form-body">

                {{-- NAMA --}}
                <div class="form-group">
                    <label for="nama">
                        Nama Lengkap
                    </label>

                    <input
                        type="text"
                        id="nama"
                        name="nama"
                        value="{{ old('nama') }}"
                        class="custom-input @error('nama') input-error @enderror"
                        placeholder="Masukkan nama lengkap"
                        required
                    >

                    @error('nama')
                        <small class="error-text">
                            {{ $message }}
                        </small>
                    @enderror
                </div>


                {{-- KATEGORI --}}
                <div class="form-group">
                    <label for="kategori">
                        Kategori
                    </label>

                    <select
                        name="kategori"
                        id="kategori"
                        class="custom-input @error('kategori') input-error @enderror"
                        required
                    >
                        <option value="">
                            -- Pilih Kategori --
                        </option>

                        <option
                            value="guru"
                            {{ old('kategori') == 'guru' ? 'selected' : '' }}
                        >
                            Guru
                        </option>

                        <option
                            value="staff"
                            {{ old('kategori') == 'staff' ? 'selected' : '' }}
                        >
                            Staff
                        </option>
                    </select>

                    @error('kategori')
                        <small class="error-text">
                            {{ $message }}
                        </small>
                    @enderror
                </div>


                {{-- INFORMASI DINAMIS --}}
                <div class="dynamic-fields">

                    {{-- MAPEL --}}
                    <div
                        class="form-group"
                        id="mapel-wrapper"
                        style="display:none;"
                    >
                        <label for="mapel">
                            Mata Pelajaran
                        </label>

                        <input
                            type="text"
                            id="mapel"
                            name="mapel"
                            value="{{ old('mapel') }}"
                            class="custom-input"
                            placeholder="Contoh: Bahasa Indonesia"
                        >

                        <small class="helper-text">
                            Isi mata pelajaran yang diampu oleh guru.
                        </small>
                    </div>


                    {{-- JABATAN --}}
                    <div
                        class="form-group"
                        id="jabatan-wrapper"
                        style="display:none;"
                    >
                        <label for="jabatan">
                            Jabatan / Posisi Staff
                        </label>

                        <input
                            type="text"
                            id="jabatan"
                            name="jabatan"
                            value="{{ old('jabatan') }}"
                            class="custom-input"
                            placeholder="Contoh: Tata Usaha"
                        >

                        <small class="helper-text">
                            Isi jabatan atau posisi staff di sekolah.
                        </small>
                    </div>

                </div>


                {{-- FOTO --}}
                <div class="form-group">

                    <label for="foto">
                        Foto
                    </label>

                    <div class="upload-box">

                        <div class="upload-icon">
                            ↑
                        </div>

                        <div class="upload-text">
                            <strong>Upload Foto</strong>

                            <span>
                                JPG, JPEG, PNG atau WEBP
                            </span>

                            <small>
                                Maksimal ukuran 2 MB
                            </small>
                        </div>

                        <input
                            type="file"
                            id="foto"
                            name="foto"
                            accept="image/*"
                            class="@error('foto') input-error @enderror"
                        >

                    </div>

                    @error('foto')
                        <small class="error-text">
                            {{ $message }}
                        </small>
                    @enderror

                </div>

            </div>


            {{-- FOOTER --}}
            <div class="form-footer">

                <a
                    href="{{ route('admin.guru.index') }}"
                    class="btn-cancel"
                >
                    Batal
                </a>

                <button
                    type="submit"
                    class="btn-save"
                >
                    Simpan Data
                </button>

            </div>

        </form>

    </div>

</div>


{{-- =========================================================
     CSS
========================================================= --}}

<style>

.guru-create-page {
    padding: 10px 5px 40px;
}


/* ================= HEADER ================= */

.page-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 28px;
}

.page-label {
    color: #2f80ed;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 1.5px;
    margin-bottom: 6px;
}

.page-header h2 {
    margin: 0;
    color: #123b70;
    font-size: 30px;
    font-weight: 700;
}

.page-header p {
    margin: 6px 0 0;
    color: #718096;
    font-size: 14px;
}


/* ================= BACK BUTTON ================= */

.btn-back {
    text-decoration: none;
    color: #123b70;
    background: #ffffff;
    border: 1px solid #dbe5f1;
    padding: 10px 18px;
    border-radius: 9px;
    font-size: 14px;
    font-weight: 600;
    transition: .2s ease;
}

.btn-back:hover {
    background: #eef5ff;
    color: #1455a0;
}


/* ================= FORM CARD ================= */

.form-card {
    background: #ffffff;
    border: 1px solid #e4ebf3;
    border-radius: 16px;
    box-shadow: 0 5px 20px rgba(24, 58, 100, .06);
    overflow: hidden;
}


/* ================= CARD HEADER ================= */

.form-card-header {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 22px 28px;
    border-bottom: 1px solid #edf1f6;
    background: #fbfdff;
}

.header-icon {
    width: 42px;
    height: 42px;
    border-radius: 10px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #e7f0ff;
    color: #2767b8;

    font-size: 24px;
    font-weight: 500;
}

.form-card-header h4 {
    margin: 0;
    color: #183b68;
    font-size: 17px;
    font-weight: 700;
}

.form-card-header p {
    margin: 3px 0 0;
    color: #8491a5;
    font-size: 13px;
}


/* ================= FORM BODY ================= */

.form-body {
    padding: 30px 28px 10px;
}

.form-group {
    margin-bottom: 23px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;

    color: #263b53;
    font-size: 14px;
    font-weight: 600;
}


/* ================= INPUT ================= */

.custom-input {
    width: 100%;
    box-sizing: border-box;

    padding: 12px 14px;

    border: 1px solid #d8e1ec;
    border-radius: 9px;

    background: #ffffff;
    color: #263b53;

    font-size: 14px;

    outline: none;
    transition: .2s ease;
}

.custom-input:focus {
    border-color: #4b8fe8;
    box-shadow: 0 0 0 3px rgba(75, 143, 232, .12);
}

.custom-input::placeholder {
    color: #a5afbd;
}


/* ================= DYNAMIC FIELD ================= */

.dynamic-fields {
    transition: .2s ease;
}

.helper-text {
    display: block;
    margin-top: 6px;

    color: #8b98a9;
    font-size: 12px;
}


/* ================= UPLOAD ================= */

.upload-box {
    position: relative;

    display: flex;
    align-items: center;
    gap: 15px;

    padding: 17px;

    border: 1.5px dashed #cbd8e8;
    border-radius: 11px;

    background: #f9fbfe;

    transition: .2s ease;
}

.upload-box:hover {
    border-color: #5792df;
    background: #f4f8ff;
}

.upload-icon {
    width: 42px;
    height: 42px;

    border-radius: 10px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #e6f0ff;
    color: #3778c9;

    font-size: 22px;
}

.upload-text {
    display: flex;
    flex-direction: column;
    gap: 2px;
}

.upload-text strong {
    color: #28486d;
    font-size: 14px;
}

.upload-text span,
.upload-text small {
    color: #8a97a8;
    font-size: 12px;
}


/* ================= FOOTER ================= */

.form-footer {
    display: flex;
    justify-content: flex-end;
    gap: 10px;

    padding: 20px 28px;

    border-top: 1px solid #edf1f6;
    background: #fbfdff;
}


/* ================= BUTTON ================= */

.btn-cancel,
.btn-save {
    border: none;
    border-radius: 9px;

    padding: 11px 20px;

    font-size: 14px;
    font-weight: 600;

    text-decoration: none;
    cursor: pointer;

    transition: .2s ease;
}

.btn-cancel {
    color: #53657a;
    background: #edf1f5;
}

.btn-cancel:hover {
    background: #e1e7ed;
    color: #3d4d60;
}

.btn-save {
    color: #ffffff;
    background: #1769c2;
}

.btn-save:hover {
    background: #12579f;
    transform: translateY(-1px);
}


/* ================= ERROR ================= */

.input-error {
    border-color: #dc3545 !important;
}

.error-text {
    display: block;
    margin-top: 6px;

    color: #dc3545;
    font-size: 12px;
}


/* ================= RESPONSIVE ================= */

@media (max-width: 768px) {

    .page-header {
        align-items: flex-start;
        flex-direction: column;
        gap: 15px;
    }

    .page-header h2 {
        font-size: 25px;
    }

    .form-card-header,
    .form-body,
    .form-footer {
        padding-left: 20px;
        padding-right: 20px;
    }

    .form-footer {
        justify-content: stretch;
    }

    .btn-cancel,
    .btn-save {
        flex: 1;
        text-align: center;
    }

}

</style>


{{-- =========================================================
     SCRIPT KATEGORI
========================================================= --}}

<script>

const kategori = document.getElementById('kategori');

const mapelWrapper = document.getElementById('mapel-wrapper');

const jabatanWrapper = document.getElementById('jabatan-wrapper');

const mapelInput = document.getElementById('mapel');

const jabatanInput = document.getElementById('jabatan');


function updateForm() {

    if (kategori.value === 'guru') {

        mapelWrapper.style.display = 'block';

        jabatanWrapper.style.display = 'none';

        mapelInput.required = true;
        jabatanInput.required = false;

    }

    else if (kategori.value === 'staff') {

        mapelWrapper.style.display = 'none';

        jabatanWrapper.style.display = 'block';

        mapelInput.required = false;
        jabatanInput.required = true;

    }

    else {

        mapelWrapper.style.display = 'none';

        jabatanWrapper.style.display = 'none';

        mapelInput.required = false;
        jabatanInput.required = false;

    }

}


kategori.addEventListener('change', updateForm);

updateForm();

</script>

@endsection