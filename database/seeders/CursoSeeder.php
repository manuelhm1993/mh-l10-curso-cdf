<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Datos de prueba
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

        // Crear tantos modelos como datos se tengan
        foreach ($cursos as $curso) {
            $nuevoCurso = new Curso();

            $nuevoCurso->name        = $curso['name'];
            $nuevoCurso->description = $curso['description'];
            $nuevoCurso->categoria   = $curso['categoria'];

            $nuevoCurso->save();
        }
    }
}
