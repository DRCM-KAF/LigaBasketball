<?php

namespace App\Http\Controllers\Liga;

use App\Http\Controllers\Controller;
use App\Models\Equipo;
use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    // Mostrar el formulario de registro de jugadores
    public function create()
    {
        // Jalamos todos los equipos para ponerlos en un select
        $equipos = Equipo::all();
        return view('jugadores.gestionar', compact('equipos'));
    }

    // Guardar el jugador en la base de datos de XAMPP
    public function store(Request $request)
    {
        $request->validate([
            'equipo_id' => 'required|exists:equipos,id',
            'nombre' => 'required|string|max:255',
            'posicion' => 'required|string|max:255',
            'numero' => 'required|integer',
        ]);

        Jugador::create($request->all());

        return redirect()->route('equipos.index')->with('success', '¡Jugador registrado y asignado con éxito!');
    }

}
