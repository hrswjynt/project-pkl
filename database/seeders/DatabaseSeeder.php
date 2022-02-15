<?php

namespace Database\Seeders;

use App\Models\User;
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
     

        peralatan::create([
            'jenis' => 'Monitor',
            'merk' => 'Asus',
            'seri' => 'TUF',
            
        ]);
        peralatan::create([
            'jenis' => 'Laptop',
            'merk' => 'Acer',
            'seri' => 'Predator',
            
        ]);
        peralatan::create([
            'jenis' => 'Printer',
            'merk' => 'Epson',
            'seri' => 'L3660',
        ]);
        DaftarPeralatan::factory(10)->create();
    }
}
