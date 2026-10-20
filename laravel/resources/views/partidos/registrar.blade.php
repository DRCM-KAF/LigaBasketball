
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registrar partido | LigaBasketball</title>
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
.form-card{background:white;border:1px solid #e2e8f0;border-radius:15px;overflow:hidden}
.card-head{padding:22px 25px;border-bottom:1px solid #e5e7eb}
.card-head h3{font-size:18px;margin:0}.card-head p{font-size:13px;color:#64748b;margin:8px 0 0}
.card-body{padding:26px}
.teams{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:18px;margin-bottom:25px}
.team-card{background:#f8fafc;border:1px solid #e2e8f0;border-radius:13px;padding:20px;min-width:0}
.team-title{display:flex;align-items:center;gap:10px;margin-bottom:22px}
.team-icon{width:42px;height:42px;display:grid;place-items:center;background:#fff0e5;border-radius:11px;font-size:22px}
.team-title h3{font-size:16px;margin:0}.team-title p{font-size:12px;color:#64748b;margin:5px 0 0}
.form-group{margin-bottom:20px}
label{display:block;font-weight:bold;font-size:14px;margin-bottom:9px}
input,select{width:100%;min-width:0;padding:13px 14px;border:1px solid #cbd5e1;border-radius:9px;font:inherit;font-size:14px;background:white;color:#172033;outline:none}
input:focus,select:focus{border-color:#f97316;box-shadow:0 0 0 3px #f9731620}
.score-wrap{position:relative}
.score{font-size:27px;font-weight:bold;text-align:center}
.help{display:block;color:#64748b;font-size:12px;margin-top:7px;line-height:1.5}
.date-card{background:#fff;border:1px solid #e2e8f0;border-radius:12px;padding:20px;margin-bottom:24px}
.date-card label{margin-bottom:12px}
.actions{display:flex;gap:12px;flex-wrap:wrap}
.alert{padding:14px 16px;border-radius:9px;margin-bottom:20px;font-size:14px;line-height:1.6}
.error{background:#fee2e2;color:#991b1b}.success{background:#dcfce7;color:#166534}
.alert ul{padding-left:20px;margin-top:8px}
button:disabled{opacity:.5;cursor:not-allowed}
footer{text-align:center;color:#94a3b8;font-size:12px;padding:25px}
@media(max-width:850px){.layout{grid-template-columns:1fr}.sidebar{position:relative;height:auto;padding:20px}.sub{margin-bottom:15px}.menu-title{margin:15px 0 8px}.nav{display:flex;flex-wrap:wrap;gap:5px}.nav a{margin:0;padding:10px}.side-bottom{display:none}main{padding:20px}}
@media(max-width:600px){main{padding:15px}.top h1{font-size:23px}.hero{padding:22px}.teams{grid-template-columns:1fr}.card-body{padding:17px}.card-head{padding:20px}.actions{flex-direction:column}.actions .btn{width:100%}}
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
        <a href="{{ route('jugadores.index') }}">👥 Jugadores</a>
        <a href="{{ route('partidos.crear') }}" class="active">📋 Registrar partido</a>
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
            <small>GESTIÓN / PARTIDOS / REGISTRO</small>
            <h1>Registrar partido</h1>
        </div>
        <a class="btn btn-light" href="{{ route('partidos.tabla') }}">← Ver clasificación</a>
    </header>

    <section class="hero">
        <small>🏆 DÍA DE PARTIDO</small>
        <h2>Que gane el mejor equipo.</h2>
        <p>Selecciona a los dos equipos, registra el marcador final y guarda la fecha del encuentro.</p>
    </section>

    @if(session('success'))
        <div class="alert success">✓ {{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert error">
            <strong>No se pudo registrar el partido. Revisa estos datos:</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if($equipos->count() < 2)
        <div class="alert error">
            <strong>Necesitas al menos dos equipos.</strong><br>
            Registra dos equipos antes de crear un partido.
            <p style="margin-top:12px">
                <a class="btn btn-orange" href="{{ route('equipos.crear') }}">+ Registrar equipo</a>
            </p>
        </div>
    @endif

    <section class="form-card">
        <div class="card-head">
            <h3>📋 Datos del encuentro</h3>
            <p>Completa los datos del partido y su resultado final.</p>
        </div>

        <div class="card-body">
            <form action="{{ route('partidos.store') }}" method="POST" id="matchForm">
                @csrf

                <div class="teams">
                    <div class="team-card">
                        <div class="team-title">
                            <div class="team-icon">🏠</div>
                            <div>
                                <h3>Equipo local</h3>
                                <p>Juega en casa</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="equipo_local_id">Seleccionar equipo *</label>
                            <select id="equipo_local_id" name="equipo_local_id" required>
                                <option value="" disabled {{ old('equipo_local_id') ? '' : 'selected' }}>-- Elige equipo --</option>
                                @foreach($equipos as $equipo)
                                    <option value="{{ $equipo->id }}" {{ old('equipo_local_id') == $equipo->id ? 'selected' : '' }}>
                                        {{ $equipo->nombre }} ({{ $equipo->ciudad }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group" style="margin-bottom:0">
                            <label for="puntos_local">Puntos del local *</label>
                            <input class="score" id="puntos_local" type="number" name="puntos_local"
                                   min="0" step="1" placeholder="0" value="{{ old('puntos_local') }}" required>
                        </div>
                    </div>

                    <div class="team-card">
                        <div class="team-title">
                            <div class="team-icon">✈️</div>
                            <div>
                                <h3>Equipo visitante</h3>
                                <p>Juega fuera de casa</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="equipo_visitante_id">Seleccionar equipo *</label>
                            <select id="equipo_visitante_id" name="equipo_visitante_id" required>
                                <option value="" disabled {{ old('equipo_visitante_id') ? '' : 'selected' }}>-- Elige equipo --</option>
                                @foreach($equipos as $equipo)
                                    <option value="{{ $equipo->id }}" {{ old('equipo_visitante_id') == $equipo->id ? 'selected' : '' }}>
                                        {{ $equipo->nombre }} ({{ $equipo->ciudad }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group" style="margin-bottom:0">
                            <label for="puntos_visitante">Puntos del visitante *</label>
                            <input class="score" id="puntos_visitante" type="number" name="puntos_visitante"
                                   min="0" step="1" placeholder="0" value="{{ old('puntos_visitante') }}" required>
                        </div>
                    </div>
                </div>

                <div class="date-card">
                    <label for="fecha_partido">📅 Fecha del encuentro *</label>
                    <input id="fecha_partido" type="date" name="fecha_partido"
                           value="{{ old('fecha_partido') }}" required>
                    <span class="help">Selecciona el día en que se jugó el partido.</span>
                </div>

                <div id="formWarning" class="alert error" hidden></div>

                <div class="actions">
                    <button type="submit" class="btn btn-orange" id="submitBtn" {{ $equipos->count() < 2 ? 'disabled' : '' }}>
                        💾 Guardar resultado
                    </button>
                    <a href="{{ route('partidos.tabla') }}" class="btn btn-light">🏆 Ver tabla de posiciones</a>
                </div>
            </form>
        </div>
    </section>

    <footer>© {{ date('Y') }} LigaBasketball · Sistema de gestión deportiva</footer>
</main>
</div>

<script>
const localSelect = document.getElementById('equipo_local_id');
const visitorSelect = document.getElementById('equipo_visitante_id');
const form = document.getElementById('matchForm');
const warning = document.getElementById('formWarning');

function updateTeams() {
    const localId = localSelect.value;
    const visitorId = visitorSelect.value;

    [...visitorSelect.options].forEach(option => {
        option.disabled = option.value !== '' && option.value === localId;
    });
    [...localSelect.options].forEach(option => {
        option.disabled = option.value !== '' && option.value === visitorId;
    });
}

localSelect.addEventListener('change', updateTeams);
visitorSelect.addEventListener('change', updateTeams);
updateTeams();

form.addEventListener('submit', function(event) {
    warning.hidden = true;
    warning.textContent = '';

    if (localSelect.value && visitorSelect.value && localSelect.value === visitorSelect.value) {
        event.preventDefault();
        warning.textContent = 'Selecciona dos equipos diferentes para el partido.';
        warning.hidden = false;
    }
});
</script>
</body>
</html>
