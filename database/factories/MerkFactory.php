<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MerkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $merk = ['Asus', 'Acer', 'Epson'];
        return [
            'merk' => $this->faker->randomElement($merk)
        ];
    }
}
