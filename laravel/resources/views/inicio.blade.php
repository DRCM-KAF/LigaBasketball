
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inicio | LigaBasketball</title>
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
.top small{color:#64748b}.top h1{font-size:28px;margin:7px 0}
.hero{background:linear-gradient(120deg,#172033,#263b5c);color:white;padding:35px;border-radius:16px;margin-bottom:25px}
.hero small{color:#fdba74;font-size:12px;font-weight:bold;letter-spacing:1.5px}
.hero h2{font-size:30px;margin:14px 0}
.hero p{color:#dbe4f0;font-size:15px;line-height:1.7;max-width:650px}
.btn{display:inline-block;padding:12px 17px;border-radius:9px;font-size:13px;font-weight:bold;text-align:center}
.btn-orange{background:#f97316;color:white}.btn-orange:hover{background:#ea580c}
.cards{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:18px}
.card{background:white;border:1px solid #e2e8f0;border-radius:14px;padding:25px;transition:transform .2s,box-shadow .2s}
.card:hover{transform:translateY(-3px);box-shadow:0 10px 25px #17203312}
.card-icon{font-size:27px;margin-bottom:15px}
.card h3{margin:0 0 9px;font-size:19px}
.card p{color:#64748b;font-size:14px;line-height:1.6;margin:0 0 20px}
.section-title{margin:30px 0 17px;font-size:19px}
footer{text-align:center;color:#94a3b8;font-size:12px;padding:28px}
@media(max-width:850px){.layout{grid-template-columns:1fr}.sidebar{position:relative;height:auto;padding:20px}.sub{margin-bottom:15px}.menu-title{margin:15px 0 8px}.nav{display:flex;flex-wrap:wrap;gap:5px}.nav a{margin:0;padding:10px}.side-bottom{display:none}main{padding:20px}}
@media(max-width:550px){main{padding:15px}.hero{padding:23px}.hero h2{font-size:24px}.cards{grid-template-columns:1fr}}
</style>
</head>
<body>
<div class="layout">
<aside class="sidebar">
    <div class="brand">Liga<span>Basketball</span></div>
    <div class="sub">SISTEMA DE GESTIÓN DEPORTIVA</div>
    <div class="menu-title">Menú principal</div>
    <nav class="nav">
        <a href="{{ route('inicio') }}" class="active">🏠 Inicio</a>
        <a href="{{ route('equipos.index') }}">🏀 Equipos</a>
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
            <small>GESTIÓN DEPORTIVA / INICIO</small>
            <h1>Menú principal</h1>
        </div>
        <a class="btn btn-orange" href="{{ route('partidos.crear') }}">+ Registrar partido</a>
    </header>

    <section class="hero">
        <small>🏆 BIENVENIDO A LIGABASKETBALL</small>
        <h2>Tu liga, tu cancha, tu competencia.</h2>
        <p>Administra los equipos, registra a los jugadores, guarda los resultados y consulta la clasificación de tu liga desde un solo lugar.</p>
        <a class="btn btn-orange" href="{{ route('partidos.tabla') }}">Ver clasificación →</a>
    </section>

    <h2 class="section-title">¿Qué deseas hacer hoy?</h2>

    <section class="cards">
        <article class="card">
            <div class="card-icon">🏀</div>
            <h3>Gestionar equipos</h3>
            <p>Consulta los equipos registrados o añade un nuevo participante a la liga.</p>
            <a class="btn btn-orange" href="{{ route('equipos.index') }}">Entrar a equipos →</a>
        </article>

        <article class="card">
            <div class="card-icon">👥</div>
            <h3>Gestionar jugadores</h3>
            <p>Consulta la lista de jugadores y revisa el equipo al que pertenece cada uno.</p>
            <a class="btn btn-orange" href="{{ route('jugadores.index') }}">Entrar a jugadores →</a>
        </article>

        <article class="card">
            <div class="card-icon">📋</div>
            <h3>Registrar partido</h3>
            <p>Selecciona los equipos, introduce los puntos y guarda la fecha del encuentro.</p>
            <a class="btn btn-orange" href="{{ route('partidos.crear') }}">Registrar resultado →</a>
        </article>

        <article class="card">
            <div class="card-icon">🏆</div>
            <h3>Tabla de posiciones</h3>
            <p>Revisa los partidos jugados, las victorias y las derrotas de cada equipo.</p>
            <a class="btn btn-orange" href="{{ route('partidos.tabla') }}">Ver clasificación →</a>
        </article>
    </section>

    <footer>© {{ date('Y') }} LigaBasketball · Sistema de gestión deportiva</footer>
</main>
</div>
</body>
</html>
