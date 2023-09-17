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

// Rutas de recursos con nombres y parámetros personalizados (en caso de requerir modificar las urls)
Route::resource('asignaturas', CursoController::class)
->names([
    'index'   => 'cursos.index',
    'create'  => 'cursos.create',
    'store'   => 'cursos.store',
    'show'    => 'cursos.show',
    'edit'    => 'cursos.edit',
    'update'  => 'cursos.update',
    'destroy' => 'cursos.destroy'
])
->parameters([
    'asignaturas' => 'curso'
]);

// Grupo de rutas para el controlador CursoController
/* Route::controller(CursoController::class)->prefix('cursos')->name('cursos.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{curso}', 'show')->name('show');
    Route::get('/{curso}/edit', 'edit')->name('edit');
    Route::put('/{curso}', 'update')->name('update');
    Route::delete('/{curso}', 'destroy')->name('destroy');
}); */
