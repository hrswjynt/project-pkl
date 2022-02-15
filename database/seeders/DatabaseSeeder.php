<?php

namespace Database\Seeders;

use App\Models\Merk;
use App\Models\Seri;
use App\Models\User;
use App\Models\Jenis;
use App\Models\peralatan;
use App\Models\DaftarPeralatan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(10)->create();
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '123'
        ]);
        Jenis::create([
            'jenis' => 'Laptop'
        ]);
        Jenis::create([
            'jenis' => 'Printer'
        ]);
        Jenis::create([
            'jenis' => 'Monitor'
        ]);
        Merk::create([
            'merk' => 'Asus'
        ]);
        Merk::create([
            'merk' => 'Acer'
        ]);
        Merk::create([
            'merk' => 'Epson'
        ]);
        Seri::create([
            'seri' => 'TUF'
        ]);
        Seri::create([
            'seri' => 'Predator'
        ]);
        Seri::create([
            'seri' => 'l3310'
        ]);
        Peralatan::create([
            'jenis_id' => 1,
            'merk_id' => 1,
            'seri_id' => 1
        ]);
        Peralatan::create([
            'jenis_id' => 2,
            'merk_id' => 2,
            'seri_id' => 2
        ]);
        Peralatan::create([
            'jenis_id' => 3,
            'merk_id' => 3,
            'seri_id' => 3
        ]);
        DaftarPeralatan::factory(10)->create();
    }
}
