
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('equipo_local_id')
                  ->constrained('equipos')
                  ->cascadeOnDelete();

            $table->foreignId('equipo_visitante_id')
                  ->constrained('equipos')
                  ->cascadeOnDelete();

            $table->integer('puntos_local')->default(0);
            $table->integer('puntos_visitante')->default(0);
            $table->date('fecha_partido');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('partidos');
    }
};
