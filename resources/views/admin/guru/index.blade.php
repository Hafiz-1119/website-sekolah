@extends('layouts.admin')

@section('title', 'Kelola Guru & Staff')

@section('content')

<div class="container-fluid guru-page">

    {{-- =====================================================
         HEADER
    ===================================================== --}}
    <div class="guru-header">

        <div class="guru-header-title">
            <h2>Kelola Guru & Staff</h2>

            <p>
                Kelola data guru dan staff sekolah.
            </p>
        </div>

        <a href="{{ route('admin.guru.create') }}"
           class="btn-tambah-guru">

            <span>+</span>
            Tambah Data

        </a>

    </div>


    {{-- =====================================================
         ALERT SUKSES
    ===================================================== --}}
    @if(session('success'))

        <div class="guru-alert">
            {{ session('success') }}
        </div>

    @endif


    {{-- =====================================================
         TABLE
    ===================================================== --}}
    <div class="guru-table-card">

        <div class="guru-table-wrapper">

            <table class="guru-table">

                <thead>

                    <tr>

                        <th>No</th>

                        <th>Foto</th>

                        <th>Nama</th>

                        <th>Kategori</th>

                        <th>Mapel / Jabatan</th>

                        <th class="text-center">
                            Aksi
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @forelse($guruStaff as $item)

                        <tr>

                            {{-- NOMOR --}}
                            <td class="guru-number">
                                {{ $loop->iteration }}
                            </td>


                            {{-- FOTO --}}
                            <td>

                                @if($item->foto)

                                    <img
                                        src="{{ asset('storage/' . $item->foto) }}"
                                        alt="{{ $item->nama }}"
                                        class="guru-photo"
                                    >

                                @else

                                    <div class="guru-photo-empty">
                                        Tidak ada foto
                                    </div>

                                @endif

                            </td>


                            {{-- NAMA --}}
                            <td>

                                <p class="guru-name">
                                    {{ $item->nama }}
                                </p>

                            </td>


                            {{-- KATEGORI --}}
                            <td>

                                @if($item->kategori === 'guru')

                                    <span class="guru-badge guru">
                                        Guru
                                    </span>

                                @else

                                    <span class="guru-badge staff">
                                        Staff
                                    </span>

                                @endif

                            </td>


                            {{-- MAPEL / JABATAN --}}
                            <td>

                                @if($item->kategori === 'guru')

                                    @if($item->mapel)

                                        <span class="guru-detail">
                                            {{ $item->mapel }}
                                        </span>

                                    @else

                                        <span class="guru-detail guru-detail-empty">
                                            -
                                        </span>

                                    @endif

                                @else

                                    @if($item->jabatan)

                                        <span class="guru-detail">
                                            {{ $item->jabatan }}
                                        </span>

                                    @else

                                        <span class="guru-detail guru-detail-empty">
                                            -
                                        </span>

                                    @endif

                                @endif

                            </td>


                            {{-- AKSI --}}
                            <td>

                                <div class="guru-actions">

                                    <a
                                        href="{{ route('admin.guru.edit', $item->id) }}"
                                        class="guru-btn-edit"
                                    >
                                        Edit
                                    </a>


                                    <form
                                        action="{{ route('admin.guru.destroy', $item->id) }}"
                                        method="POST"
                                        class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus data ini?')"
                                    >

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="guru-btn-delete"
                                        >
                                            Hapus
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>


                    @empty

                        <tr>

                            <td
                                colspan="6"
                                class="guru-empty"
                            >

                                <div class="guru-empty-icon">
                                    👤
                                </div>

                                <div class="guru-empty-title">
                                    Belum Ada Data
                                </div>

                                <p class="guru-empty-text">
                                    Belum ada data guru atau staff.
                                    Silakan tambahkan data terlebih dahulu.
                                </p>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection

<style>
    /* =====================================================
       KELOLA GURU & STAFF
    ===================================================== */

    .guru-page {
        padding: 10px 5px 40px;
    }

    /* HEADER */
    .guru-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        gap: 20px;
    }

    .guru-header-title h2 {
        color: #0B2A5B;
        font-size: 28px;
        font-weight: 800;
        margin: 0 0 6px;
    }

    .guru-header-title p {
        color: #6B7A90;
        font-size: 14px;
        margin: 0;
    }

    /* BUTTON TAMBAH */
    .btn-tambah-guru {
        display: inline-flex;
        align-items: center;
        gap: 8px;

        background: #0B3D91;
        color: white;

        padding: 11px 20px;
        border-radius: 9px;

        font-size: 14px;
        font-weight: 600;

        text-decoration: none;
        border: none;

        transition: all 0.25s ease;
    }

    .btn-tambah-guru:hover {
        background: #082F70;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 8px 18px rgba(11, 61, 145, 0.2);
    }

    /* ALERT */
    .guru-alert {
        border: none;
        border-radius: 10px;
        padding: 13px 17px;
        margin-bottom: 22px;

        background: #EAF7EE;
        color: #23713A;

        font-size: 14px;
    }

    /* CARD TABLE */
    .guru-table-card {
        background: #FFFFFF;
        border: 1px solid #E2E8F0;
        border-radius: 14px;
        overflow: hidden;

        box-shadow: 0 5px 20px rgba(25, 55, 95, 0.06);
    }

    .guru-table-wrapper {
        overflow-x: auto;
    }

    /* TABLE */
    .guru-table {
        width: 100%;
        margin: 0;
        border-collapse: collapse;
    }

    .guru-table thead {
        background: #F4F7FB;
    }

    .guru-table thead th {
        color: #49627F;
        font-size: 12px;
        font-weight: 700;

        text-transform: uppercase;
        letter-spacing: 0.4px;

        padding: 15px 18px;

        border-bottom: 1px solid #E2E8F0;
        white-space: nowrap;
    }

    .guru-table tbody td {
        padding: 16px 18px;

        color: #52657D;
        font-size: 14px;

        border-bottom: 1px solid #EEF2F6;

        vertical-align: middle;
    }

    .guru-table tbody tr:last-child td {
        border-bottom: none;
    }

    .guru-table tbody tr {
        transition: background 0.2s ease;
    }

    .guru-table tbody tr:hover {
        background: #F8FAFD;
    }

    /* NOMOR */
    .guru-number {
        color: #8A98AA;
        font-size: 13px;
        font-weight: 600;
        width: 50px;
    }

    /* FOTO */
    .guru-photo {
        width: 58px;
        height: 58px;

        object-fit: cover;

        border-radius: 10px;

        border: 2px solid #E3EBF5;

        display: block;
    }

    .guru-photo-empty {
        width: 58px;
        height: 58px;

        border-radius: 10px;

        background: #EDF3FB;
        border: 1px solid #DCE6F2;

        display: flex;
        align-items: center;
        justify-content: center;

        color: #7B8CA3;
        font-size: 10px;
        text-align: center;
    }

    /* NAMA */
    .guru-name {
        color: #0B2A5B;
        font-weight: 700;
        font-size: 14px;
        margin: 0;
    }

    /* BADGE */
    .guru-badge {
        display: inline-flex;
        align-items: center;

        padding: 6px 12px;

        border-radius: 50px;

        font-size: 11px;
        font-weight: 700;
    }

    .guru-badge.guru {
        background: #E6F0FF;
        color: #1558A6;
    }

    .guru-badge.staff {
        background: #EEF1F5;
        color: #596879;
    }

    /* MAPEL / JABATAN */
    .guru-detail {
        color: #5E718A;
        font-size: 13px;
    }

    .guru-detail-empty {
        color: #A2ACB9;
    }

    /* AKSI */
    .guru-actions {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 7px;
    }

    .guru-btn-edit,
    .guru-btn-delete {
        border: none;
        border-radius: 7px;

        padding: 7px 12px;

        font-size: 12px;
        font-weight: 600;

        text-decoration: none;

        transition: all 0.2s ease;
    }

    .guru-btn-edit {
        background: #EAF1FF;
        color: #1558A6;
    }

    .guru-btn-edit:hover {
        background: #D9E7FF;
        color: #0B4A91;
    }

    .guru-btn-delete {
        background: #FFF0F0;
        color: #C43B3B;
    }

    .guru-btn-delete:hover {
        background: #FFE0E0;
        color: #A82C2C;
    }

    /* EMPTY STATE */
    .guru-empty {
        text-align: center;
        padding: 55px 20px !important;
    }

    .guru-empty-icon {
        width: 60px;
        height: 60px;

        margin: 0 auto 15px;

        border-radius: 50%;

        background: #EDF3FB;

        display: flex;
        align-items: center;
        justify-content: center;

        color: #54749D;

        font-size: 24px;
    }

    .guru-empty-title {
        color: #304A68;
        font-size: 15px;
        font-weight: 700;

        margin-bottom: 5px;
    }

    .guru-empty-text {
        color: #8A98AA;
        font-size: 13px;
        margin: 0;
    }


    /* =====================================================
       RESPONSIVE
    ===================================================== */

    @media (max-width: 768px) {

        .guru-page {
            padding: 5px 0 30px;
        }

        .guru-header {
            flex-direction: column;
            align-items: flex-start;
        }

        .btn-tambah-guru {
            width: 100%;
            justify-content: center;
        }

        .guru-table thead th,
        .guru-table tbody td {
            padding: 13px 14px;
        }

        .guru-table {
            min-width: 750px;
        }
    }
</style>

