<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galeri;

class GaleriSeeder extends Seeder
{
    public function run(): void
    {
        Galeri::truncate();

        Galeri::create([
            'judul' => 'PMR',
            'kategori' => 'Ekstrakurikuler',
            'deskripsi' => 'Kegiatan pelatihan dan pembinaan siswa dalam bidang kepalangmerahan.',
            'foto' => 'pmr.jpg'
        ]);

        Galeri::create([
            'judul' => 'Pramuka',
            'kategori' => 'Ekstrakurikuler',
            'deskripsi' => 'Latihan rutin dan kegiatan kepramukaan siswa.',
            'foto' => 'pramuka.jpg'
        ]);

        Galeri::create([
            'judul' => 'Karnaval',
            'kategori' => 'Festival & Event',
            'deskripsi' => 'Karnaval HUT RI Ke 81.',
            'foto' => 'karnaval.jpg'
        ]);
    }
}