
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Liga\EquipoController;
use App\Http\Controllers\Liga\JugadorController;
use App\Http\Controllers\Liga\PartidoController;

// Menú principal
Route::get('/', function () {
    return redirect()->route('inicio');
});

Route::view('/inicio', 'inicio')->name('inicio');

// Gestión de Equipos
Route::prefix('equipos')->group(function () {
    Route::get('/', [EquipoController::class, 'index'])->name('equipos.index');
    Route::get('/crear', [EquipoController::class, 'create'])->name('equipos.crear');
    Route::post('/guardar', [EquipoController::class, 'store'])->name('equipos.store');
});

// Gestión de Jugadores
Route::prefix('jugadores')->group(function () {
    Route::get('/', [JugadorController::class, 'index'])->name('jugadores.index');
    Route::get('/registrar', [JugadorController::class, 'create'])->name('jugadores.crear');
    Route::post('/guardar', [JugadorController::class, 'store'])->name('jugadores.store');
});

// Gestión de Partidos y Clasificación
Route::prefix('partidos')->group(function () {
    Route::get('/registrar', [PartidoController::class, 'create'])->name('partidos.crear');
    Route::post('/guardar', [PartidoController::class, 'store'])->name('partidos.store');
    Route::get('/tabla', [PartidoController::class, 'tablaPosiciones'])->name('partidos.tabla');
});
