
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Jugador - Liga</title>

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
            max-width: 650px;
            margin: 20px auto;
        }

        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.10);
            overflow: hidden;
        }

        .card-header {
            background-color: #198754;
            color: white;
            padding: 20px 25px;
        }

        .card-header h2 {
            margin: 0;
            font-size: 24px;
        }

        .card-body {
            padding: 25px;
        }

        .mb-3 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .form-control,
        .form-select {
            display: block;
            width: 100%;
            padding: 11px 12px;
            border: 1px solid #ced4da;
            border-radius: 6px;
            background-color: white;
            color: #212529;
            font: inherit;
        }

        .form-control:focus,
        .form-select:focus {
            outline: none;
            border-color: #86b7fe;
            box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.15);
        }

        .d-grid {
            display: grid;
            gap: 12px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 12px 16px;
            border: none;
            border-radius: 6px;
            text-align: center;
            text-decoration: none;
            font: inherit;
            font-weight: 600;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #0d6efd;
            color: white;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
        }

        .btn-secondary {
            background-color: #212529;
            color: white;
        }

        .btn-secondary:hover {
            background-color: #424649;
        }

        .error {
            color: #b02a37;
            margin-top: 6px;
            font-size: 14px;
        }

        .alert {
            padding: 12px;
            margin-bottom: 18px;
            border-radius: 6px;
            background: #f8d7da;
            color: #842029;
        }

        @media (max-width: 480px) {
            body {
                padding: 15px;
            }

            .card-body {
                padding: 18px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>🏀 Registrar Nuevo Jugador</h2>
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

                <form action="{{ route('jugadores.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="equipo_id">Seleccionar Equipo</label>
                        <select id="equipo_id" name="equipo_id"
                                class="form-select" required>
                            <option value="" disabled
                                {{ old('equipo_id') ? '' : 'selected' }}>
                                -- Elige un equipo --
                            </option>

                            @foreach($equipos as $equipo)
                                <option value="{{ $equipo->id }}"
                                    {{ old('equipo_id') == $equipo->id ? 'selected' : '' }}>
                                    {{ $equipo->nombre }} ({{ $equipo->ciudad }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="nombre">Nombre Completo</label>
                        <input id="nombre" type="text" name="nombre"
                               class="form-control"
                               placeholder="Ej: Michael Jordan"
                               value="{{ old('nombre') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="posicion">Posición en la Cancha</label>
                        <select id="posicion" name="posicion"
                                class="form-select" required>
                            <option value="" disabled
                                {{ old('posicion') ? '' : 'selected' }}>
                                -- Elige posición --
                            </option>
                            <option value="Base" {{ old('posicion') == 'Base' ? 'selected' : '' }}>Base</option>
                            <option value="Escolta" {{ old('posicion') == 'Escolta' ? 'selected' : '' }}>Escolta</option>
                            <option value="Alero" {{ old('posicion') == 'Alero' ? 'selected' : '' }}>Alero</option>
                            <option value="Ala-Pívot" {{ old('posicion') == 'Ala-Pívot' ? 'selected' : '' }}>Ala-Pívot</option>
                            <option value="Pívot" {{ old('posicion') == 'Pívot' ? 'selected' : '' }}>Pívot</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="numero">Número de Camiseta (Dorsal)</label>
                        <input id="numero" type="number" name="numero"
                               class="form-control"
                               placeholder="Ej: 23" min="0"
                               value="{{ old('numero') }}" required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            Registrar Jugador
                        </button>

                        <a href="{{ route('equipos.index') }}"
                           class="btn btn-secondary">
                            Ir al Panel de Equipos
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
