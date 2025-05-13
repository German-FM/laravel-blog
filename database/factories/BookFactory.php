<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => fake()->sentence(),
            'autor' => fake()->name(),
            'editorial' => fake()->company(),
            'lugar' => fake()->city(),
            'fecha' => fake()->year(),
            'n_ejemplar' => fake()->randomNumber(2),
            'fecha_ingreso' => fake()->date(),
            'observaciones' => fake()->text(200),
            'cou' => fake()->randomNumber(2),
            'slug' => fake()->unique()->slug(),
        ];
    }
}
