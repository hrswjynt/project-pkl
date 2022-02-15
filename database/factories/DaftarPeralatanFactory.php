<?php

namespace Database\Factories;

use App\Models\peralatan;
use Illuminate\Database\Eloquent\Factories\Factory;

class DaftarPeralatanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $peralatan=peralatan::get('id');
        $divisi=['Perencanaan', 'SISDA', 'PSDA', 'Sungai dan Rawa', 'Operasional'];
        return [
                'peralatan_id' => $this->faker->randomElement($peralatan),
                'kode_barang' => mt_rand(1, 10),
                'tahun_pengadaan' => $this->faker->year(),
                'divisi' => $this->faker->randomElement($divisi),
                'info' => $this->faker->sentence(),
        ];
    }
}
