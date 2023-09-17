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
Route::get('/', HomeController::class)->name('home');

// Rutas de recursos con nombres y parámetros personalizados (en caso de requerir modificar las urls)
/* Route::resource('asignaturas', CursoController::class)->names('cursos')->parameters([
    'asignaturas' => 'curso'
]); */

// Grupo de rutas para el controlador CursoController
Route::controller(CursoController::class)->prefix('cursos')->name('cursos.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{curso}', 'show')->name('show');
    Route::get('/{curso}/edit', 'edit')->name('edit');
    Route::put('/{curso}', 'update')->name('update');
    Route::delete('/{curso}', 'destroy')->name('destroy');
});

// Rutas para mostrar contenido estático, que no conecta con BBDD
Route::view('nosotros', 'nosotros')->name('nosotros');
