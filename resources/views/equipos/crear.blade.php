<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Equipo - Liga</title>
    <link rel="stylesheet" href="https://jsdelivr.net">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">🏀 Registrar Nuevo Equipo</h4>
                    </div>
                    <div class="card-body">
                        <!-- El enctype es obligatorio para poder subir imágenes/logos -->
                        <form action="{{ route('equipos.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre del Equipo</label>
                                <input type="text" name="nombre" class="form-control" placeholder="Ej: Los Toros" required>
                            </div>
                            <div class="mb-3">
                                <label for="ciudad" class="form-label">Ciudad de Origen</label>
                                <input type="text" name="ciudad" class="form-control" placeholder="Ej: Lima" required>
                            </div>
                            <div class="mb-3">
                                <label for="logo" class="form-label">Logo del Equipo (Imagen)</label>
                                <input type="file" name="logo" class="form-control" accept="image/*">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success">Guardar Equipo</button>
                                <a href="{{ route('equipos.index') }}" class="btn btn-secondary">Volver al Listado</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
