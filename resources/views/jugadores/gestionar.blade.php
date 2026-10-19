<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Jugador - Liga</title>
    <link rel="stylesheet" href="https://jsdelivr.net">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">🏀 Registrar Nuevo Jugador</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('jugadores.store') }}" method="POST">
                            @csrf
                            
                            <!-- Lista desplegable dinámica conectada a la tabla equipos -->
                            <div class="mb-3">
                                <label for="equipo_id" class="form-label">Seleccionar Equipo</label>
                                <select name="equipo_id" class="form-select" required>
                                    <option value="" selected disabled>-- Elige un equipo --</option>
                                    @foreach($equipos as $equipo)
                                        <option value="{{ $equipo->id }}">{{ $equipo->nombre }} ({{ $equipo->ciudad }})</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre Completo</label>
                                <input type="text" name="nombre" class="form-control" placeholder="Ej: Michael Jordan" required>
                            </div>

                            <div class="mb-3">
                                <label for="posicion" class="form-label">Posición en la Cancha</label>
                                <select name="posicion" class="form-select" required>
                                    <option value="" selected disabled>-- Elige posición --</option>
                                    <option value="Base">Base</option>
                                    <option value="Escolta">Escolta</option>
                                    <option value="Alero">Alero</option>
                                    <option value="Ala-Pívot">Ala-Pívot</option>
                                    <option value="Pívot">Pívot</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="numero" class="form-label">Número de Camiseta (Dorsal)</label>
                                <input type="number" name="numero" class="form-control" placeholder="Ej: 23" min="0" required>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Registrar Jugador</button>
                                <a href="{{ route('equipos.index') }}" class="btn btn-secondary">Ir al Panel de Equipos</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
