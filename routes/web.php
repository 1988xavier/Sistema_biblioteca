<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController; // Asegúrate de importar el controlador

Route::get('/', [LibroController::class, 'index']);
Route::get('/agregar', [LibroController::class, 'create']);
Route::post('/agregar', [LibroController::class, 'store']);


// web.php


Route::get('/libros/{id}/editar', [LibroController::class, 'editar'])->name('libro.editar');
Route::delete('/libros/{id}', [LibroController::class, 'eliminar'])->name('libro.eliminar');
Route::put('/libros/{id}', [LibroController::class, 'actualizar'])->name('libro.actualizar');

Route::get('/listado', [LibroController::class, 'listado'])->name('libro.listado');

Route::get('/administrar', function () {
    return view('administrar');
})->name('administrar');



