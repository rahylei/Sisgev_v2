<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pieza>
 */
class PiezaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [            
            'codigo' => Str::random(10),
            'alto' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 28, $max = 30),
            'largo' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 60, $max = 80),
            'ancho' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 30, $max = 40),
            'peso' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 35, $max = 50),
            'check' => false,
        ];
    }
}
