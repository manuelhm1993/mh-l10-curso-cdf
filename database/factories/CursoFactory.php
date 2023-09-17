<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'        => fake()->sentence(), // El helper fake() llama a la librería Faker
            'slug'        => fake()->slug(), // El helper fake() llama a la librería Faker
            'description' => fake()->text(),
            'categoria'   => fake()->randomElement([ // Alterna entre uno u otro
                'Desarrollo web',
                'Diseño web',
            ]),
        ];
    }
}
