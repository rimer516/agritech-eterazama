<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Pasteleria La Espiga')</title>
</head>
<body>
    <header>
        <h1>@yield('h1', 'Pasteleria La Espiga')</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Integradora - Rimer Cadima Fernandez - 27 de octubre de 2026</p>
    </footer>
</body>
</html>