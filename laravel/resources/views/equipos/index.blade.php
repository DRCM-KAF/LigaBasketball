<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Equipos</title>
    <style>
        body { font-family: system-ui, -apple-system, sans-serif; background-color: #f8f9fa; color: #212529; margin: 0; padding: 40px; }
        .container { max-width: 1140px; margin: 0 auto; background: #fff; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); padding: 30px; margin-top: 20px; }
        .d-flex { display: flex; }
        .justify-content-between { justify-content: space-between; }
        .align-items-center { align-items: center; }
        .mb-4 { margin-bottom: 1.5rem; }
        h2 { margin: 0; font-size: 28px; color: #1a202c; }
        .btn { display: inline-block; padding: 10px 20px; border-radius: 6px; text-decoration: none; font-weight: bold; margin-left: 10px; border: none; cursor: pointer; color: white; font-size: 14px; }
        .btn-primary { background-color: #0d6efd; }
        .btn-success { background-color: #198754; }
        .btn-dark { background-color: #212529; }
        .table { width: 100%; border-collapse: collapse; margin-top: 25px; }
        .table th, .table td { padding: 14px; border-bottom: 1px solid #e2e8f0; text-align: center; }
        .table-dark { background-color: #1e293b; color: #fff; }
        .rounded-circle { border-radius: 50%; }
        .text-muted { color: #718096; }
    </style>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>🏆 Equipos Participantes</h2>
            <div>
                <a href="{{ route('equipos.crear') }}" class="btn btn-primary">➕ Registrar Equipo</a>
                <a href="{{ route('jugadores.crear') }}" class="btn btn-success">🏃‍♂️ Registrar Jugador</a>
                <a href="{{ route('partidos.tabla') }}" class="btn btn-dark">📊 Tabla de Posiciones</a>
            </div>
        </div>

        @if(session('success'))
            <div style="background-color: #d1e7dd; color: #0f5132; padding: 15px; border-radius: 6px; margin-bottom: 20px; font-weight: bold;">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
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
                        <td>{{ $equipo->ciudad }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted" style="padding: 30px;">No hay equipos registrados todavía.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
