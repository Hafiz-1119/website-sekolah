@extends('layouts.app')

@section('title', 'Berita')

@section('content')

<h1>{{ $judul }}</h1>

<p>
    Tanggal: {{ $tanggal }}
</p>

<p>
    Penulis: {{ $penulis }}
</p>

<p>
    Ini adalah halaman berita MAN 1 Surakarta.
</p>

@endsection