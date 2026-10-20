
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LigaBasketball') | LigaBasketball</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <style>
        :root {
            --bg: #0b1120;
            --panel: #111b2e;
            --panel-light: #18243a;
            --primary: #f97316;
            --primary-hover: #ea580c;
            --text: #f8fafc;
            --muted: #94a3b8;
            --border: #263449;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
        }

        .navbar {
            background: rgba(11, 17, 32, .96);
            border-bottom: 1px solid var(--border);
            padding: 18px 0;
        }

        .navbar-brand {
            color: white !important;
            font-size: 1.25rem;
            font-weight: 800;
            letter-spacing: -.5px;
        }

        .brand-ball {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 42px;
            height: 42px;
            background: var(--primary);
            border-radius: 13px;
            margin-right: 10px;
            font-size: 23px;
        }

        .nav-link {
            color: var(--muted) !important;
            font-size: .9rem;
            font-weight: 600;
            padding: 10px 14px !important;
            border-radius: 9px;
            transition: .2s;
        }

        .nav-link:hover,
        .nav-link.active {
            background: var(--panel-light);
            color: white !important;
        }

        .main-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 24px;
        }

        .hero {
            position: relative;
            overflow: hidden;
            padding: 42px;
            border: 1px solid var(--border);
            border-radius: 22px;
            background: linear-gradient(120deg, #18243a, #101827 70%);
            margin-bottom: 30px;
        }

        .hero::after {
            content: "🏀";
            position: absolute;
            right: 45px;
            top: 50%;
            transform: translateY(-50%) rotate(-15deg);
            font-size: 115px;
            opacity: .15;
            pointer-events: none;
        }

        .eyebrow {
            color: var(--primary);
            text-transform: uppercase;
            font-size: .76rem;
            letter-spacing: 2px;
            font-weight: 800;
        }

        .hero h1 {
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: 800;
            letter-spacing: -1.5px;
            margin: 12px 0;
        }

        .hero p {
            color: var(--muted);
            max-width: 600px;
            line-height: 1.8;
        }

        .section-title {
            font-size: 1.25rem;
            font-weight: 800;
            margin-bottom: 18px;
        }

        .stat-card,
        .content-card {
            background: var(--panel);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 24px;
            height: 100%;
            transition: transform .2s, border-color .2s;
        }

        .stat-card:hover,
        .content-card:hover {
            transform: translateY(-3px);
            border-color: #475569;
        }

        .stat-label {
            color: var(--muted);
            font-size: .85rem;
            font-weight: 600;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 800;
            margin-top: 12px;
        }

        .stat-icon {
            font-size: 1.5rem;
            margin-bottom: 14px;
        }

        .btn-primary {
            background: var(--primary);
            border-color: var(--primary);
            color: white;
            font-weight: 700;
            padding: 11px 18px;
            border-radius: 10px;
        }

        .btn-primary:hover {
            background: var(--primary-hover);
            border-color: var(--primary-hover);
        }

        .btn-outline-light {
            border-color: var(--border);
            color: var(--text);
            border-radius: 10px;
        }

        .form-control,
        .form-select {
            background-color: #0b1120;
            border-color: var(--border);
            color: var(--text);
            border-radius: 9px;
            padding: 11px 14px;
        }

        .form-control:focus,
        .form-select:focus {
            background-color: #0b1120;
            border-color: var(--primary);
            color: white;
            box-shadow: 0 0 0 .2rem rgba(249, 115, 22, .15);
        }

        .form-control::placeholder {
            color: #64748b;
        }

        .table {
            --bs-table-bg: transparent;
            --bs-table-color: var(--text);
            --bs-table-border-color: var(--border);
            vertical-align: middle;
        }

        .table thead th {
            color: var(--muted);
            font-size: .78rem;
            text-transform: uppercase;
            letter-spacing: .7px;
            padding: 16px;
        }

        .table tbody td {
            padding: 16px;
        }

        .alert {
            border-radius: 12px;
        }

        footer {
            border-top: 1px solid var(--border);
            color: var(--muted);
            padding: 25px;
            text-align: center;
            margin-top: 45px;
            font-size: .85rem;
        }

        @media (max-width: 768px) {
            .hero {
                padding: 28px 22px;
            }

            .hero::after {
                right: 12px;
                font-size: 75px;
            }

            .main-container {
                padding: 25px 16px;
            }
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <span class="brand-ball">🏀</span>
            LigaBasketball
        </a>

        <button class="navbar-toggler btn btn-outline-light"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar"
                aria-controls="mainNavbar"
                aria-expanded="false"
                aria-label="Abrir navegación">
            ☰
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/equipos') }}">Equipos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/jugadores') }}">Jugadores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/partidos/tabla') }}">Partidos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="main-container">
    @if(session('success'))
        <div class="alert alert-success mb-4">
            {{ session('success') }}
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

    @yield('content')
</main>

<footer>
    <div>🏀 <strong>LigaBasketball</strong></div>
    <div class="mt-2">
        Sistema de gestión de equipos, jugadores y partidos.
    </div>
    <div class="mt-2">© {{ date('Y') }} · Proyecto académico</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
