<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Agritech S.R.L. ofrece productos y soluciones agropecuarias en Eterazama, Bolivia.">

    <title>Agritech S.R.L. | Agropecuaria Eterazama</title>

   
</head>

<body>

    <header>
        <h1>Agritech S.R.L.</h1>
        <p>Soluciones para el sector agropecuario de Eterazama</p>

        <button type="button" id="btn-tema" aria-pressed="false" aria-label="Activar modo oscuro">
            🌙
        </button>

        <button type="button" id="btn-menu" aria-expanded="false" aria-controls="menu-principal"
            aria-label="Abrir menú de navegación">
            ☰
        </button>

        <nav id="menu-principal" aria-label="Menú principal">
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#productos">Productos</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
          {{-- Acá se "enchufa" el contenido de cada página: --}}
        @yield('contenido')
    </main>

    <footer>
        <p>&copy; 2026 Agritech S.R.L. - Eterazama, Bolivia.</p>
        <p>Sitio web desarrollado como proyecto académico.</p>
    </footer>

</body>

</html>