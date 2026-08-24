@extends('layouts.admin')

@section('content')

<style>

    * {
        box-sizing: border-box;
    }

    body {
        background: #F1F5F9;
    }

    .admin-galeri-container {
        width: 90%;
        max-width: 1200px;
        margin: auto;
        padding: 45px 0;
    }

    /* =========================
       HEADER
    ========================= */

    .admin-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    .admin-header h1 {
        color: #183B5B;
        margin: 0 0 6px;
        font-size: 30px;
        font-weight: 700;
    }

    .admin-header p {
        margin: 0;
        color: #64748B;
        font-size: 15px;
    }

    .header-buttons {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .btn-dashboard,
    .btn-tambah {
        text-decoration: none;
        padding: 11px 18px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 600;
        transition: 0.2s ease;
    }

    .btn-dashboard {
        background: #E2E8F0;
        color: #334155;
    }

    .btn-dashboard:hover {
        background: #CBD5E1;
    }

    .btn-tambah {
        background: #1F4F78;
        color: white;
    }

    .btn-tambah:hover {
        background: #163B5B;
    }


    /* =========================
       ALERT
    ========================= */

    .alert-success {
        background: #ECFDF5;
        color: #166534;
        border: 1px solid #BBF7D0;
        padding: 14px 18px;
        border-radius: 10px;
        margin-bottom: 22px;
        font-size: 14px;
    }


    /* =========================
       TABLE WRAPPER
    ========================= */

    .table-wrapper {
        background: white;
        border-radius: 14px;
        overflow-x: auto;
        box-shadow: 0 4px 18px rgba(15, 76, 129, 0.08);
        border: 1px solid #E2E8F0;
    }


    /* =========================
       TABLE
    ========================= */

    .galeri-table {
        width: 100%;
        min-width: 1000px;
        border-collapse: collapse;
    }

    .galeri-table thead {
        background: #1F4F78;
    }

    .galeri-table th {
        color: white;
        padding: 17px 18px;
        text-align: left;
        font-size: 14px;
        font-weight: 600;
        white-space: nowrap;
    }

    .galeri-table td {
        padding: 15px 18px;
        border-bottom: 1px solid #E2E8F0;
        color: #334155;
        font-size: 14px;
        vertical-align: middle;
    }

    .galeri-table tbody tr {
        transition: 0.2s ease;
    }

    .galeri-table tbody tr:hover {
        background: #F8FAFC;
    }

    .galeri-table tbody tr:last-child td {
        border-bottom: none;
    }


    /* =========================
       FOTO
    ========================= */

    .foto-galeri {
        width: 95px;
        height: 65px;
        object-fit: cover;
        border-radius: 8px;
        display: block;
        border: 1px solid #E2E8F0;
    }


    /* =========================
       JUDUL
    ========================= */

    .judul-galeri {
        min-width: 220px;
        font-weight: 600;
        color: #1E3A5F;
        line-height: 1.5;
    }


    /* =========================
       KATEGORI
    ========================= */

    .kategori-cell {
        min-width: 170px;
    }

    .kategori {
        display: inline-flex;
        align-items: center;
        justify-content: center;

        padding: 7px 14px;

        background: #E8F1FA;
        color: #1F4F78;

        border: 1px solid #C9DDF0;

        border-radius: 20px;

        font-size: 13px;
        font-weight: 600;

        white-space: nowrap;
    }


    /* =========================
       DESKRIPSI
    ========================= */

    .deskripsi-galeri {
        min-width: 350px;
        max-width: 500px;

        color: #475569;
        line-height: 1.6;

        font-size: 14px;

        white-space: normal;
        word-break: normal;
    }


    /* =========================
       AKSI
    ========================= */

    .aksi {
        min-width: 150px;
    }

    .aksi-wrapper {
        display: flex;
        align-items: center;
        gap: 8px;
        white-space: nowrap;
    }

    .btn-edit {
        display: inline-flex;
        align-items: center;
        justify-content: center;

        background: #E8F1FA;
        color: #1F4F78;

        text-decoration: none;

        padding: 8px 14px;

        border-radius: 7px;

        font-size: 13px;
        font-weight: 600;

        border: 1px solid #C9DDF0;

        transition: 0.2s ease;
    }

    .btn-edit:hover {
        background: #D7E9F9;
    }

    .btn-hapus {
        background: #FEF2F2;
        color: #B42318;

        padding: 8px 14px;

        border-radius: 7px;

        border: 1px solid #FECACA;

        cursor: pointer;

        font-size: 13px;
        font-weight: 600;

        transition: 0.2s ease;
    }

    .btn-hapus:hover {
        background: #FEE2E2;
    }


    /* =========================
       EMPTY DATA
    ========================= */

    .empty-data {
        text-align: center;
        padding: 40px !important;
        color: #64748B;
        font-size: 14px;
    }


    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 768px) {

        .admin-galeri-container {
            width: 92%;
            padding: 30px 0;
        }

        .admin-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 18px;
        }

        .admin-header h1 {
            font-size: 25px;
        }

        .header-buttons {
            width: 100%;
        }

        .btn-dashboard,
        .btn-tambah {
            text-align: center;
            flex: 1;
            padding: 10px;
            font-size: 13px;
        }

    }

</style>


<div class="admin-galeri-container">

    <!-- HEADER -->

    <div class="admin-header">

        <div>

            <h1>Kelola Galeri</h1>

            <p>
                Tambah, edit, dan hapus dokumentasi kegiatan sekolah.
            </p>

        </div>


        <div class="header-buttons">

            <a href="{{ route('admin.dashboard') }}"
               class="btn-dashboard">

                Dashboard

            </a>


            <a href="{{ route('admin.galeri.create') }}"
               class="btn-tambah">

                + Tambah Galeri

            </a>

        </div>

    </div>


    <!-- NOTIFIKASI -->

    @if(session('success'))

        <div class="alert-success">

            {{ session('success') }}

        </div>

    @endif


    <!-- TABEL -->

    <div class="table-wrapper">

        <table class="galeri-table">

            <thead>

                <tr>

                    <th>Foto</th>

                    <th>Judul Kegiatan</th>

                    <th>Kategori</th>

                    <th>Deskripsi</th>

                    <th>Aksi</th>

                </tr>

            </thead>


            <tbody>

                @forelse($galeris as $galeri)

                    <tr>

                        <!-- FOTO -->

                        <td>

                            <img
                            src="{{ Str::startsWith($galeri->foto, 'images/') ? asset($galeri->foto) : asset('storage/' . $galeri->foto) }}"
                            alt="{{ $galeri->judul }}"
                            class="foto-galeri">
                        </td>


                        <!-- JUDUL -->

                        <td class="judul-galeri">

                            {{ $galeri->judul }}

                        </td>


                        <!-- KATEGORI -->

                        <td class="kategori-cell">

                            <span class="kategori">

                                {{ $galeri->kategori }}

                            </span>

                        </td>


                        <!-- DESKRIPSI -->

                        <td class="deskripsi-galeri">

                            {{ $galeri->deskripsi }}

                        </td>


                        <!-- AKSI -->

                        <td class="aksi">

                            <div class="aksi-wrapper">

                                <a
                                    href="{{ route('admin.galeri.edit', $galeri->id) }}"
                                    class="btn-edit">

                                    Edit

                                </a>


                                <form
                                    action="{{ route('admin.galeri.destroy', $galeri->id) }}"
                                    method="POST">

                                    @csrf

                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn-hapus"
                                        onclick="return confirm('Yakin ingin menghapus galeri ini?')">

                                        Hapus

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td
                            colspan="5"
                            class="empty-data">

                            Belum ada data galeri.

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection