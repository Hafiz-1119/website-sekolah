<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProfilsTableSeeder extends Seeder
{


      @return void
     
    public function run()
    {
        

        \DB::table('profils')->delete();
        
        \DB::table('profils')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sejarah' => 'SMP Negeri 2 Penawangan berdiri pada tahun 1990, dengan kegiatan belajar mengajar menumpang di SDN di Desa Sedadi. Barulah mulai tahun 1991 sekolah memiliki gedung yang ditempati sampai sekarang. Sekolah ini terletak di lokasi yang cukup strategis yaitu di pinggir jalan raya Sedadi-Penawangan, tepatnya di Desa Sedadi, Kecamatan Penawangan, Kabupaten Grobogan, Jawa Tengah.

Saat ini SMP Negeri 2 Penawangan memiliki gedung sekolah yang mampu menampung 672 siswa, terbagi dalam 7 kelas VII, 7 Kelas VIII dan 7 Kelas IX. Dari gedung inilah para siswa digembleng, dibina, dididik dan dibentuk agar menjadi manusia- manusia yang berguna bagi nusa dan bangsa.',
                'visi' => '“BERKEIMANAN DAN KETAKWAAN KEPADA TUHAN YANG MAHA ESA, UNGGUL DALAM PRESTASI, DAN PEDULI LINGKUNGAN.”',
                'misi' => 'Mewujudkan peningkatan murid yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa, serta berakhlak mulia.
Mewujudkan peningkatan prestasi dalam bidang akademik dan non akademik.
Mewujudkan peningkatan karakter murid yang mandiri dan bernalar kritis.
Mewujudkan peningkatan kreativitas murid dalam pembelajaran intrakurikuler, kokurikuler dimensi profil lulusan, dan ekstrakurikuler.
>Mewujudkan peningkatan dalam bidang kepedulian lingkungan, budaya hidup sehat dan budaya 7K.',
                'foto_sekolah' => 'profil_images/WUs5AYtJvbYQZ2qrqX6PoBLGDI4lWnOOiyzHEXTn.jpg',
                'created_at' => '2026-08-24 14:59:16',
                'updated_at' => '2026-08-24 14:59:16',
            ),
        ));
        
        
    }
}