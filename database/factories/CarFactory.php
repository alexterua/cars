<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(3),
            'desc' => $this->faker->sentence(5),
            'engine' => $this->faker->word(5),
            'fuel' => 40,
            'price' => random_int(2000, 50000),
        ];
    }
}
