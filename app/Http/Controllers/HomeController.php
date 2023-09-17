<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Controlador de acción única
    public function __invoke()
    {
        // return view('home');
        return to_route('cursos.index');
    }
}
