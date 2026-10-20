
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Jugadores</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 40px;
            color: #212529;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px #00000015;
        }

        h1 {
            color: #198754;
        }

        .boton {
            display: inline-block;
            padding: 12px 18px;
            margin-bottom: 20px;
            background: #0d6efd;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 14px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #212529;
            color: white;
        }

        .vacio {
            padding: 20px;
            text-align: center;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>🏀 Lista de Jugadores</h1>

        <a class="boton" href="{{ route('jugadores.crear') }}">
            + Registrar Jugador
        </a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Equipo</th>
                    <th>Posición</th>
                    <th>Número</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($jugadores as $jugador)
                    <tr>
                        <td>{{ $jugador->id }}</td>
                        <td>{{ $jugador->nombre }}</td>
                        <td>{{ $jugador->equipo?->nombre ?? 'Sin equipo' }}</td>
                        <td>{{ $jugador->posicion }}</td>
                        <td>{{ $jugador->numero }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="vacio">
                            Todavía no hay jugadores registrados.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
