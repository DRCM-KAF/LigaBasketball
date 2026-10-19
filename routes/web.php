<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Liga\EquipoController;
use App\Http\Controllers\Liga\JugadorController;

// Pantalla principal del proyecto
Route::get('/', function () {
    return view('welcome');
});

// Rutas para la Gestión de Equipos (CRUD)
Route::prefix('equipos')->group(function () {
    Route::get('/', [EquipoController::class, 'index'])->name('equipos.index');         // Ver listado
    Route::get('/crear', [EquipoController::class, 'create'])->name('equipos.crear');     // Ver formulario
    Route::post('/guardar', [EquipoController::class, 'store'])->name('equipos.store');   // Guardar en base de datos
});

// Rutas de Jugadores (Semana 3)
Route::prefix('jugadores')->group(function () {
    Route::get('/registrar', [JugadorController::class, 'create'])->name('jugadores.crear'); // Ver formulario jugadores
    Route::post('/guardar', [JugadorController::class, 'store'])->name('jugadores.store');   // Guardar en base de datos
});
