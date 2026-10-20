
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Jugadores | LigaBasketball</title>
<style>
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:Arial,sans-serif;background:#f3f5f9;color:#172033}
a{text-decoration:none;color:inherit}
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
.btn{display:inline-block;border:0;cursor:pointer;background:#f97316;color:white;padding:12px 16px;border-radius:9px;font-size:13px;font-weight:bold}
.btn:hover{background:#ea580c}
.secondary{background:white;color:#172033;border:1px solid #e2e8f0}.secondary:hover{background:#e9edf4}
.hero{display:flex;justify-content:space-between;align-items:center;gap:20px;background:linear-gradient(120deg,#172033,#263b5c);color:white;padding:28px;border-radius:16px;margin-bottom:25px}
.kicker{color:#fdba74;font-size:12px;font-weight:bold;letter-spacing:1.5px}
.hero h2{font-size:27px;margin:12px 0}.hero h2 span{color:#fb923c}
.hero p{color:#cbd5e1;font-size:14px;line-height:1.7;max-width:650px}.ball{font-size:65px}
.stats{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:16px;margin-bottom:28px}
.stat{background:white;border:1px solid #e5e7eb;border-radius:13px;padding:20px}
.stat small{color:#64748b;font-size:13px}.number{font-size:27px;font-weight:bold;margin-top:10px}.stat span{display:block;font-size:12px;color:#f97316;margin-top:5px}
.heading{display:flex;justify-content:space-between;align-items:center;gap:15px;flex-wrap:wrap;margin-bottom:20px}
.heading h2{font-size:22px;margin:8px 0}.heading p{color:#64748b;font-size:13px}
.actions{display:flex;gap:8px;flex-wrap:wrap}
.toolbar{display:grid;grid-template-columns:minmax(0,1fr) 220px auto;gap:10px;padding:15px;background:white;border:1px solid #e5e7eb;border-radius:13px;margin-bottom:22px}
input,select{width:100%;min-width:0;padding:12px;border-radius:9px;background:#f8fafc;color:#172033;border:1px solid #dbe2ea;outline:none}
input:focus,select:focus{border-color:#f97316}
.grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:17px}
.card{background:white;border:1px solid #e2e8f0;border-radius:15px;overflow:hidden;transition:.2s}
.card:hover{transform:translateY(-4px);border-color:#fb923c;box-shadow:0 8px 22px #1720330c}
.cover{background:linear-gradient(120deg,#e8edf5,#fff4e9);padding:18px;display:flex;justify-content:space-between;align-items:center;border-bottom:1px solid #e5e7eb}
.avatar{width:57px;height:57px;display:grid;place-items:center;background:#f97316;color:white;border-radius:15px;font-size:25px;font-weight:bold}
.jersey{font-size:44px;font-weight:bold;color:#cbd5e1}
.details{padding:18px}.tag{color:#f97316;font-size:11px;font-weight:bold;letter-spacing:1px}
.details h3{font-size:18px;margin:9px 0 18px;overflow-wrap:anywhere}
.muted{font-size:12px;color:#64748b}
.team{display:inline-block;background:#f1f5f9;border:1px solid #e2e8f0;border-radius:8px;padding:9px;margin-top:7px;font-size:13px;font-weight:bold;overflow-wrap:anywhere}
.footer{display:flex;justify-content:space-between;align-items:center;gap:10px;border-top:1px solid #e5e7eb;padding-top:15px;margin-top:18px}
.position{display:inline-block;background:#fff0e5;color:#c2410c;padding:8px;border-radius:8px;font-size:12px;font-weight:bold;margin-top:6px}
.dorsal{display:inline-block;background:#172033;color:white;border-radius:9px;padding:9px 12px;font-weight:bold;margin-top:6px}
.empty{grid-column:1/-1;text-align:center;padding:40px 20px;background:white;border:1px dashed #cbd5e1;border-radius:15px}
.empty h3{margin:12px 0 8px}.empty p{color:#64748b;margin-bottom:18px}
.alert{padding:14px;border-radius:9px;margin-bottom:18px;font-size:14px}
.success{background:#dcfce7;color:#166534}.error{background:#fee2e2;color:#991b1b}
.alert ul{padding-left:20px;margin-top:8px}
footer{text-align:center;color:#94a3b8;font-size:12px;padding:25px}
[hidden]{display:none!important}
@media(max-width:1100px){.grid{grid-template-columns:repeat(2,minmax(0,1fr))}.toolbar{grid-template-columns:1fr 1fr}.toolbar button{grid-column:1/-1}}
@media(max-width:850px){.layout{grid-template-columns:1fr}.sidebar{position:relative;height:auto;padding:20px}.sub{margin-bottom:15px}.menu-title{margin:15px 0 8px}.nav{display:flex;flex-wrap:wrap;gap:5px}.nav a{margin:0;padding:10px}.side-bottom{display:none}main{padding:20px}}
@media(max-width:550px){main{padding:15px}.hero{padding:22px}.ball{font-size:40px}.hero h2{font-size:23px}.stats,.grid,.toolbar{grid-template-columns:1fr}.toolbar button{grid-column:auto}.top h1{font-size:23px}.actions{width:100%}.actions a{flex:1;text-align:center}}
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
            <small>GESTIÓN / JUGADORES</small>
            <h1>Plantilla de jugadores</h1>
        </div>
        <a class="btn" href="{{ route('jugadores.crear') }}">+ Añadir jugador</a>
    </header>

    @if(session('success'))
        <div class="alert success">✓ {{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert error">
            <strong>Revisa los siguientes campos:</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="hero">
        <div>
            <div class="kicker">PLAYER ZONE / PLANTILLA OFICIAL</div>
            <h2>El talento hace la <span>diferencia.</span></h2>
            <p>Conoce a los protagonistas de la cancha. Busca jugadores y consulta sus equipos, posiciones y dorsales.</p>
        </div>
        <div class="ball">🏀</div>
    </section>

    <section class="stats">
        <article class="stat">
            <small>Jugadores registrados</small>
            <div class="number">{{ $jugadores->count() }}</div>
            <span>Jugadores en la liga</span>
        </article>
        <article class="stat">
            <small>Equipos representados</small>
            <div class="number">{{ $jugadores->pluck('equipo_id')->filter()->unique()->count() }}</div>
            <span>Equipos con jugadores</span>
        </article>
        <article class="stat">
            <small>Posiciones diferentes</small>
            <div class="number">{{ $jugadores->pluck('posicion')->filter()->unique()->count() }}</div>
            <span>Tipos de posición registrados</span>
        </article>
    </section>

    <section class="heading">
        <div>
            <div class="kicker">ROSTER OFICIAL</div>
            <h2>Directorio de jugadores</h2>
            <p>Busca y filtra la plantilla registrada.</p>
        </div>
        <div class="actions">
            <a class="btn secondary" href="{{ route('equipos.index') }}">🏀 Ver equipos</a>
            <a class="btn" href="{{ route('jugadores.crear') }}">+ Registrar jugador</a>
        </div>
    </section>

    <section class="toolbar">
        <input type="search" id="search" placeholder="Buscar jugador o equipo...">
        <select id="filter">
            <option value="">Todas las posiciones</option>
            @foreach($jugadores->pluck('posicion')->filter()->unique()->sort() as $posicion)
                <option value="{{ strtolower($posicion) }}">{{ $posicion }}</option>
            @endforeach
        </select>
        <button class="btn secondary" id="reset" type="button">↺ Limpiar filtros</button>
    </section>

    <section class="grid" id="players">
        @forelse($jugadores as $jugador)
            <article class="card"
                data-search="{{ strtolower($jugador->nombre.' '.($jugador->equipo?->nombre ?? 'Sin equipo').' '.($jugador->posicion ?? '')) }}"
                data-position="{{ strtolower($jugador->posicion ?? '') }}">
                <div class="cover">
                    <div class="avatar">{{ strtoupper(mb_substr($jugador->nombre,0,1,'UTF-8')) }}</div>
                    <div class="jersey">{{ $jugador->numero }}</div>
                </div>
                <div class="details">
                    <div class="tag">JUGADOR #{{ $jugador->id }}</div>
                    <h3>{{ $jugador->nombre }}</h3>
                    <div class="muted">EQUIPO ACTUAL</div>
                    <div class="team">🏀 {{ $jugador->equipo?->nombre ?? 'Sin equipo' }}</div>
                    <div class="footer">
                        <div>
                            <div class="muted">POSICIÓN</div>
                            <span class="position">{{ $jugador->posicion ?: 'Sin posición' }}</span>
                        </div>
                        <div style="text-align:right">
                            <div class="muted">DORSAL</div>
                            <span class="dorsal">{{ $jugador->numero }}</span>
                        </div>
                    </div>
                </div>
            </article>
        @empty
            <div class="empty">
                <div style="font-size:42px">🏀</div>
                <h3>La cancha está esperando</h3>
                <p>Aún no hay jugadores registrados.</p>
                <a class="btn" href="{{ route('jugadores.crear') }}">+ Registrar jugador</a>
            </div>
        @endforelse

        <div class="empty" id="noResults" hidden>
            <div style="font-size:40px">🔎</div>
            <h3>No encontramos jugadores</h3>
            <p>Prueba con otro nombre o posición.</p>
        </div>
    </section>

    <footer>© {{ date('Y') }} LigaBasketball · Cada partido importa.</footer>
</main>
</div>

<script>
const search = document.getElementById('search');
const filter = document.getElementById('filter');
const cards = [...document.querySelectorAll('.card[data-search]')];
const noResults = document.getElementById('noResults');

function applyFilters() {
    const query = search.value.trim().toLowerCase();
    const position = filter.value;
    let count = 0;

    cards.forEach(card => {
        const matches = card.dataset.search.includes(query) &&
            (!position || card.dataset.position === position);
        card.hidden = !matches;
        if (matches) count++;
    });

    noResults.hidden = count > 0 || cards.length === 0;
}

search.addEventListener('input', applyFilters);
filter.addEventListener('change', applyFilters);
document.getElementById('reset').addEventListener('click', () => {
    search.value = '';
    filter.value = '';
    applyFilters();
});
</script>
</body>
</html>
