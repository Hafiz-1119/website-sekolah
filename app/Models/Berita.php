<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
        'judul',
        'kategori',
        'penulis',
        'tanggal',
        'ringkasan',
        'isi',
        'foto',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];
}