<?php

namespace App\Http\Controllers\Liga;

use App\Http\Controllers\Controller;
use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    // Listar todos los equipos
    public function index()
    {
        $equipos = Equipo::all();
        return view('equipos.index', compact('equipos'));
    }

    // Mostrar el formulario de creación
    public function create()
    {
        return view('equipos.crear');
    }

    // Guardar el equipo en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'ciudad' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $datos = $request->only(['nombre', 'ciudad']);

        if ($request->hasFile('logo')) {
            $nombreImagen = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('uploads/logos'), $nombreImagen);
            $datos['logo'] = 'uploads/logos/' . $nombreImagen;
        }

        Equipo::create($datos);

        return redirect()->route('equipos.index')->with('success', '¡Equipo registrado con éxito!');
    }
}
