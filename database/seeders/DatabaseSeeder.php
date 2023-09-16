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
        /**
         * Crea 50 instancias del modelo Curso con datos de prueba
         * Si los datos se crean con un factory, la protección contra asignación masiva se desactiva
         * Esto significa que no hay que dar de alta los campos fillable
         * Al llenar los datos con un factory, se puede omitir el CursoSeeder
         */
        Curso::factory(50)->create();
    }
}
