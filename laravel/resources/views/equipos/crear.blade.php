
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Equipo - Liga de Básquetbol</title>

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
            max-width: 650px;
            margin: 35px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.10);
            overflow: hidden;
        }

        .card-header {
            background-color: #0d6efd;
            color: white;
            padding: 22px 26px;
        }

        h2 {
            margin: 0;
            font-size: 24px;
        }

        .card-body {
            padding: 28px;
        }

        .intro {
            color: #64748b;
            font-size: 14px;
            margin: 0 0 25px;
            line-height: 1.6;
        }

        .form-group {
            margin-bottom: 22px;
        }

        label {
            display: block;
            font-weight: 650;
            font-size: 14px;
            margin-bottom: 9px;
        }

        input[type="text"] {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 15px;
            font-family: inherit;
            outline: none;
            background: #fff;
        }

        input[type="text"]:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.12);
        }

        .file-box {
            border: 2px dashed #cbd5e1;
            background: #f8fafc;
            padding: 20px;
            border-radius: 8px;
        }

        input[type="file"] {
            display: block;
            width: 100%;
            max-width: 100%;
            font-size: 14px;
        }

        .help {
            display: block;
            color: #64748b;
            font-size: 12px;
            margin-top: 10px;
        }

        .actions {
            display: grid;
            gap: 12px;
            margin-top: 28px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 13px 18px;
            border: none;
            border-radius: 6px;
            text-align: center;
            text-decoration: none;
            font-family: inherit;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: opacity 0.2s;
        }

        .btn:hover {
            opacity: 0.88;
        }

        .btn-primary {
            background: #0d6efd;
            color: #fff;
        }

        .btn-dark {
            background: #212529;
            color: #fff;
        }

        .alert {
            padding: 13px 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .alert-success {
            background: #d1e7dd;
            color: #0f5132;
        }

        .alert-error {
            background: #f8d7da;
            color: #842029;
        }

        .alert ul {
            margin: 8px 0 0;
            padding-left: 20px;
        }

        @media (max-width: 500px) {
            body {
                padding: 12px;
            }

            .container {
                margin: 15px auto;
            }

            .card-header,
            .card-body {
                padding: 20px;
            }

            h2 {
                font-size: 21px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card-header">
            <h2>🏀 Registrar Nuevo Equipo</h2>
        </div>

        <div class="card-body">
            <p class="intro">
                Registra un equipo participante de la liga.
                Puedes añadir su ciudad y un logo para identificarlo.
            </p>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-error">
                    <strong>No se pudo registrar el equipo.</strong>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('equipos.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="form-group">
                    <label for="nombre">Nombre del equipo</label>
                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        value="{{ old('nombre') }}"
                        placeholder="Ej.: Los Toros"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="ciudad">Ciudad de origen</label>
                    <input
                        type="text"
                        id="ciudad"
                        name="ciudad"
                        value="{{ old('ciudad') }}"
                        placeholder="Ej.: Lima"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="logo">Logo del equipo (opcional)</label>

                    <div class="file-box">
                        <input
                            type="file"
                            id="logo"
                            name="logo"
                            accept="image/*"
                        >

                        <span class="help">
                            Selecciona una imagen desde tu computadora.
                        </span>
                    </div>
                </div>

                <div class="actions">
                    <button type="submit" class="btn btn-primary">
                        💾 Guardar Equipo
                    </button>

                    <a href="{{ route('equipos.index') }}"
                       class="btn btn-dark">
                        ← Volver al Listado
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
