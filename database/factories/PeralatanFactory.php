<?php

namespace Database\Factories;

use App\Models\Merk;
use App\Models\Seri;
use App\Models\Jenis;
use App\Models\peralatan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeralatanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $jenis = Jenis::pluck('id');
        $seri = Seri::pluck('id');
        $merk = Merk::pluck('id');
        return [
            'seri_id' => $this->faker->randomElement($seri),
            'jenis_id' => $this->faker->randomElement($jenis),
            'merk_id' => $this->faker->randomElement($merk)
        ];
    }
}
