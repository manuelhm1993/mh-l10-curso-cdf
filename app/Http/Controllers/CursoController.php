<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index() {
        return "Bienvenido a la página principal de cursos";
    }

    public function create() {
        return "En esta página podrás crear un nuevo curso";
    }

    public function show(string $curso) {
        return "Bienvenidos al curso $curso";
    }
}
