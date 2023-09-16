<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $cursos = [
            'laravel' => [
                'name'        => 'Laravel',
                'description' => 'El mejor framework de PHP',
                'categoria'   => 'Desarrollo web',
            ],
            'react' => [
                'name'        => 'React',
                'description' => 'Librería Javascript desarrollada por Facebook',
                'categoria'   => 'Desarrollo web',
            ],
            'nodejs' => [
                'name'        => 'Nodejs',
                'description' => 'Entorno en tiempo de ejecución para Javascript',
                'categoria'   => 'Desarrollo web',
            ],
        ];

        foreach ($cursos as $curso) {
            $nuevoCurso = new Curso();

            $nuevoCurso->name        = $curso['name'];
            $nuevoCurso->description = $curso['description'];
            $nuevoCurso->categoria   = $curso['categoria'];

            $nuevoCurso->save();
        }
    }
}
