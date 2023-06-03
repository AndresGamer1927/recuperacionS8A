<?php

use App\Http\Controllers\ConocidoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\SistemaController;
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

Route::get('/', function () {
    return view('inicio');
});

Route::post('validar', [SistemaController::class, 'validar'])->name('validar');
Route::get('ropciones', [SistemaController::class, 'ropciones'])->name('ropciones');

Route::resource('conocidos', ConocidoController::class);

Route::resource('contactos', ContactoController::class);
