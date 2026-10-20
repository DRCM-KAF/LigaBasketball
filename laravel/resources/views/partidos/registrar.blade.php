
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Resultado - Liga</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: system-ui, -apple-system, sans-serif;
            background-color: #f8f9fa;
            color: #212529;
            margin: 0;
            padding: 40px 20px;
        }

        .container {
            max-width: 850px;
            margin: 20px auto;
        }

        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.10);
            overflow: hidden;
        }

        .card-header {
            background-color: #212529;
            color: white;
            padding: 22px 25px;
            text-align: center;
        }

        .card-header h2 {
            margin: 0;
            font-size: 25px;
        }

        .card-body {
            padding: 28px;
        }

        .row {
            display: flex;
            gap: 22px;
        }

        .col-6 {
            flex: 1;
            min-width: 0;
        }

        .team-card {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 20px;
        }

        .team-card h3 {
            margin: 0 0 18px;
            text-align: center;
            font-size: 19px;
        }

        .mb-3 {
            margin-bottom: 22px;
        }

        .mb-4 {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 9px;
            font-weight: 600;
        }

        .form-control,
        .form-select {
            display: block;
            width: 100%;
            padding: 12px;
            border: 1px solid #ced4da;
            border-radius: 6px;
            background: white;
            color: #212529;
            font: inherit;
        }

        .form-control:focus,
        .form-select:focus {
            outline: none;
            border-color: #86b7fe;
            box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.15);
        }

        .score {
            margin-top: 15px;
            text-align: center;
            font-size: 22px;
            font-weight: bold;
        }

        .score::placeholder {
            font-size: 15px;
            font-weight: normal;
        }

        .d-grid {
            display: grid;
            gap: 12px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 13px 16px;
            border: none;
            border-radius: 6px;
            text-align: center;
            text-decoration: none;
            font: inherit;
            font-weight: 600;
            cursor: pointer;
        }

        .btn-primary {
            background: #0d6efd;
            color: white;
        }

        .btn-primary:hover {
            background: #0b5ed7;
        }

        .btn-secondary {
            background: #212529;
            color: white;
        }

        .btn-secondary:hover {
            background: #424649;
        }

        .alert {
            padding: 12px 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            background: #f8d7da;
            color: #842029;
        }

        @media (max-width: 600px) {
            body {
                padding: 15px;
            }

            .card-body {
                padding: 18px;
            }

            .row {
                flex-direction: column;
            }

            .card-header h2 {
                font-size: 21px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>🏀 Registrar Resultado del Partido</h2>
            </div>

            <div class="card-body">

                @if ($errors->any())
                    <div class="alert">
                        <strong>Revisa los siguientes datos:</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('partidos.store') }}" method="POST">
                    @csrf

                    <div class="row mb-4">
                        <div class="col-6">
                            <div class="team-card">
                                <h3>🏠 Equipo Local</h3>

                                <div class="mb-3">
                                    <label for="equipo_local_id">Seleccionar equipo</label>
                                    <select id="equipo_local_id"
                                            name="equipo_local_id"
                                            class="form-select" required>
                                        <option value="" disabled
                                            {{ old('equipo_local_id') ? '' : 'selected' }}>
                                            Seleccionar equipo
                                        </option>

                                        @foreach($equipos as $equipo)
                                            <option value="{{ $equipo->id }}"
                                                {{ old('equipo_local_id') == $equipo->id ? 'selected' : '' }}>
                                                {{ $equipo->nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <label for="puntos_local">Puntos del local</label>
                                <input id="puntos_local"
                                       type="number"
                                       name="puntos_local"
                                       class="form-control score"
                                       placeholder="0"
                                       min="0"
                                       value="{{ old('puntos_local') }}"
                                       required>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="team-card">
                                <h3>✈️ Equipo Visitante</h3>

                                <div class="mb-3">
                                    <label for="equipo_visitante_id">Seleccionar equipo</label>
                                    <select id="equipo_visitante_id"
                                            name="equipo_visitante_id"
                                            class="form-select" required>
                                        <option value="" disabled
                                            {{ old('equipo_visitante_id') ? '' : 'selected' }}>
                                            Seleccionar equipo
                                        </option>

                                        @foreach($equipos as $equipo)
                                            <option value="{{ $equipo->id }}"
                                                {{ old('equipo_visitante_id') == $equipo->id ? 'selected' : '' }}>
                                                {{ $equipo->nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <label for="puntos_visitante">Puntos del visitante</label>
                                <input id="puntos_visitante"
                                       type="number"
                                       name="puntos_visitante"
                                       class="form-control score"
                                       placeholder="0"
                                       min="0"
                                       value="{{ old('puntos_visitante') }}"
                                       required>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="fecha_partido">📅 Fecha del Encuentro</label>
                        <input id="fecha_partido"
                               type="date"
                               name="fecha_partido"
                               class="form-control"
                               value="{{ old('fecha_partido') }}"
                               required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            Guardar Resultado
                        </button>

                        <a href="{{ route('partidos.tabla') }}"
                           class="btn btn-secondary">
                            Ver Tabla de Posiciones
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
