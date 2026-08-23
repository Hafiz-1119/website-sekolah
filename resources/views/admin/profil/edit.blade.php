@extends('layouts.admin')

@section('title', 'Kelola Profil Sekolah')

@section('content')
<style>
    /* =========================================================
       CSS Tampilan Admin Kelola Profil (Modern & Senada)
    ========================================================= */
    .admin-wrapper {
        /* Bikin background belakangnya sedikit abu-abu biar card putihnya menonjol */
        background-color: #f1f5f9; 
        padding: 40px 20px;
        min-height: 100vh;
    }
    .admin-container {
        max-width: 850px;
        margin: 0 auto;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .admin-card {
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(18, 60, 105, 0.08);
        overflow: hidden; /* Biar ujung headernya ikut melengkung */
    }
    .card-header {
        background-color: #123c69; /* Biru khas web sekolahmu */
        color: #ffffff;
        padding: 20px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .card-header h3 {
        margin: 0;
        font-size: 22px;
        font-weight: 600;
    }
    /* Tombol Kembali di Header */
    .btn-back-header {
        background: rgba(255, 255, 255, 0.15);
        color: #ffffff;
        text-decoration: none;
        padding: 8px 16px;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 500;
        transition: 0.3s;
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
    .btn-back-header:hover {
        background: rgba(255, 255, 255, 0.3);
        color: #ffffff;
    }
    .card-body {
        padding: 30px;
    }
    .form-group {
        margin-bottom: 25px;
    }
    .form-group label {
        display: block;
        font-weight: 600;
        margin-bottom: 8px;
        color: #1e293b;
        font-size: 15px;
    }
    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 1.5px solid #cbd5e1;
        border-radius: 8px;
        font-size: 15px;
        font-family: inherit;
        transition: all 0.3s ease;
        /* Warna kotak isian dibikin sedikit abu terang biar ga pucat */
        background-color: #f8fafc; 
        box-sizing: border-box;
    }
    .form-control:focus {
        border-color: #123c69;
        background-color: #ffffff;
        outline: none;
        box-shadow: 0 0 0 3px rgba(18, 60, 105, 0.15);
    }
    .help-text {
        color: #64748b;
        font-size: 13px;
        display: block;
        margin-top: 6px;
    }
    .img-preview {
        width: 100%;
        max-width: 350px;
        border-radius: 8px;
        border: 2px dashed #cbd5e1;
        padding: 5px;
        margin-bottom: 10px;
    }
    
    /* Area Tombol Bawah */
    .action-buttons {
        display: flex;
        gap: 15px;
        margin-top: 35px;
        border-top: 1px solid #e2e8f0;
        padding-top: 20px;
    }
    .btn-submit {
        background: #123c69;
        color: white;
        border: none;
        padding: 12px 24px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
        flex: 1; /* Biar tombol simpannya lebih panjang/dominan */
    }
    .btn-submit:hover {
        background: #0d2e50;
        box-shadow: 0 4px 12px rgba(13, 46, 80, 0.2);
    }
    .btn-cancel {
        background: #f1f5f9;
        color: #475569;
        border: 1px solid #cbd5e1;
        padding: 12px 24px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
        text-decoration: none;
        text-align: center;
        min-width: 120px;
    }
    .btn-cancel:hover {
        background: #e2e8f0;
        color: #1e293b;
    }
</style>

<div class="admin-wrapper">
    <div class="admin-container">
        <div class="admin-card">
            
            <!-- HEADER CARD -->
            <div class="card-header">
                <h3>Kelola Profil Sekolah</h3>
                <!-- Tombol kembali di pojok kanan atas -->
                <a href="/admin/dashboard" class="btn-back-header">⬅ Kembali</a>
            </div>

            <!-- BODY CARD -->
            <div class="card-body">
                <form action="{{ route('admin.profil.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Sejarah Singkat</label>
                        <textarea name="sejarah" class="form-control" rows="5" placeholder="Masukkan sejarah singkat sekolah...">{{ old('sejarah', $profil->sejarah ?? '') }}</textarea>
                        <span class="help-text">Tekan <strong>Enter 2 kali</strong> (untuk jarak 1 baris kosong) jika ingin memisahkan antar paragraf.</span>
                    </div>

                    <div class="form-group">
                        <label>Visi</label>
                        <textarea name="visi" class="form-control" rows="3" placeholder="Masukkan visi sekolah...">{{ old('visi', $profil->visi ?? '') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Misi</label>
                        <textarea name="misi" class="form-control" rows="5" placeholder="Masukkan misi sekolah...">{{ old('misi', $profil->misi ?? '') }}</textarea>
                        <span class="help-text">Tekan <strong>Enter</strong> di keyboard untuk menulis poin misi selanjutnya (tidak perlu mengetik nomor manual).</span>
                    </div>

                    <div class="form-group">
                        <label>Foto Sekolah (Background/Hero)</label>
                        
                        @if(isset($profil) && $profil->foto_sekolah)
                            <div>
                                <img src="{{ asset('storage/' . $profil->foto_sekolah) }}" alt="Foto Sekolah Saat Ini" class="img-preview">
                            </div>
                        @endif
                        
                        <input type="file" name="foto_sekolah" class="form-control" accept="image/*" style="padding: 9px; background: #ffffff;">
                        <span class="help-text">Kosongkan jika tidak ingin mengubah foto saat ini.</span>
                    </div>

                    <!-- AREA TOMBOL BAWAH -->
                    <div class="action-buttons">
                        <a href="/admin/dashboard" class="btn-cancel">Batal</a>
                        <button type="submit" class="btn-submit">Simpan Pembaruan</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
@endsection