<?php

namespace App\Http\Controllers\Liga;

use App\Http\Controllers\Controller;
use App\Models\Equipo;
use App\Models\Partido;
use Illuminate\Http\Request;

class PartidoController extends Controller
{
    // Mostrar el formulario para anotar un partido
    public function create()
    {
        $equipos = Equipo::all();
        return view('partidos.registrar', compact('equipos'));
    }

    // Guardar el resultado del encuentro en MySQL
    public function store(Request $request)
    {
        $request->validate([
            'equipo_local_id' => 'required|exists:equipos,id|different:equipo_visitante_id',
            'equipo_visitante_id' => 'required|exists:equipos,id',
            'puntos_local' => 'required|integer|min:0',
            'puntos_visitante' => 'required|integer|min:0',
            'fecha_partido' => 'required|date',
        ]);

        Partido::create($request->all());

        return redirect()->route('partidos.tabla')->with('success', '¡Resultado del partido registrado!');
    }

    // Mostrar la tabla de posiciones calculando victorias y derrotas
    public function tablaPosiciones()
    {
        $equipos = Equipo::all();
        $partidos = Partido::all();

        // Estructura para almacenar las estadísticas de cada club
        $tabla = [];
        foreach ($equipos as $equipo) {
            $tabla[$equipo->id] = [
                'nombre' => $equipo->nombre,
                'ciudad' => $equipo->ciudad,
                'pj' => 0, // Partidos Jugados
                'pg' => 0, // Partidos Ganados
                'pp' => 0, // Partidos Perdidos
            ];
        }

        // Procesar los resultados dinámicamente
        foreach ($partidos as $partido) {
            $locId = $partido->equipo_local_id;
            $visId = $partido->equipo_visitante_id;

            if (isset($tabla[$locId]) && isset($tabla[$visId])) {
                $tabla[$locId]['pj']++;
                $tabla[$visId]['pj']++;

                if ($partido->puntos_local > $partido->puntos_visitante) {
                    $tabla[$locId]['pg']++;
                    $tabla[$visId]['pp']++;
                } else {
                    $tabla[$visId]['pg']++;
                    $tabla[$locId]['pp']++;
                }
            }
        }

        // Ordenar los equipos de mayor a menor cantidad de partidos ganados
        uasort($tabla, function ($a, $b) {
            return $b['pg'] <=> $a['pg'];
        });

        return view('partidos.tabla', compact('tabla'));
    }
}