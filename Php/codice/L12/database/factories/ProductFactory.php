<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $nomi = ['Computer', 'Maglietta Blu', 'Padella', 'Posate'];
        $key = array_rand($nomi);

        return [
            'nome' => $nomi[$key],
            'categoria' => 'Casalinghi',
            'prezzo' => fake()->randomFloat(2, 20, 30),
            'giacenza' => fake()->randomNumber(2)
        ];
    }
}
