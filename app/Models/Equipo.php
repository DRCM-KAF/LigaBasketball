<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    // Nombre exacto de la tabla en tu base de datos
    protected $table = 'equipos';

    // Columnas permitidas para guardar información (Punto 3 del documento)
    protected $fillable = ['nombre', 'ciudad', 'logo'];
}
