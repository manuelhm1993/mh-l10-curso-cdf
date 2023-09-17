<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index() {
        // La paginación por defecto son 15 registros, se puede moficiar enviando el número deseado por parámetro
        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create() {
        return view('cursos.create');
    }

    public function store(Request $request) {
        $curso = Curso::create($request->all());

        return to_route('cursos.show', $curso);
    }

    public function show(Curso $curso) {
        return view('cursos.show', ['curso' => $curso]);
    }
}
