<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    protected $table = 'partidos';

    protected $fillable = ['equipo_local_id', 'equipo_visitante_id', 'puntos_local', 'puntos_visitante', 'fecha_partido'];
}
