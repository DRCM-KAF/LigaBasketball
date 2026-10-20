
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Posiciones - Liga de Básquetbol</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: system-ui, -apple-system, sans-serif;
            background-color: #f8f9fa;
            color: #212529;
            margin: 0;
            padding: 30px 20px;
        }

        .container {
            max-width: 1140px;
            margin: 20px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.10);
            padding: 30px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 25px;
        }

        h2 {
            margin: 0;
            font-size: 28px;
            color: #1a202c;
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .btn {
            display: inline-block;
            padding: 11px 17px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 700;
            font-size: 14px;
            color: white;
            border: none;
            transition: opacity 0.2s;
        }

        .btn:hover {
            opacity: 0.85;
        }

        .btn-primary {
            background-color: #0d6efd;
        }

        .btn-dark {
            background-color: #212529;
        }

        .alert {
            padding: 14px 18px;
            margin-bottom: 20px;
            border-radius: 6px;
            font-weight: 600;
        }

        .alert-success {
            background-color: #d1e7dd;
            color: #0f5132;
            border: 1px solid #badbcc;
        }

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            min-width: 650px;
        }

        .table th,
        .table td {
            padding: 15px 12px;
            border-bottom: 1px solid #e2e8f0;
            text-align: center;
        }

        .table thead {
            background-color: #1e293b;
            color: white;
        }

        .table th {
            font-size: 14px;
            white-space: nowrap;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f8fafc;
        }

        .table tbody tr:hover {
            background-color: #eef4ff;
        }

        .table .team-name {
            text-align: left;
            font-weight: 700;
        }

        .badge {
            display: inline-block;
            min-width: 35px;
            padding: 6px 10px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 700;
        }

        .badge-secondary {
            background-color: #e2e8f0;
            color: #334155;
        }

        .badge-success {
            background-color: #d1e7dd;
            color: #146c43;
        }

        .badge-danger {
            background-color: #f8d7da;
            color: #b02a37;
        }

        .empty {
            padding: 30px !important;
            color: #718096;
        }

        @media (max-width: 650px) {
            body {
                padding: 10px;
            }

            .container {
                padding: 18px;
                margin: 10px auto;
            }

            h2 {
                font-size: 22px;
            }

            .actions {
                width: 100%;
            }

            .btn {
                text-align: center;
                flex: 1;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>🏀 Tabla de Posiciones de la Liga</h2>

            <div class="actions">
                <a href="{{ route('partidos.crear') }}" class="btn btn-primary">
                    🏀 Anotar Partido
                </a>

                <a href="{{ route('equipos.index') }}" class="btn btn-dark">
                    🏠 Volver al Inicio
                </a>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-wrapper">
            <table class="table">
                <thead>
                    <tr>
                        <th>Puesto</th>
                        <th>Equipo</th>
                        <th>Ciudad</th>
                        <th>PJ (Jugados)</th>
                        <th>PG (Ganados)</th>
                        <th>PP (Perdidos)</th>
                    </tr>
                </thead>

                <tbody>
                    @php $puesto = 1; @endphp

                    @forelse($tabla as $id => $datos)
                        <tr>
                            <td>
                                <strong>{{ $puesto++ }}</strong>
                            </td>

                            <td class="team-name">
                                {{ $datos['nombre'] }}
                            </td>

                            <td>{{ $datos['ciudad'] }}</td>

                            <td>
                                <span class="badge badge-secondary">
                                    {{ $datos['pj'] }}
                                </span>
                            </td>

                            <td>
                                <span class="badge badge-success">
                                    {{ $datos['pg'] }}
                                </span>
                            </td>

                            <td>
                                <span class="badge badge-danger">
                                    {{ $datos['pp'] }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="empty">
                                No hay partidos registrados para generar estadísticas.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
