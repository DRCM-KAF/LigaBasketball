
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Equipos | LigaBasketball</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <style>
        :root {
            --background: #0b1120;
            --surface: #111b2e;
            --surface-light: #1a2940;
            --orange: #f97316;
            --orange-hover: #ea580c;
            --text: #f8fafc;
            --muted: #94a3b8;
            --border: #263449;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: var(--background);
            color: var(--text);
            font-family: 'Inter', sans-serif;
        }

        .navbar {
            background: #0d1526;
            border-bottom: 1px solid var(--border);
            padding: 17px 0;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
            color: var(--text);
            text-decoration: none;
            font-size: 1.25rem;
            font-weight: 800;
        }

        .brand-icon {
            display: grid;
            place-items: center;
            width: 43px;
            height: 43px;
            background: var(--orange);
            border-radius: 13px;
            font-size: 23px;
        }

        .nav-link {
            color: var(--muted);
            text-decoration: none;
            font-size: .9rem;
            font-weight: 600;
            padding: 10px 13px;
            border-radius: 9px;
            transition: .2s;
        }

        .nav-link:hover,
        .nav-link.active {
            background: var(--surface-light);
            color: white;
        }

        .page {
            max-width: 1200px;
            margin: auto;
            padding: 38px 24px 60px;
        }

        .welcome {
            position: relative;
            overflow: hidden;
            padding: 36px;
            border: 1px solid var(--border);
            border-radius: 20px;
            background: linear-gradient(120deg, #1a2940, #111b2e 75%);
            margin-bottom: 28px;
        }

        .welcome::after {
            content: "🏀";
            position: absolute;
            right: 45px;
            top: 50%;
            transform: translateY(-50%) rotate(-15deg);
            font-size: 105px;
            opacity: .13;
            pointer-events: none;
        }

        .eyebrow {
            color: var(--orange);
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: .75rem;
            font-weight: 800;
        }

        .welcome h1 {
            font-size: clamp(1.8rem, 4vw, 2.7rem);
            font-weight: 800;
            letter-spacing: -1px;
            margin: 12px 0;
        }

        .welcome p {
            color: var(--muted);
            margin: 0;
            max-width: 600px;
            line-height: 1.8;
        }

        .section-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 20px;
        }

        .section-heading h2 {
            font-size: 1.25rem;
            font-weight: 800;
            margin: 0;
        }

        .section-heading p {
            color: var(--muted);
            font-size: .88rem;
            margin: 7px 0 0;
        }

        .btn-action {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            padding: 11px 15px;
            border-radius: 10px;
            border: 1px solid var(--border);
            text-decoration: none;
            font-size: .85rem;
            font-weight: 700;
            transition: .2s;
        }

        .btn-orange {
            background: var(--orange);
            color: white;
            border-color: var(--orange);
        }

        .btn-orange:hover {
            background: var(--orange-hover);
            color: white;
        }

        .btn-secondary-custom {
            background: var(--surface-light);
            color: white;
        }

        .btn-secondary-custom:hover {
            background: #263449;
            color: white;
        }

        .btn-action:hover {
            transform: translateY(-2px);
        }

        .panel {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 17px;
            overflow: hidden;
        }

        .panel-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
            padding: 22px 24px;
            border-bottom: 1px solid var(--border);
        }

        .panel-top h3 {
            font-size: 1rem;
            font-weight: 800;
            margin: 0;
        }

        .count {
            background: #263449;
            color: #cbd5e1;
            border-radius: 20px;
            padding: 6px 11px;
            font-size: .78rem;
            font-weight: 700;
        }

        .table-responsive {
            width: 100%;
        }

        .table {
            --bs-table-bg: transparent;
            --bs-table-color: var(--text);
            --bs-table-border-color: var(--border);
            margin: 0;
            vertical-align: middle;
        }

        .table thead th {
            padding: 17px 22px;
            background: #152238;
            color: var(--muted);
            border-bottom: 1px solid var(--border);
            font-size: .74rem;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
            white-space: nowrap;
        }

        .table tbody td {
            padding: 17px 22px;
            border-bottom: 1px solid var(--border);
        }

        .table tbody tr:last-child td {
            border-bottom: none;
        }

        .table tbody tr:hover td {
            background: #152238;
        }

        .team-id {
            display: inline-grid;
            place-items: center;
            width: 35px;
            height: 35px;
            background: #263449;
            color: #cbd5e1;
            border-radius: 10px;
            font-size: .82rem;
            font-weight: 800;
        }

        .team-logo {
            display: grid;
            place-items: center;
            width: 46px;
            height: 46px;
            border: 1px solid var(--border);
            background: var(--surface-light);
            border-radius: 13px;
            object-fit: cover;
            font-size: 22px;
        }

        .team-name {
            color: white;
            font-weight: 700;
        }

        .city-label {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            color: #cbd5e1;
            font-size: .88rem;
        }

        .empty-state {
            text-align: center;
            padding: 55px 20px !important;
        }

        .empty-icon {
            font-size: 45px;
            margin-bottom: 15px;
        }

        .empty-state h4 {
            font-size: 1.05rem;
            font-weight: 800;
        }

        .empty-state p {
            color: var(--muted);
            margin: 8px 0 20px;
        }

        .alert {
            border-radius: 12px;
            border: none;
            padding: 16px 20px;
        }

        .alert-success {
            background: #12382d;
            color: #bbf7d0;
        }

        .alert-danger {
            background: #451a23;
            color: #fecdd3;
        }

        footer {
            border-top: 1px solid var(--border);
            text-align: center;
            color: var(--muted);
            padding: 25px 15px;
            font-size: .83rem;
        }

        @media (max-width: 768px) {
            .page {
                padding: 24px 14px 40px;
            }

            .welcome {
                padding: 26px 22px;
            }

            .welcome::after {
                right: 12px;
                font-size: 65px;
            }

            .action-buttons {
                display: flex;
                flex-direction: column;
                width: 100%;
            }

            .action-buttons .btn-action {
                width: 100%;
            }

            .panel-top {
                padding: 18px;
            }

            .table thead th,
            .table tbody td {
                padding: 14px;
            }
        }
    </style>
</head>

<body>

<nav class="navbar">
    <div class="container d-flex justify-content-between align-items-center flex-wrap gap-3">
        <a href="{{ url('/') }}" class="brand">
            <span class="brand-icon">🏀</span>
            <span>LigaBasketball</span>
        </a>

        <div class="d-flex flex-wrap gap-2">
            <a href="{{ url('/') }}" class="nav-link">Inicio</a>
            <a href="{{ url('/equipos') }}" class="nav-link active">Equipos</a>
            <a href="{{ url('/jugadores') }}" class="nav-link">Jugadores</a>
            <a href="{{ route('partidos.tabla') }}" class="nav-link">Partidos</a>
        </div>
    </div>
</nav>

<main class="page">

    @if(session('success'))
        <div class="alert alert-success mb-4">
            ✓ {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger mb-4">
            <strong>Revisa los siguientes campos:</strong>
            <ul class="mb-0 mt-2">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="welcome">
        <div class="eyebrow">Gestión de la liga</div>
        <h1>Equipos participantes</h1>
        <p>
            Administra los equipos de baloncesto de la liga,
            consulta sus ciudades y mantén organizada la competición.
        </p>
    </section>

    <section>
        <div class="section-heading">
            <div>
                <h2>Directorio de equipos</h2>
                <p>Consulta los equipos registrados en el sistema.</p>
            </div>

            <div class="d-flex flex-wrap gap-2 action-buttons">
                <a href="{{ route('equipos.crear') }}"
                   class="btn-action btn-orange">
                    ＋ Registrar equipo
                </a>

                <a href="{{ route('jugadores.crear') }}"
                   class="btn-action btn-secondary-custom">
                    🏃 Registrar jugador
                </a>

                <a href="{{ route('partidos.tabla') }}"
                   class="btn-action btn-secondary-custom">
                    📊 Posiciones
                </a>
            </div>
        </div>

        <div class="panel">
            <div class="panel-top">
                <h3>🏆 Equipos de la competición</h3>

                <span class="count">
                    {{ $equipos->count() }}
                    {{ $equipos->count() === 1 ? 'equipo' : 'equipos' }}
                </span>
            </div>

            <div class="table-responsive">
                <table class="table">
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
                                <td>
                                    <span class="team-id">
                                        {{ $equipo->id }}
                                    </span>
                                </td>

                                <td>
                                    @if($equipo->logo)
                                        <img
                                            src="{{ asset($equipo->logo) }}"
                                            alt="Logo de {{ $equipo->nombre }}"
                                            class="team-logo"
                                        >
                                    @else
                                        <div class="team-logo"
                                             title="Sin logo registrado">
                                            🏀
                                        </div>
                                    @endif
                                </td>

                                <td>
                                    <span class="team-name">
                                        {{ $equipo->nombre }}
                                    </span>
                                </td>

                                <td>
                                    <span class="city-label">
                                        📍 {{ $equipo->ciudad ?: 'Sin ciudad' }}
                                    </span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="empty-state">
                                    <div class="empty-icon">🏀</div>
                                    <h4>Aún no hay equipos registrados</h4>
                                    <p>
                                        Registra el primer equipo para comenzar
                                        a organizar tu liga.
                                    </p>

                                    <a href="{{ route('equipos.crear') }}"
                                       class="btn-action btn-orange">
                                        ＋ Registrar primer equipo
                                    </a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</main>

<footer>
    <div>🏀 <strong>LigaBasketball</strong></div>
    <div class="mt-2">
        Sistema de gestión de equipos, jugadores y partidos.
    </div>
    <div class="mt-2">
        © {{ date('Y') }} · Proyecto académico
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
