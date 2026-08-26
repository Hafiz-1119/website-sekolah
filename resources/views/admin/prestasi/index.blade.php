@extends('layouts.admin')

@section('title', 'Kelola Prestasi')

@section('content')

<style>

    .prestasi-container {
        padding: 30px;
    }

    .prestasi-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
    }

    .prestasi-header h1 {
        color: #0F4C81;
        margin: 0;
    }

    .prestasi-header p {
        color: #64748B;
        margin-top: 5px;
    }

    .btn-tambah {
        background: #0F4C81;
        color: white;
        text-decoration: none;
        padding: 11px 18px;
        border-radius: 8px;
        font-weight: bold;
    }

    .btn-tambah:hover {
        background: #083B66;
    }

    .btn-dashboard {
        background: #E2E8F0;
        color: #334155;
        text-decoration: none;
        padding: 11px 18px;
        border-radius: 8px;
        font-weight: bold;
        margin-right: 8px;
    }

    .alert-success {
        background: #DCFCE7;
        color: #166534;
        padding: 14px 18px;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .prestasi-table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    }

    .prestasi-table th {
        background: #0F4C81;
        color: white;
        padding: 14px;
        text-align: left;
        font-size: 14px;
    }

    .prestasi-table td {
        padding: 15px;
        border-bottom: 1px solid #E2E8F0;
        color: #334155;
        font-size: 14px;
        vertical-align: middle;
    }

    .deskripsi {
        max-width: 450px;
        line-height: 1.5;
    }

    .aksi {
        white-space: nowrap;
    }

    .btn-edit {
        background: #DBEAFE;
        color: #0F4C81;
        text-decoration: none;
        padding: 8px 12px;
        border-radius: 6px;
        font-size: 13px;
        margin-right: 5px;
    }

    .btn-hapus {
        background: #FEE2E2;
        color: #B91C1C;
        padding: 8px 12px;
        border-radius: 6px;
        border: none;
        cursor: pointer;
        font-size: 13px;
    }

    @media(max-width: 768px) {

        .prestasi-container {
            padding: 20px 10px;
        }

        .prestasi-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }

        .prestasi-table {
            font-size: 12px;
        }

        .prestasi-table th,
        .prestasi-table td {
            padding: 9px;
        }

        .deskripsi {
            max-width: 200px;
        }

    }

</style>

<div class="prestasi-container">

    <div class="prestasi-header">

        <div>
            <h1>Kelola Prestasi</h1>
            <p>
                Tambah, edit, dan hapus prestasi sekolah.
            </p>
        </div>

        <div>

            <a href="{{ route('admin.dashboard') }}"
               class="btn-dashboard">
                Dashboard
            </a>

            <a href="{{ route('admin.prestasi.create') }}"
               class="btn-tambah">
                + Tambah Prestasi
            </a>

        </div>

    </div>


    @if(session('success'))

        <div class="alert-success">
            {{ session('success') }}
        </div>

    @endif


    <table class="prestasi-table">

        <thead>
            <tr>
                <th>Foto</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

            @forelse($prestasis as $prestasi)

                <tr>

                    <td>
                        @if($prestasi->foto)
                            <img src="{{ asset('storage/' . $prestasi->foto) }}"
                            alt="{{ $prestasi->judul }}"
                            style="
                            width: 70px;
                            height: 70px;
                            object-fit: cover;
                            border-radius: 8px;
                            display: block;
                            ">
                        @else
                            <span>Tidak ada foto</span>
                        @endif
                    </td>

                    <td>
                        <strong>
                            {{ $prestasi->judul }}
                        </strong>
                    </td>

                    <td class="deskripsi">
                        {{ $prestasi->deskripsi }}
                    </td>

                    <td class="aksi">

                        <a href="{{ route('admin.prestasi.edit', $prestasi->id) }}"
                           class="btn-edit">
                            Edit
                        </a>

                        <form
                            action="{{ route('admin.prestasi.destroy', $prestasi->id) }}"
                            method="POST"
                            style="display:inline;">

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn-hapus"
                                onclick="return confirm('Yakin ingin menghapus prestasi ini?')">

                                Hapus

                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="4"
                        style="text-align:center; padding:30px;">
                        Belum ada data prestasi.
                    </td>
                </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection