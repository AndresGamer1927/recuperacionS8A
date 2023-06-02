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

Route::post('validar', [SistemaController::class, 'validar'])->name('validar')->middleware("web");
Route::get('ropciones', [SistemaController::class, 'nopciones'])->name('mopciones');

Route::get('conocidos', [PaqueteController::class, 'index'])->name('conocidos.index');
Route::get('crearconocidos', [PaqueteController::class, 'create'])->name('conocidos.create');
Route::post('guardar', [PaqueteController::class, 'store'])->name('paquetes.store');
Route::get('actualizar/{cual?}', [PaqueteController::class, 'edit'])->name('conocidos.edit');
Route::put('actualizar/{cual?}', [PaqueteController::class, 'update'])->name('conocidos.update');
Route::delete('borrar/{cual?}', [PaqueteController::class, 'destroy'])->name('conocidos.destroy');

Route::resource('conocidos', ConocidoController::class);
