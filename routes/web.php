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
    return view('welcome');
});
Route::get('/tutorias', [TutoriasController::class, 'index'])->name('tutorias.index');
Route::get('/tutoria', [TutoriasController::class, 'create'])->middleware('auth');
Route::post('/tutoria', [TutoriasController::class, 'store'])->name('tutoria.store');

Route::get('/404', function () {
    return view('404');
})->name('404');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');