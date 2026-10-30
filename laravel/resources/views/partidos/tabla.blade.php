
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Clasificación | LigaBasketball</title>

<style>
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:Arial,sans-serif;background:#0b1120;color:#f8fafc}
a{text-decoration:none;color:inherit}
.layout{display:grid;grid-template-columns:245px minmax(0,1fr);min-height:100vh}
.sidebar{background:#111827;color:white;padding:28px 18px;position:sticky;top:0;height:100vh}
.brand{font-size:23px;font-weight:bold;margin-bottom:8px}
.brand span{color:#f97316}
.sub{font-size:12px;color:#9ca3af;margin-bottom:35px}
.nav a{display:block;color:#cbd5e1;padding:13px 14px;border-radius:9px;margin:5px 0;font-size:14px}
.nav a:hover,.nav a.active{background:#f97316;color:white}
.side-bottom{position:absolute;bottom:25px;left:18px;right:18px;background:#1f2937;border-radius:12px;padding:15px;font-size:13px;color:#d1d5db;line-height:1.6}

main{padding:35px;min-width:0}
.top{display:flex;justify-content:space-between;align-items:center;gap:15px;margin-bottom:30px;flex-wrap:wrap}
.top small{color:#94a3b8}
.top h1{font-size:27px;margin-top:7px}
.btn{display:inline-block;background:#f97316;color:white;padding:12px 17px;border-radius:9px;font-size:13px;font-weight:bold}
.btn:hover{background:#ea580c}

.hero{background:linear-gradient(120deg,#172033,#263b5c);color:white;padding:28px;border-radius:16px;margin-bottom:25px}
.hero small{color:#fdba74;font-weight:bold;letter-spacing:1.5px}
.hero h2{font-size:25px;margin:12px 0}
.hero p{color:#cbd5e1;font-size:14px;line-height:1.6}

.stats{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:18px;margin-bottom:25px}
.stat,.panel{background:#111b2e;border:1px solid #263449;border-radius:13px;padding:21px}
.stat small{color:#94a3b8;font-size:13px}
.stat strong{display:block;font-size:27px;margin-top:12px}
.stat span{font-size:12px;color:#f97316}
.panel{padding:0;overflow:hidden}
.panel-head{padding:22px;border-bottom:1px solid #263449;display:flex;justify-content:space-between;align-items:center;gap:10px;flex-wrap:wrap}
.panel-head h3{font-size:17px}
.panel-head p{font-size:12px;color:#94a3b8;margin-top:6px}
.scroll{overflow-x:auto}
table{width:100%;border-collapse:collapse;min-width:620px}
th{text-align:left;background:#18243a;color:#94a3b8;font-size:11px;text-transform:uppercase;letter-spacing:.5px;padding:15px}
td{padding:16px 15px;border-bottom:1px solid #263449;font-size:13px}
tbody tr:hover{background:#18243a}
tbody tr:last-child td{border-bottom:none}
.rank{font-weight:bold;color:#fb923c}
.team{font-weight:bold}
.city{color:#94a3b8;font-size:12px;margin-top:5px}
.points{background:#431f0c;color:#fdba74;padding:7px 10px;border-radius:8px;font-weight:bold}
.empty{text-align:center;padding:35px;color:#94a3b8}
footer{text-align:center;color:#94a3b8;font-size:12px;padding:25px}

@media(max-width:850px){
.layout{grid-template-columns:1fr}
.sidebar{position:relative;height:auto;padding:20px}
.sub{margin-bottom:15px}
.nav{display:flex;flex-wrap:wrap;gap:5px}
.nav a{margin:0;padding:10px}
.side-bottom{display:none}
main{padding:20px}
}
@media(max-width:550px){
.stats{grid-template-columns:1fr}
.top h1{font-size:23px}
.hero h2{font-size:21px}
main{padding:15px}
}
</style>
</head>

<body>
<div class="layout">

<aside class="sidebar">
    <div class="brand">Liga<span>Basketball</span></div>
    <div class="sub">SISTEMA DE GESTIÓN DEPORTIVA</div>

    <nav class="nav">
        <a href="{{ route('inicio') }}">🏠 Inicio</a>
        <a href="{{ route('equipos.index') }}">🏀 Equipos</a>
        <a href="{{ route('jugadores.index') }}">👥 Jugadores</a>
        <a href="{{ route('partidos.crear') }}">📋 Registrar partido</a>
        <a href="{{ route('partidos.tabla') }}" class="active">🏆 Clasificación</a>
    </nav>

    <div class="side-bottom">
        <strong>🏀 LigaBasketball</strong><br>
        Administra tus equipos, jugadores y resultados desde un solo lugar.
    </div>
</aside>

<main>
    <header class="top">
        <div>
            <small>GESTIÓN / CLASIFICACIÓN</small>
            <h1>Tabla de posiciones</h1>
        </div>
        <a class="btn" href="{{ route('partidos.crear') }}">+ Registrar partido</a>
    </header>

    <section class="hero">
        <small>TEMPORADA DE BÁSQUETBOL</small>
        <h2>La competencia se vive aquí.</h2>
        <p>Consulta el rendimiento de los equipos y revisa cómo va la clasificación de la liga.</p>
    </section>

    <section class="stats">
        <div class="stat">
            <small>Equipos participantes</small>
            <strong>{{ count($tabla) }}</strong>
            <span>Equipos en la clasificación</span>
        </div>

        <div class="stat">
            <small>Partidos jugados por equipos</small>
            <strong>{{ collect($tabla)->sum('pj') }}</strong>
            <span>Total de participaciones registradas</span>
        </div>

        <div class="stat">
            <small>Victorias acumuladas</small>
            <strong>{{ collect($tabla)->sum('pg') }}</strong>
            <span>Victorias de todos los equipos</span>
        </div>
    </section>

    <section class="panel">
        <div class="panel-head">
            <div>
                <h3>🏆 Clasificación general</h3>
                <p>Posiciones según los datos registrados en el sistema</p>
            </div>
            <span class="points">{{ count($tabla) }} equipos</span>
        </div>

        <div class="scroll">
            <table>
                <thead>
                    <tr>
                        <th>Pos.</th>
                        <th>Equipo</th>
                        <th>PJ</th>
                        <th>PG</th>
                        <th>PP</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($tabla as $id => $datos)
                    <tr>
                        <td class="rank">#{{ $loop->iteration }}</td>
                        <td>
                            <div class="team">{{ $datos['nombre'] }}</div>
                            <div class="city">📍 {{ $datos['ciudad'] }}</div>
                        </td>
                        <td>{{ $datos['pj'] }}</td>
                        <td><span class="points">{{ $datos['pg'] }}</span></td>
                        <td>{{ $datos['pp'] }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="empty">
                            <div style="font-size:38px;margin-bottom:12px">🏀</div>
                            <strong>Todavía no hay equipos en la clasificación.</strong>
                            <p style="margin:10px 0 18px">Registra equipos y partidos para comenzar.</p>
                            <a class="btn" href="{{ route('partidos.crear') }}">+ Registrar partido</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>

    <footer>© {{ date('Y') }} LigaBasketball · Sistema de gestión de liga</footer>
</main>
</div>
</body>
</html>
