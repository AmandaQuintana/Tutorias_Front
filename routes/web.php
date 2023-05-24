<?php

use App\Http\Controllers\AsignaturasController;
use App\Http\Controllers\EstudiantesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutoriasController;
use App\Http\Controllers\TutoresController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::middleware('auth')->group(function () {
    Route::get('/tutorias', [TutoriasController::class, 'index'])->name('tutorias.index'); //LIST
    Route::get('/tutoria', [TutoriasController::class, 'create'])->name('tutoria.create');
    Route::post('/tutoria', [TutoriasController::class, 'store'])->name('tutoria.store'); //CREATE
    Route::get('/tutoria/detail/{id}', [TutoriasController::class, 'detail'])->name('tutorias.detail');//SHOW
    Route::get('/tutoria/{id}', [TutoriasController::class, 'edit'])->name('tutorias.edit');
    Route::post('/tutoria/update/{id}', [TutoriasController::class, 'update'])->name('tutorias.update'); //UPDATE
    Route::get('/tutoria/delete/{id}', [TutoriasController::class, 'delete'])->name('tutorias.delete'); //DELETE

    Route::get('/tutores', [TutoresController::class, 'index'])->name('tutores.index'); //LIST
    Route::get('/tutor/{id}', [TutoresController::class, 'show'])->name('tutores.show'); //SHOW

    Route::get('/estudiantes', [EstudiantesController::class, 'index'])->name('estudiantes.index'); //LIST
    Route::get('/estudiante/{id}', [EstudiantesController::class, 'show'])->name('estudiantes.show'); //SHOW

    Route::get('/asignaturas', [AsignaturasController::class, 'index'])->name('asignaturas.index'); //LIST
    Route::get('/asignatura/{id}', [AsignaturasController::class, 'show'])->name('asignaturas.show'); //SHOW
});


Route::get('/404', function () {
    return view('404');
})->name('404');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');