@extends('layouts.admin')

@section('title', 'Kelola Berita')

@section('content')

<style>
    .berita-page {
        padding: 40px;
    }

    .berita-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
    }

    .berita-header h1 {
        margin: 0;
        color: #174f80;
        font-size: 32px;
    }

    .berita-header p {
        margin-top: 8px;
        color: #64748b;
        font-size: 16px;
    }

    .btn-tambah {
        background: #174f80;
        color: white;
        padding: 14px 22px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: bold;
    }

    .btn-tambah:hover {
        background: #0f3d64;
    }

    .table-container {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th {
        background: #245980;
        color: white;
        padding: 17px;
        text-align: left;
    }

    td {
        padding: 17px;
        border-bottom: 1px solid #e5e7eb;
    }

    .kosong {
        text-align: center;
        padding: 50px;
        color: #64748b;
    }
</style>

<div class="berita-page">

    <div class="berita-header">

        <div>
            <h1>Kelola Berita</h1>

            <p>
                Tambah, edit, dan hapus berita sekolah.
            </p>
        </div>

        <a href="{{ route('admin.berita.create') }}" class="btn-tambah">
            + Tambah Berita
        </a>

    </div>


    <div class="table-container">

        @if($beritas->count() > 0)

            <table>

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Judul Berita</th>
                        <th>Kategori</th>
                        <th>Penulis</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($beritas as $berita)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                @if($berita->foto)

                                    <img
                                        src="{{ asset('storage/' . $berita->foto) }}"
                                        width="100"
                                        height="70"
                                        style="object-fit: cover; border-radius: 8px;"
                                    >

                                @else

                                    Tidak ada foto

                                @endif
                            </td>

                            <td>
                                <strong>
                                    {{ $berita->judul }}
                                </strong>
                            </td>

                            <td>
                                {{ $berita->kategori }}
                            </td>

                            <td>
                                {{ $berita->penulis ?? '-' }}
                            </td>

                            <td>
                                {{ $berita->tanggal }}
                            </td>

                            <td>

                                <a
                                    href="{{ route('admin.berita.edit', $berita->id) }}"
                                    style="
                                        background:#f59e0b;
                                        color:white;
                                        padding:8px 12px;
                                        border-radius:6px;
                                        text-decoration:none;
                                    "
                                >
                                    Edit
                                </a>

                                <form
                                    action="{{ route('admin.berita.destroy', $berita->id) }}"
                                    method="POST"
                                    style="display:inline;"
                                    onsubmit="return confirm('Yakin ingin menghapus berita ini?')"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        style="
                                            background:#dc2626;
                                            color:white;
                                            padding:8px 12px;
                                            border:none;
                                            border-radius:6px;
                                            cursor:pointer;
                                        "
                                    >
                                        Hapus
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        @else

            <div class="kosong">

                <h2>Belum Ada Berita</h2>

                <p>
                    Belum ada data berita sekolah.
                </p>

            </div>

        @endif

    </div>

</div>

@endsection