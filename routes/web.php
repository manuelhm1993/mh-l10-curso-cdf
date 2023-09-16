<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Controlador de acción única o invocable, solo tiene un método y se invoca pasando solo la clase
Route::get('/', HomeController::class);

// Grupo de rutas para el controlador CursoController
Route::controller(CursoController::class)->prefix('cursos')->name('cursos.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/{curso}', 'show')->name('show');
});
