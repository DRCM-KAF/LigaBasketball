
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Liga\EquipoController;
use App\Http\Controllers\Liga\JugadorController;
use App\Http\Controllers\Liga\PartidoController;

// Pantalla principal del proyecto
Route::get('/', function () {
    return redirect()->route('equipos.index');
});

// Rutas para la gestión de equipos
Route::prefix('equipos')->group(function () {
    Route::get('/', [EquipoController::class, 'index'])
        ->name('equipos.index');

    Route::get('/crear', [EquipoController::class, 'create'])
        ->name('equipos.crear');

    Route::post('/guardar', [EquipoController::class, 'store'])
        ->name('equipos.store');
});

// Rutas de jugadores
Route::prefix('jugadores')->group(function () {
    Route::get('/', [JugadorController::class, 'index'])
        ->name('jugadores.index');

    Route::get('/registrar', [JugadorController::class, 'create'])
        ->name('jugadores.crear');

    Route::post('/guardar', [JugadorController::class, 'store'])
        ->name('jugadores.store');
});

// Rutas de partidos y tabla de posiciones
Route::prefix('partidos')->group(function () {
    Route::get('/registrar', [PartidoController::class, 'create'])
        ->name('partidos.crear');

    Route::post('/guardar', [PartidoController::class, 'store'])
        ->name('partidos.store');

    Route::get('/tabla', [PartidoController::class, 'tablaPosiciones'])
        ->name('partidos.tabla');
});
