
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registrar jugador | LigaBasketball</title>
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
.form-group{margin-bottom:22px}
label{display:block;font-weight:bold;font-size:14px;margin-bottom:9px}
input,select{width:100%;padding:13px 14px;border:1px solid #cbd5e1;border-radius:9px;font:inherit;font-size:14px;background:white;color:#172033;outline:none}
input:focus,select:focus{border-color:#f97316;box-shadow:0 0 0 3px #f9731620}
.help{display:block;color:#64748b;font-size:12px;margin-top:7px;line-height:1.5}
.actions{display:flex;gap:12px;flex-wrap:wrap;margin-top:28px}
.alert{padding:14px 16px;border-radius:9px;margin-bottom:20px;font-size:14px;line-height:1.6}
.error{background:#fee2e2;color:#991b1b}.success{background:#dcfce7;color:#166534}
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
        <a href="{{ route('equipos.index') }}">🏀 Equipos</a>
        <a href="{{ route('jugadores.index') }}" class="active">👥 Jugadores</a>
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
            <small>GESTIÓN / JUGADORES / REGISTRO</small>
            <h1>Registrar jugador</h1>
        </div>
        <a class="btn btn-light" href="{{ route('jugadores.index') }}">← Volver a jugadores</a>
    </header>

    <section class="hero">
        <small>👤 NUEVO JUGADOR</small>
        <h2>Un nuevo talento se une a la cancha.</h2>
        <p>Registra sus datos, asigna un equipo y define su posición y número de camiseta.</p>
    </section>

    @if(session('success'))
        <div class="alert success">✓ {{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert error">
            <strong>No se pudo registrar el jugador. Revisa estos datos:</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if($equipos->isEmpty())
        <div class="alert error">
            <strong>Todavía no hay equipos registrados.</strong><br>
            Primero registra un equipo para poder asignarle un jugador.
            <p style="margin-top:12px">
                <a class="btn btn-orange" href="{{ route('equipos.crear') }}">+ Registrar equipo</a>
            </p>
        </div>
    @endif

    <section class="form-card">
        <div class="card-head">
            <h3>📋 Información del jugador</h3>
            <p>Completa todos los campos obligatorios.</p>
        </div>

        <div class="card-body">
            <form action="{{ route('jugadores.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="equipo_id">Equipo al que pertenece *</label>
                    <select id="equipo_id" name="equipo_id" required>
                        <option value="" disabled {{ old('equipo_id') ? '' : 'selected' }}>
                            -- Selecciona un equipo --
                        </option>
                        @foreach($equipos as $equipo)
                            <option value="{{ $equipo->id }}"
                                {{ old('equipo_id') == $equipo->id ? 'selected' : '' }}>
                                {{ $equipo->nombre }} ({{ $equipo->ciudad }})
                            </option>
                        @endforeach
                    </select>
                    <span class="help">Selecciona el equipo en el que jugará.</span>
                </div>

                <div class="form-group">
                    <label for="nombre">Nombre completo *</label>
                    <input id="nombre" type="text" name="nombre"
                           value="{{ old('nombre') }}"
                           placeholder="Ej.: Michael Jordan" maxlength="255" required>
                </div>

                <div class="form-group">
                    <label for="posicion">Posición en la cancha *</label>
                    <select id="posicion" name="posicion" required>
                        <option value="" disabled {{ old('posicion') ? '' : 'selected' }}>
                            -- Selecciona una posición --
                        </option>
                        @foreach(['Base','Escolta','Alero','Ala-Pívot','Pívot'] as $posicion)
                            <option value="{{ $posicion }}"
                                {{ old('posicion') == $posicion ? 'selected' : '' }}>
                                {{ $posicion }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="numero">Número de camiseta (dorsal) *</label>
                    <input id="numero" type="number" name="numero"
                           value="{{ old('numero') }}"
                           placeholder="Ej.: 23" min="0" max="99" required>
                    <span class="help">Ingresa el número que llevará el jugador en su camiseta.</span>
                </div>

                <div class="actions">
                    <button type="submit" class="btn btn-orange" {{ $equipos->isEmpty() ? 'disabled' : '' }}>
                        💾 Registrar jugador
                    </button>
                    <a href="{{ route('jugadores.index') }}" class="btn btn-light">
                        Cancelar y volver
                    </a>
                </div>
            </form>
        </div>
    </section>

    <footer>© {{ date('Y') }} LigaBasketball · Sistema de gestión deportiva</footer>
</main>
</div>
</body>
</html>
