<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GurusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gurus')->delete();
        
        \DB::table('gurus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Agung Ruswanto, S.Pd.',
                'kategori' => 'guru',
                'mapel' => 'Bahasa Indonesia',
                'jabatan' => NULL,
                'foto' => 'guru/rRH0vqKkALDdkHiGyO8F0ZMSdOAsML91sJ5KeDa3.jpg',
                'created_at' => '2026-08-24 14:06:05',
                'updated_at' => '2026-08-24 16:32:29',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Agus Prayetno, S.Pd.',
                'kategori' => 'guru',
                'mapel' => 'Pendidikan Pancasila',
                'jabatan' => NULL,
                'foto' => 'guru/eJF8aFeYwGnYbTLRxPbf5zyYgmRKcQ7iKsB0K4RD.jpg',
                'created_at' => '2026-08-24 16:33:33',
                'updated_at' => '2026-08-24 16:33:33',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'Drs. Bambang Nudiman',
                'kategori' => 'guru',
                'mapel' => 'Bahasa Indonesia',
                'jabatan' => NULL,
                'foto' => 'guru/yZDnD0XxcBv7otvATFKxQ2FXakAfEQGFt7srk0a7.jpg',
                'created_at' => '2026-08-24 16:34:08',
                'updated_at' => '2026-08-24 16:34:08',
            ),
            3 => 
            array (
                'id' => 4,
                'nama' => 'Bregas Nanda Priyawardana, ST.',
                'kategori' => 'guru',
                'mapel' => 'Informatika',
                'jabatan' => NULL,
                'foto' => 'guru/yL1Cl8HHuKZFwyJfz7e9OTB7uvZ7kqBncldqqiK2.jpg',
                'created_at' => '2026-08-24 16:34:40',
                'updated_at' => '2026-08-24 16:34:40',
            ),
            4 => 
            array (
                'id' => 5,
                'nama' => 'Devi Prasetyaningrum, S.Pd.',
                'kategori' => 'guru',
                'mapel' => 'Matematika',
                'jabatan' => NULL,
                'foto' => 'guru/Pz0Hbfip7fvZSXqzkdMmWJ3JhVbhyvmocIB98szx.jpg',
                'created_at' => '2026-08-24 16:35:13',
                'updated_at' => '2026-08-24 16:35:13',
            ),
            5 => 
            array (
                'id' => 6,
                'nama' => 'Djoko Supriyanto, S.Pd.',
                'kategori' => 'guru',
                'mapel' => 'Bahasa Inggris',
                'jabatan' => NULL,
                'foto' => 'guru/ztEN86BZLbvOxftm3GmFOoLRoCca6mo97jbJ6XiZ.jpg',
                'created_at' => '2026-08-24 16:35:42',
                'updated_at' => '2026-08-24 16:35:42',
            ),
            6 => 
            array (
                'id' => 7,
                'nama' => 'Eko Budiyono, S.Pd.',
                'kategori' => 'guru',
                'mapel' => 'Olahraga',
                'jabatan' => NULL,
                'foto' => 'guru/HPw4tBnPjMaPOmkljmiJdQ7w5Mk5q8MYvELNGxwy.jpg',
                'created_at' => '2026-08-24 16:36:22',
                'updated_at' => '2026-08-24 16:36:22',
            ),
            7 => 
            array (
                'id' => 8,
                'nama' => 'Endah Widyaningsih, S.Pd.',
                'kategori' => 'guru',
                'mapel' => 'Bahasa Inggris',
                'jabatan' => NULL,
                'foto' => 'guru/lsYnmUVz6JCufYkctZPs3tYeMfwQTrsbYbXZ3mef.jpg',
                'created_at' => '2026-08-24 16:37:11',
                'updated_at' => '2026-08-24 16:37:11',
            ),
            8 => 
            array (
                'id' => 9,
                'nama' => 'Endah Wahyuningsih S.Pd.',
                'kategori' => 'guru',
                'mapel' => 'Ilmu Pengetahuan Alam',
                'jabatan' => NULL,
                'foto' => 'guru/qjW8c8Te3hwvAIfIRzgDZqpLmtHsLEuBCHjfKQqw.jpg',
                'created_at' => '2026-08-24 16:37:43',
                'updated_at' => '2026-08-24 16:37:43',
            ),
            9 => 
            array (
                'id' => 10,
                'nama' => 'Endang Sri Mukti, S.Pd.',
                'kategori' => 'guru',
                'mapel' => 'Matematika',
                'jabatan' => NULL,
                'foto' => 'guru/k4rSu2dNiK9fb6EBxuhZuLTWhOMdyAF3zoo10pYe.jpg',
                'created_at' => '2026-08-24 16:38:35',
                'updated_at' => '2026-08-24 16:38:35',
            ),
            10 => 
            array (
                'id' => 11,
                'nama' => 'Fathonah, S.Ag.',
                'kategori' => 'guru',
                'mapel' => 'Pendidikan Agama Islam',
                'jabatan' => NULL,
                'foto' => 'guru/7vttr7hurYyhxTtWR61r4m8Ir3cIO0Qe3Y8jNXlY.jpg',
                'created_at' => '2026-08-24 16:39:11',
                'updated_at' => '2026-08-24 16:39:11',
            ),
            11 => 
            array (
                'id' => 12,
                'nama' => 'Fita Dewi Parwati, S.Pd',
                'kategori' => 'guru',
                'mapel' => 'Bahasa Indonesia',
                'jabatan' => NULL,
                'foto' => 'guru/Y5itLDzri00nS2EhutRAhGv8ooKhbwwk7VSsZEUg.jpg',
                'created_at' => '2026-08-24 16:39:34',
                'updated_at' => '2026-08-24 16:39:34',
            ),
            12 => 
            array (
                'id' => 13,
                'nama' => 'Galuh Ajeng, S.Pd.',
                'kategori' => 'guru',
                'mapel' => 'Seni Musik',
                'jabatan' => NULL,
                'foto' => 'guru/ce2wpPK5a83gutUv9wtOznFxWlHT1QAjVIkQc7HR.jpg',
                'created_at' => '2026-08-24 16:40:02',
                'updated_at' => '2026-08-24 16:40:02',
            ),
            13 => 
            array (
                'id' => 16,
                'nama' => 'Heri Soertikanti, S. Pd.',
                'kategori' => 'guru',
                'mapel' => 'Ilmu Pengetahuan Alam',
                'jabatan' => NULL,
                'foto' => 'guru/6GCoqJCoTBc9e9KSDbIFrAwx1WryDEO4U06USMpv.jpg',
                'created_at' => '2026-08-24 16:40:30',
                'updated_at' => '2026-08-24 16:40:30',
            ),
            14 => 
            array (
                'id' => 17,
                'nama' => 'Ika Rismawati',
                'kategori' => 'staff',
                'mapel' => NULL,
                'jabatan' => 'Perpustakaan',
                'foto' => 'guru/SxNnioiaI2cBHIGPVniweO0wobdfftOO3TBc9p2D.jpg',
                'created_at' => '2026-08-24 16:41:10',
                'updated_at' => '2026-08-24 16:41:10',
            ),
            15 => 
            array (
                'id' => 18,
                'nama' => 'Mala Nur Anisa, S.Pd.',
                'kategori' => 'guru',
                'mapel' => 'Bahasa Indonesia',
                'jabatan' => NULL,
                'foto' => 'guru/1fXHfNCZX8pIoZE7LWHBecJFkBdYDTCcDfnWoYdV.jpg',
                'created_at' => '2026-08-24 16:42:15',
                'updated_at' => '2026-08-24 16:42:15',
            ),
            16 => 
            array (
                'id' => 19,
                'nama' => 'Jadi Susanto, S.Pd.',
                'kategori' => 'guru',
                'mapel' => 'Ilmu Pengetahuan Sosial',
                'jabatan' => NULL,
                'foto' => 'guru/jlc9U4Avj7nxaUVtZtQpzR2QR9P3h5YFjUpyQSXF.jpg',
                'created_at' => '2026-08-24 16:43:16',
                'updated_at' => '2026-08-24 16:43:16',
            ),
            17 => 
            array (
                'id' => 20,
                'nama' => 'Jaman',
                'kategori' => 'staff',
                'mapel' => NULL,
                'jabatan' => 'Kebon',
                'foto' => 'guru/NnsE6QVi8u63zfBAbPIYh4o64ab4e16ka0AP9vxJ.jpg',
                'created_at' => '2026-08-24 16:43:40',
                'updated_at' => '2026-08-24 16:43:40',
            ),
            18 => 
            array (
                'id' => 21,
                'nama' => 'Mayangsari Putri W.',
                'kategori' => 'staff',
                'mapel' => NULL,
                'jabatan' => 'Tata Usaha',
                'foto' => 'guru/f4TJ9LMGXj5MMKRxMOxMjVSZrbfLWBEx5V2LUZag.jpg',
                'created_at' => '2026-08-24 16:44:16',
                'updated_at' => '2026-08-24 16:44:16',
            ),
            19 => 
            array (
                'id' => 22,
                'nama' => 'Mohamad Suharto, S.Pd.',
                'kategori' => 'guru',
                'mapel' => 'Olahraga',
                'jabatan' => NULL,
                'foto' => 'guru/ZytrXmu4ScuXhzFSGMvVSC5dncvEYiRcCJv5QMvf.jpg',
                'created_at' => '2026-08-24 16:45:04',
                'updated_at' => '2026-08-24 16:45:04',
            ),
            20 => 
            array (
                'id' => 23,
                'nama' => 'Mustaqfirin, M.Pd.',
                'kategori' => 'guru',
                'mapel' => 'Pendidikan Agama Islam',
                'jabatan' => NULL,
                'foto' => 'guru/gBAlBJuQGb5tTY0uK18Y5ZyxxI0rhW1w4LKbLolO.jpg',
                'created_at' => '2026-08-24 16:45:31',
                'updated_at' => '2026-08-24 16:45:31',
            ),
            21 => 
            array (
                'id' => 24,
                'nama' => 'Pak Kus',
                'kategori' => 'staff',
                'mapel' => NULL,
                'jabatan' => 'Penjaga',
                'foto' => 'guru/fCmhYxdqbLCibg6czfKpfmWMblr5rDJiYDSX25fR.jpg',
                'created_at' => '2026-08-24 16:45:59',
                'updated_at' => '2026-08-24 16:45:59',
            ),
            22 => 
            array (
                'id' => 25,
                'nama' => 'Parsuni, S.Pd.',
                'kategori' => 'guru',
                'mapel' => 'Bahasa Indonesia',
                'jabatan' => NULL,
                'foto' => 'guru/38FsuOLd5IZTvpadqubkTiWOHQiPcmpDi5E1UYnJ.jpg',
                'created_at' => '2026-08-24 16:46:41',
                'updated_at' => '2026-08-24 16:46:41',
            ),
            23 => 
            array (
                'id' => 26,
                'nama' => 'Priska Sihalina',
                'kategori' => 'staff',
                'mapel' => NULL,
                'jabatan' => 'Tata Usaha',
                'foto' => 'guru/3nMTpRxqLsPdSvkmY4WCWR35ipyQcGxVNJTwKncj.jpg',
                'created_at' => '2026-08-24 16:47:44',
                'updated_at' => '2026-08-24 16:47:44',
            ),
            24 => 
            array (
                'id' => 27,
                'nama' => 'Retno Aris Sugiarti, S.Pd.',
                'kategori' => 'guru',
                'mapel' => 'Ilmu Pengetahuan Alam',
                'jabatan' => NULL,
                'foto' => 'guru/cM5aXoKAPO1pA33f2yz1AzXYGgKCrzUvg3yiEMAr.jpg',
                'created_at' => '2026-08-24 16:48:21',
                'updated_at' => '2026-08-24 16:48:21',
            ),
            25 => 
            array (
                'id' => 28,
                'nama' => 'Riris Pratiwi, S.Pd.',
                'kategori' => 'guru',
                'mapel' => 'Ilmu Pengetahuan Sosial',
                'jabatan' => NULL,
                'foto' => 'guru/bp99ggDmcYmrqnBBaTJThlUMDr3dlafT6yW4lnpP.jpg',
                'created_at' => '2026-08-24 16:48:44',
                'updated_at' => '2026-08-24 16:48:44',
            ),
            26 => 
            array (
                'id' => 29,
                'nama' => 'Siti Umi Styaningsih',
                'kategori' => 'staff',
                'mapel' => NULL,
                'jabatan' => 'Tata Usaha',
                'foto' => 'guru/uo6c7r0YHWXe6DpCOfUD5vsABty53n77hjP2AcBv.jpg',
                'created_at' => '2026-08-24 16:49:10',
                'updated_at' => '2026-08-24 16:49:10',
            ),
            27 => 
            array (
                'id' => 30,
                'nama' => 'Sri Ambarwati, S.Pd.',
                'kategori' => 'guru',
                'mapel' => 'Bahasa Indonesia',
                'jabatan' => NULL,
                'foto' => 'guru/9BbZovNLkzzFhtFQ44ipHuVZDKkDjyRfddrWHsN1.jpg',
                'created_at' => '2026-08-24 16:49:46',
                'updated_at' => '2026-08-24 16:49:46',
            ),
            28 => 
            array (
                'id' => 31,
                'nama' => 'Sudar, S.Pd.',
                'kategori' => 'guru',
                'mapel' => 'Ilmu Pengetahuan Sosial',
                'jabatan' => NULL,
                'foto' => 'guru/1St4gu8mItxXEviRGAgWc5BlQ4oVFWZbij79sM23.jpg',
                'created_at' => '2026-08-24 16:50:22',
                'updated_at' => '2026-08-24 16:50:22',
            ),
            29 => 
            array (
                'id' => 32,
                'nama' => 'Suwarningsih, S.Pd.',
                'kategori' => 'guru',
                'mapel' => 'Pendidikan Pancasila',
                'jabatan' => NULL,
                'foto' => 'guru/yOb3t63WJKLyBvxMRyJHBncaeq3uMOTkxcKi1iQq.jpg',
                'created_at' => '2026-08-24 16:51:05',
                'updated_at' => '2026-08-24 16:51:05',
            ),
            30 => 
            array (
                'id' => 33,
                'nama' => 'Suhartini, S.Pd.',
                'kategori' => 'guru',
                'mapel' => 'Bahasa Inggris',
                'jabatan' => NULL,
                'foto' => 'guru/vaAyt3JnEoKWByEPwztskG0GLh4tb57h1IeWqT55.jpg',
                'created_at' => '2026-08-24 16:51:38',
                'updated_at' => '2026-08-24 16:51:38',
            ),
            31 => 
            array (
                'id' => 34,
                'nama' => 'Sukarno',
                'kategori' => 'staff',
                'mapel' => NULL,
                'jabatan' => 'Tata Usaha',
                'foto' => 'guru/997RzymQLlkIG1qRalZkNW5U9USM0L6gx1srmMQh.jpg',
                'created_at' => '2026-08-24 16:51:59',
                'updated_at' => '2026-08-24 16:51:59',
            ),
            32 => 
            array (
                'id' => 35,
                'nama' => 'Sunawan, S.Pd.',
                'kategori' => 'guru',
                'mapel' => 'Bahasa Jawa',
                'jabatan' => NULL,
                'foto' => 'guru/uirpfxbFlGC2Lgrjvj3O7ZSxZuajoZGxqcdFzMNj.jpg',
                'created_at' => '2026-08-24 16:52:23',
                'updated_at' => '2026-08-24 16:52:23',
            ),
            33 => 
            array (
                'id' => 36,
                'nama' => 'Supriyanto',
                'kategori' => 'staff',
                'mapel' => NULL,
                'jabatan' => 'Kebon',
                'foto' => 'guru/iuvHFK68HTVMFbgjw8qHg0e8oz5NLTmTmErysJhJ.jpg',
                'created_at' => '2026-08-24 16:52:53',
                'updated_at' => '2026-08-24 16:52:53',
            ),
            34 => 
            array (
                'id' => 37,
                'nama' => 'Suryowati, S.Pd',
                'kategori' => 'guru',
                'mapel' => 'Ilmu Pengetahuan Sosial',
                'jabatan' => NULL,
                'foto' => 'guru/faDF8ePDMGieBR6YLaEZAIqmPoUn1JBJOHD6YQxX.jpg',
                'created_at' => '2026-08-24 16:53:16',
                'updated_at' => '2026-08-24 16:53:16',
            ),
            35 => 
            array (
                'id' => 38,
                'nama' => 'Suwito',
                'kategori' => 'staff',
                'mapel' => NULL,
                'jabatan' => 'Satpam',
                'foto' => 'guru/EukeMskS7bEJiSmRucFYypPw5clOMfokGqwMg2uL.jpg',
                'created_at' => '2026-08-24 16:53:41',
                'updated_at' => '2026-08-24 16:53:41',
            ),
            36 => 
            array (
                'id' => 39,
                'nama' => 'Woro Hapsari, S.Pd.',
                'kategori' => 'guru',
                'mapel' => 'Matematika',
                'jabatan' => NULL,
                'foto' => 'guru/ZkM7hwzJUUy9A64kCpYbxnmhvh4VxXqWkZ607CkV.jpg',
                'created_at' => '2026-08-24 16:54:09',
                'updated_at' => '2026-08-24 16:54:09',
            ),
        ));
        
        
    }
}