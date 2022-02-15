<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SeriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $seri = ['Predator', 'l3110', 'TUF'];
        return [
            'seri' => $this->faker->randomElement($seri)
        ];
    }
}
