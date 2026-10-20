<?php

namespace App\Http\Controllers\Liga;

use App\Http\Controllers\Controller;
use App\Models\Equipo;
use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    // Mostrar la lista de jugadores
    public function index()
    {
        $jugadores = Jugador::with('equipo')->get();

        return view('jugadores.index', compact('jugadores'));
    }

    // Mostrar el formulario para registrar jugadores
    public function create()
    {
        $equipos = Equipo::all();

        return view('jugadores.gestionar', compact('equipos'));
    }

    // Guardar un nuevo jugador
    public function store(Request $request)
    {
        $request->validate([
            'equipo_id' => 'required|exists:equipos,id',
            'nombre' => 'required|string|max:255',
            'posicion' => 'required|string|max:255',
            'numero' => 'required|integer',
        ]);

        Jugador::create($request->all());

        return redirect()
            ->route('jugadores.index')
            ->with('success', 'Jugador registrado correctamente.');
    }
}
