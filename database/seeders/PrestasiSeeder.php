<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prestasi;

class PrestasiSeeder extends Seeder
{
    public function run(): void
    {
        Prestasi::create([
            'judul' => 'Akreditasi A Unggul',
            'deskripsi' => 'Diakreditasi secara resmi dengan hasil yang sangat memuaskan.',
            'foto' => 'prestasi/akreditasi.jpg',
        ]);

        Prestasi::create([
            'judul' => 'Juara 2 Menulis & Video Resensi.',
            'deskripsi' => 'Juara 2 Menulis & Video Resensi Tingkat Kabupaten Grobogan.',
            'foto' => 'prestasi/Juara 2 Menulis & Video Resensi.jpg',
        ]);

    }
}