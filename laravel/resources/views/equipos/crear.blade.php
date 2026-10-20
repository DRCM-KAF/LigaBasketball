
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registrar equipo | LigaBasketball</title>
<style>
*{box-sizing:border-box}
body{margin:0;font-family:Arial,sans-serif;background:#f3f5f9;color:#172033}
a{text-decoration:none}
.layout{display:grid;grid-template-columns:245px minmax(0,1fr);min-height:100vh}
.sidebar{background:#111827;color:white;padding:28px 18px;position:sticky;top:0;height:100vh}
.brand{font-size:23px;font-weight:bold;margin-bottom:8px}.brand span{color:#f97316}
.sub{font-size:12px;color:#9ca3af;margin-bottom:35px}
.menu-title{font-size:11px;color:#9ca3af;text-transform:uppercase;letter-spacing:1.5px;margin:25px 12px 12px}
.nav a{display:block;color:#cbd5e1;padding:13px 14px;border-radius:9px;margin:5px 0;font-size:14px}
.nav a:hover,.nav a.active{background:#f97316;color:white}
.side-bottom{position:absolute;bottom:25px;left:18px;right:18px;background:#1f2937;border-radius:12px;padding:15px;font-size:13px;color:#d1d5db;line-height:1.6}
main{padding:35px;min-width:0}
.top{display:flex;justify-content:space-between;align-items:center;gap:15px;flex-wrap:wrap;margin-bottom:28px}
.top small{color:#64748b}.top h1{font-size:27px;margin-top:7px}
.btn{display:inline-block;padding:12px 16px;border-radius:9px;font-size:13px;font-weight:bold;text-align:center;border:0;cursor:pointer}
.btn-orange{background:#f97316;color:white}.btn-orange:hover{background:#ea580c}
.btn-light{background:white;color:#172033;border:1px solid #e2e8f0}
.hero{background:linear-gradient(120deg,#172033,#263b5c);color:white;padding:27px;border-radius:16px;margin-bottom:25px}
.hero small{color:#fdba74;font-size:12px;font-weight:bold;letter-spacing:1.5px}
.hero h2{font-size:24px;margin:12px 0}
.hero p{color:#cbd5e1;font-size:14px;line-height:1.7;margin:0}
.form-card{max-width:850px;background:white;border:1px solid #e2e8f0;border-radius:15px;overflow:hidden}
.card-head{padding:22px 25px;border-bottom:1px solid #e5e7eb}
.card-head h3{font-size:18px;margin:0}.card-head p{font-size:13px;color:#64748b;margin:8px 0 0}
.card-body{padding:26px}
.form-group{margin-bottom:23px}
label{display:block;font-weight:bold;font-size:14px;margin-bottom:9px}
input[type=text]{width:100%;padding:13px 14px;border:1px solid #cbd5e1;border-radius:9px;font:inherit;font-size:14px;outline:none;background:#fff}
input[type=text]:focus,input[type=file]:focus{border-color:#f97316}
input[type=text]:focus{box-shadow:0 0 0 3px #f9731620}
.file-box{padding:20px;border:2px dashed #cbd5e1;background:#f8fafc;border-radius:10px}
input[type=file]{width:100%;max-width:100%;font-size:13px}
.help{display:block;color:#64748b;font-size:12px;margin-top:10px;line-height:1.6}
.preview{display:none;margin-top:15px;align-items:center;gap:13px}
.preview img{width:65px;height:65px;object-fit:cover;border-radius:10px;border:1px solid #e2e8f0}
.preview span{font-size:12px;color:#64748b;overflow-wrap:anywhere}
.actions{display:flex;gap:12px;flex-wrap:wrap;margin-top:28px}
.alert{padding:14px 16px;border-radius:9px;margin-bottom:20px;font-size:14px;line-height:1.6}
.success{background:#dcfce7;color:#166534}.error{background:#fee2e2;color:#991b1b}
.alert ul{padding-left:20px;margin-top:8px}
footer{text-align:center;color:#94a3b8;font-size:12px;padding:25px}
@media(max-width:850px){.layout{grid-template-columns:1fr}.sidebar{position:relative;height:auto;padding:20px}.sub{margin-bottom:15px}.menu-title{margin:15px 0 8px}.nav{display:flex;flex-wrap:wrap;gap:5px}.nav a{margin:0;padding:10px}.side-bottom{display:none}main{padding:20px}}
@media(max-width:550px){main{padding:15px}.top h1{font-size:23px}.hero{padding:22px}.card-body{padding:20px}.card-head{padding:20px}.actions{flex-direction:column}.actions .btn{width:100%}}
</style>
</head>
<body>
<div class="layout">

<aside class="sidebar">
    <div class="brand">Liga<span>Basketball</span></div>
    <div class="sub">SISTEMA DE GESTIÓN DEPORTIVA</div>
    <div class="menu-title">Menú principal</div>
    <nav class="nav">
        <a href="{{ route('equipos.index') }}" class="active">🏀 Equipos</a>
        <a href="{{ route('jugadores.index') }}">👥 Jugadores</a>
        <a href="{{ route('partidos.crear') }}">📋 Registrar partido</a>
        <a href="{{ route('partidos.tabla') }}">🏆 Clasificación</a>
    </nav>
    <div class="side-bottom">
        <strong>🏀 LigaBasketball</strong><br>
        Administra tus equipos, jugadores y resultados desde un solo lugar.
    </div>
</aside>

<main>
    <header class="top">
        <div>
            <small>GESTIÓN / EQUIPOS / REGISTRO</small>
            <h1>Registrar equipo</h1>
        </div>
        <a class="btn btn-light" href="{{ route('equipos.index') }}">← Volver a equipos</a>
    </header>

    <section class="hero">
        <small>🏀 NUEVO PARTICIPANTE</small>
        <h2>¡Que empiece la competición!</h2>
        <p>Registra un equipo, indica su ciudad y añade su logo para identificarlo dentro de la liga.</p>
    </section>

    @if(session('success'))
        <div class="alert success">✓ {{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert error">
            <strong>No se pudo registrar el equipo. Revisa estos campos:</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="form-card">
        <div class="card-head">
            <h3>📋 Información del equipo</h3>
            <p>Completa los datos para registrar al participante.</p>
        </div>

        <div class="card-body">
            <form action="{{ route('equipos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="nombre">Nombre del equipo *</label>
                    <input type="text" id="nombre" name="nombre"
                           value="{{ old('nombre') }}"
                           placeholder="Ej.: Los Toros" maxlength="255" required>
                </div>

                <div class="form-group">
                    <label for="ciudad">Ciudad de origen *</label>
                    <input type="text" id="ciudad" name="ciudad"
                           value="{{ old('ciudad') }}"
                           placeholder="Ej.: Abancay" maxlength="255" required>
                </div>

                <div class="form-group">
                    <label for="logo">Logo del equipo (opcional)</label>
                    <div class="file-box">
                        <input type="file" id="logo" name="logo" accept="image/*">
                        <span class="help">Selecciona una imagen desde tu computadora. Puedes dejar este campo vacío.</span>
                        <div class="preview" id="preview">
                            <img id="previewImg" src="" alt="Vista previa del logo">
                            <span id="fileName"></span>
                        </div>
                    </div>
                </div>

                <div class="actions">
                    <button type="submit" class="btn btn-orange">💾 Guardar equipo</button>
                    <a href="{{ route('equipos.index') }}" class="btn btn-light">Cancelar y volver</a>
                </div>
            </form>
        </div>
    </section>

    <footer>© {{ date('Y') }} LigaBasketball · Sistema de gestión deportiva</footer>
</main>
</div>

<script>
const logo = document.getElementById('logo');
const preview = document.getElementById('preview');
const previewImg = document.getElementById('previewImg');
const fileName = document.getElementById('fileName');
let previewUrl;

logo.addEventListener('change', function () {
    const file = this.files[0];
    if (previewUrl) URL.revokeObjectURL(previewUrl);

    if (!file) {
        preview.style.display = 'none';
        previewImg.src = '';
        return;
    }

    if (!file.type.startsWith('image/')) {
        this.value = '';
        preview.style.display = 'none';
        alert('Selecciona un archivo de imagen válido.');
        return;
    }

    previewUrl = URL.createObjectURL(file);
    previewImg.src = previewUrl;
    fileName.textContent = file.name;
    preview.style.display = 'flex';
});
</script>
</body>
</html>
