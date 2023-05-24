<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutoriasController;

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
Route::get('/tutorias', [TutoriasController::class, 'index'])->name('tutorias.index'); //LIST
Route::get('/tutoria', [TutoriasController::class, 'create'])->middleware('auth')->name('tutoria.create');
Route::post('/tutoria', [TutoriasController::class, 'store'])->name('tutoria.store'); //CREATE
Route::get('/tutoria/{id}', [TutoriasController::class, 'show'])->name('tutorias.show'); //SHOW
Route::post('/tutoria/update/{id}', [TutoriasController::class, 'update'])->name('tutorias.update');
Route::get('/tutoria/delete/{id}', [TutoriasController::class, 'delete'])->name('tutorias.delete'); //DELETE

Route::get('/404', function () {
    return view('404');
})->name('404');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
