<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Equipos</title>
    <!-- Dirección oficial CDN completa de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>🏆 Equipos Participantes</h2>
            <div>
                <a href="{{ route('equipos.crear') }}" class="btn btn-primary">➕ Registrar Equipo</a>
                <a href="{{ route('jugadores.crear') }}" class="btn btn-success">🏃‍♂️ Registrar Jugador</a>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Logo</th>
                            <th>Nombre</th>
                            <th>Ciudad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($equipos as $equipo)
                            <tr>
                                <td>{{ $equipo->id }}</td>
                                <td>
                                    @if($equipo->logo)
                                        <img src="{{ asset($equipo->logo) }}" alt="Logo" style="width: 50px; height: 50px; object-fit: cover;" class="rounded-circle">
                                    @else
                                        <span class="text-muted">Sin Logo</span>
                                    @endif
                                </td>
                                <td><strong>{{ $equipo->nombre }}</strong></td>
                                <!-- Corregido aquí: dejamos solo la columna que creamos en tu MySQL -->
                                <td>{{ $equipo->ciudad }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">No hay equipos registrados todavía.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>