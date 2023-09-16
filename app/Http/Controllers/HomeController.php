<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Controlador de acción única
    public function __invoke()
    {
        return "Bienvenido/a a la página principal";
    }
}
