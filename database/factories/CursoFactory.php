<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = fake()->sentence(); // El helper fake() llama a la librería Faker
        $slug = Str::of($name)->slug('-'); // Crear un slug correspondiente al nombre

        return [
            'name'        => $name,
            'slug'        => $slug,
            'description' => fake()->text(),
            'categoria'   => fake()->randomElement([ // Alterna entre uno u otro
                'Desarrollo web',
                'Diseño web',
            ]),
        ];
    }
}
