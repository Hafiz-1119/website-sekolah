<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AdminUserSeeder::class,
        ]);
        $this->call(GurusTableSeeder::class);
        $this->call(ProfilsTableSeeder::class);
    }
}