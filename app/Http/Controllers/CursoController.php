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
        // Validación del formulario backend
        $validated = $request->validate([
            'name'        => 'required|min:3',
            'description' => 'required',
        ]);

        $curso = Curso::create($validated);

        return to_route('cursos.show', $curso);
    }

    public function show(Curso $curso) {
        return view('cursos.show', ['curso' => $curso]);
    }

    public function edit(Curso $curso) {
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso) {
        // Validación del formulario backend
        $validated = $request->validate([
            'name'        => 'required|min:3',
            'description' => 'required',
        ]);

        $curso->update($validated);

        return to_route('cursos.show', $curso);
    }
}
