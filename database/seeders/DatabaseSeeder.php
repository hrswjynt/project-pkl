<?php

namespace Database\Seeders;

use App\Models\Peralatan;
use App\Models\User;
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
        User::create([
            'name' => 'Haris Wijayanto',
            'email' => 'hrswjynto@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        ]);
        User::factory(10)->create();

        Peralatan::create([
            'jenis' => 'Monitor',
            'merk' => 'Asus',
            'seri' => 'TUF'
        ]);
    }
}
