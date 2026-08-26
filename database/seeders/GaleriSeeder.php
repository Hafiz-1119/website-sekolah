<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galeri;

class GaleriSeeder extends Seeder
{
    public function run(): void
    {
        // =========================
        // KEGIATAN SEKOLAH
        // =========================

        Galeri::updateOrCreate(
            ['judul' => 'Kerja Bakti'],
            [
                'kategori' => 'Kegiatan Sekolah',
                'deskripsi' => 'Kegiatan gotong royong siswa membersihkan dan merawat taman di lingkungan sekolah.',
                'foto' => 'images/galeri/kegiatan sekolah/kerja bakti.jpg'
            ]
        );

        Galeri::updateOrCreate(
            ['judul' => 'Senam Pagi'],
            [
                'kategori' => 'Kegiatan Sekolah',
                'deskripsi' => 'Kegiatan senam bersama seluruh siswa di lapangan sekolah untuk menjaga kebugaran jasmani.',
                'foto' => 'images/galeri/kegiatan sekolah/senam.jpg'
            ]
        );

        Galeri::updateOrCreate(
            ['judul' => 'Penyuluhan Kesehatan'],
            [
                'kategori' => 'Kegiatan Sekolah',
                'deskripsi' => 'Kegiatan edukasi kesehatan bagi siswa yang disampaikan oleh petugas atau tenaga kesehatan.',
                'foto' => 'images/galeri/kegiatan sekolah/penyuluhan kesehatan.jpg'
            ]
        );

        Galeri::updateOrCreate(
            ['judul' => 'Upacara Pagi'],
            [
                'kategori' => 'Kegiatan Sekolah',
                'deskripsi' => 'Pelaksanaan upacara bendera rutin yang diikuti oleh seluruh siswa dan guru.',
                'foto' => 'images/galeri/kegiatan sekolah/upacara.jpg'
            ]
        );

        Galeri::updateOrCreate(
            ['judul' => 'Perkemahan Jumat Sabtu (Perjusa)'],
            [
                'kategori' => 'Kegiatan Sekolah',
                'deskripsi' => 'Kegiatan perkemahan pramuka yang diikuti siswa dengan mendirikan tenda dan apel di lapangan sekolah.',
                'foto' => 'images/galeri/kegiatan sekolah/perjusa.jpg'
            ]
        );

        Galeri::updateOrCreate(
            ['judul' => "Peringatan Isra Mi'raj Nabi Muhammad SAW"],
            [
                'kategori' => 'Kegiatan Sekolah',
                'deskripsi' => 'Kegiatan keagamaan dalam rangka memperingati Isra Mi’raj, diisi dengan tausiyah atau ceramah bersama guru dan siswa di musala sekolah.',
                'foto' => "images/galeri/kegiatan sekolah/isra miraj.jpg"
            ]
        );

        Galeri::updateOrCreate(
            ['judul' => 'Rohani'],
            [
                'kategori' => 'Kegiatan Sekolah',
                'deskripsi' => 'Kegiatan keagamaan berupa renungan atau kultum yang dilaksanakan setiap hari Jumat, diisi oleh siswa maupun guru.',
                'foto' => 'images/galeri/kegiatan sekolah/rohani.jpg'
            ]
        );


        // =========================
        // EKSTRAKURIKULER
        // =========================

        Galeri::updateOrCreate(
            ['judul' => 'Kegiatan Pramuka'],
            [
                'kategori' => 'Ekstrakurikuler',
                'deskripsi' => 'Latihan rutin dan kegiatan kepramukaan siswa.',
                'foto' => 'images/galeri/ekstrakurikuler/pramuka.jpg'
            ]
        );

        Galeri::updateOrCreate(
            ['judul' => 'Olahraga Voli'],
            [
                'kategori' => 'Ekstrakurikuler',
                'deskripsi' => 'Aktivitas latihan bola voli bersama pelatih di halaman sekolah.',
                'foto' => 'images/galeri/ekstrakurikuler/voly.jpg'
            ]
        );

        Galeri::updateOrCreate(
            ['judul' => 'Drumband'],
            [
                'kategori' => 'Ekstrakurikuler',
                'deskripsi' => 'Latihan dan penampilan drumband siswa dalam formasi baris-berbaris di lapangan sekolah.',
                'foto' => 'images/galeri/ekstrakurikuler/drumband.jpg'
            ]
        );

        Galeri::updateOrCreate(
            ['judul' => 'PMR (Palang Merah Remaja)'],
            [
                'kategori' => 'Ekstrakurikuler',
                'deskripsi' => 'Kegiatan pelatihan dan pembinaan siswa dalam bidang kepalangmerahan dan pertolongan pertama.',
                'foto' => 'images/galeri/ekstrakurikuler/pmr.jpg'
            ]
        );


        // =========================
        // FESTIVAL & EVENT
        // =========================

        Galeri::updateOrCreate(
            ['judul' => 'Jalan Sehat'],
            [
                'kategori' => 'Festival & Event',
                'deskripsi' => 'Kegiatan jalan sehat dalam rangka memperingati hari kemerdekaan tingkat Kecamatan Penawangan di Desa Kramat.',
                'foto' => 'images/galeri/festival/jalan sehat.jpg'
            ]
        );

        Galeri::updateOrCreate(
            ['judul' => 'Karnaval Kemerdekaan Indonesia'],
            [
                'kategori' => 'Festival & Event',
                'deskripsi' => 'Karnaval HUT RI ke-81.',
                'foto' => 'images/galeri/festival/karnaval.jpg'
            ]
        );
    }
}