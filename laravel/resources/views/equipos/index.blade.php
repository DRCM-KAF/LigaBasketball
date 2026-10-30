```html
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Equipos | LigaBasketball</title>

<style>
*{box-sizing:border-box;margin:0;padding:0}

body{
    font-family:Arial,sans-serif;
    background:#f3f5f9;
    color:#172033
}

.layout{
    display:grid;
    grid-template-columns:245px minmax(0,1fr);
    min-height:100vh
}

.sidebar{
    background:#111827;
    color:white;
    padding:28px 18px;
    position:sticky;
    top:0;
    height:100vh
}

.brand{font-size:23px;font-weight:bold;margin-bottom:8px}
.brand span{color:#f97316}
.sub{font-size:12px;color:#9ca3af;margin-bottom:35px}

.nav a{
    display:block;
    text-decoration:none;
    color:#cbd5e1;
    padding:13px 14px;
    border-radius:9px;
    margin:5px 0;
    font-size:14px
}

.nav a:hover,.nav a.active{
    background:#f97316;
    color:white
}

.side-bottom{
    position:absolute;
    bottom:25px;
    left:18px;
    right:18px;
    background:#1f2937;
    border-radius:12px;
    padding:15px;
    font-size:13px;
    color:#d1d5db;
    line-height:1.6
}

main{padding:35px;min-width:0}

.top{
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:15px;
    flex-wrap:wrap;
    margin-bottom:28px
}

.top small{color:#64748b}
.top h1{font-size:27px;margin-top:7px}

.btn{
    display:inline-block;
    background:#f97316;
    color:white;
    text-decoration:none;
    padding:12px 16px;
    border-radius:9px;
    font-size:13px;
    font-weight:bold
}

.btn:hover{background:#ea580c}

.hero{
    background:linear-gradient(120deg,#172033,#263b5c);
    color:white;
    padding:28px;
    border-radius:16px;
    margin-bottom:25px
}

.hero small{
    color:#fdba74;
    font-weight:bold;
    letter-spacing:1.5px
}

.hero h2{font-size:25px;margin:12px 0}

.hero p{
    color:#cbd5e1;
    font-size:14px;
    line-height:1.7;
    max-width:650px
}

.actions{
    display:flex;
    gap:10px;
    flex-wrap:wrap;
    margin-bottom:24px
}

.btn-secondary{
    background:white;
    color:#172033;
    border:1px solid #e2e8f0
}

.btn-secondary:hover{background:#e9edf4}

.stats{
    display:grid;
    grid-template-columns:repeat(2,minmax(0,1fr));
    gap:18px;
    margin-bottom:25px
}

.stat,.panel{
    background:white;
    border:1px solid #e5e7eb;
    border-radius:13px
}

.stat{padding:21px}
.stat small{color:#64748b;font-size:13px}
.stat strong{display:block;font-size:27px;margin-top:12px}
.stat span{font-size:12px;color:#f97316}

.panel{overflow:hidden}

.panel-head{
    padding:22px;
    border-bottom:1px solid #e5e7eb;
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:10px;
    flex-wrap:wrap
}

.panel-head h3{font-size:17px}
.panel-head p{font-size:12px;color:#64748b;margin-top:6px}

.count{
    background:#fff0e5;
    color:#c2410c;
    padding:7px 11px;
    border-radius:20px;
    font-size:12px;
    font-weight:bold
}

.scroll{overflow-x:auto}

table{
    width:100%;
    border-collapse:collapse;
    min-width:520px
}

th{
    text-align:left;
    background:#f8fafc;
    color:#64748b;
    font-size:11px;
    letter-spacing:.5px;
    padding:15px;
    text-transform:uppercase
}

td{
    padding:15px;
    border-bottom:1px solid #edf0f4;
    font-size:13px
}

tbody tr:hover{background:#fff7ed}
tbody tr:last-child td{border-bottom:none}

.team-logo{
    width:44px;
    height:44px;
    object-fit:cover;
    border-radius:12px;
    background:#f1f5f9;
    display:grid;
    place-items:center;
    font-size:23px
}

.team-name{font-weight:bold}
.city{color:#64748b;font-size:12px;margin-top:5px}

.empty{
    text-align:center;
    padding:40px 20px!important;
    color:#64748b
}

.alert{
    padding:15px 18px;
    border-radius:10px;
    margin-bottom:18px;
    font-size:14px
}

.success{background:#dcfce7;color:#166534}
.error{background:#fee2e2;color:#991b1b}
.alert ul{padding-left:20px;margin-top:8px}

footer{
    text-align:center;
    color:#94a3b8;
    font-size:12px;
    padding:25px
}

@media(max-width:850px){
    .layout{grid-template-columns:1fr}
    .sidebar{
        position:relative;
        height:auto;
        padding:20px
    }
    .sub{margin-bottom:15px}
    .nav{display:flex;flex-wrap:wrap;gap:5px}
    .nav a{margin:0;padding:10px}
    .side-bottom{display:none}
    main{padding:20px}
}

@media(max-width:550px){
    main{padding:15px}
    .stats{grid-template-columns:1fr}
    .hero{padding:22px}
    .hero h2{font-size:21px}
    .top h1{font-size:23px}
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
            <small>GESTIÓN / EQUIPOS</small>
            <h1>Equipos participantes</h1>
        </div>

        <a class="btn" href="{{ route('equipos.crear') }}">
            + Registrar equipo
        </a>
    </header>

    @if(session('success'))
        <div class="alert success">
            ✓ {{ session('success') }}
        </div>
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
        <small>GESTIÓN DE LA LIGA</small>
        <h2>Organiza a tus equipos.</h2>
        <p>
            Consulta los clubes registrados, revisa sus ciudades
            y mantén organizada la competición de baloncesto.
        </p>
    </section>

    <section class="stats">

        <div class="stat">
            <small>Total de equipos</small>
            <strong>{{ $equipos->count() }}</strong>
            <span>Equipos registrados en la liga</span>
        </div>

        <div class="stat">
            <small>Registro de equipos</small>
            <strong>🏀</strong>
            <span>Administra los participantes de tu competición</span>
        </div>

    </section>

    <div class="actions">
        <a class="btn" href="{{ route('equipos.crear') }}">
            + Nuevo equipo
        </a>

        <a class="btn btn-secondary" href="{{ route('jugadores.crear') }}">
            👥 Registrar jugador
        </a>

        <a class="btn btn-secondary" href="{{ route('partidos.tabla') }}">
            🏆 Ver clasificación
        </a>
    </div>

    <section class="panel">

        <div class="panel-head">
            <div>
                <h3>🏀 Directorio de equipos</h3>
                <p>Listado de los equipos registrados en el sistema</p>
            </div>

            <span class="count">
                {{ $equipos->count() }}
                {{ $equipos->count() === 1 ? 'equipo' : 'equipos' }}
            </span>
        </div>

        <div class="scroll">
            <table>

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Logo</th>
                        <th>Nombre del equipo</th>
                        <th>Ciudad</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($equipos as $equipo)

                    <tr>
                        <td>{{ $equipo->id }}</td>

                        <td>
                            @if($equipo->logo)
                                <img
                                    src="{{ asset($equipo->logo) }}"
                                    alt="Logo de {{ $equipo->nombre }}"
                                    class="team-logo">
                            @else
                                <div class="team-logo">🏀</div>
                            @endif
                        </td>

                        <td>
                            <span class="team-name">
                                {{ $equipo->nombre }}
                            </span>
                        </td>

                        <td>
                            <span class="city">
                                📍 {{ $equipo->ciudad ?: 'Sin ciudad' }}
                            </span>
                        </td>
                    </tr>

                    @empty

                    <tr>
                        <td colspan="4" class="empty">
                            <div style="font-size:38px;margin-bottom:12px">
                                🏀
                            </div>

                            <strong>Aún no hay equipos registrados</strong>

                            <p style="margin:10px 0 18px">
                                Registra el primer equipo para comenzar tu liga.
                            </p>

                            <a class="btn" href="{{ route('equipos.crear') }}">
                                + Registrar primer equipo
                            </a>
                        </td>
                    </tr>

                    @endforelse

                </tbody>
            </table>
        </div>

    </section>

    <footer>
        © {{ date('Y') }} LigaBasketball · Sistema de gestión deportiva
    </footer>

</main>
</div>

</body>
</html>
```