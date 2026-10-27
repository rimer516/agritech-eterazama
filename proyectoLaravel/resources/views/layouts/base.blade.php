<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Agritech S.R.L. ofrece productos y soluciones agropecuarias en Eterazama, Bolivia.">

    <title>Agritech S.R.L. | Agropecuaria Eterazama</title>

    <style>
        /* =========================================
           VARIABLES DE COLOR Y ESTILOS BASE
           ========================================= */
        :root {
            --bg-color: #f4f7f6;
            --text-color: #333333;
            --primary-color: #2e7d32; /* Verde Agro */
            --primary-hover: #1b5e20;
            --header-bg: #ffffff;
            --footer-bg: #2e7d32;
            --footer-text: #ffffff;
            --border-color: #e0e0e0;
            --shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        /* Modo Oscuro */
        [data-theme="dark"] {
            --bg-color: #121212;
            --text-color: #e0e0e0;
            --primary-color: #4caf50;
            --primary-hover: #66bb6a;
            --header-bg: #1e1e1e;
            --footer-bg: #1b5e20;
            --footer-text: #e0e0e0;
            --border-color: #333333;
            --shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            transition: background-color 0.3s, color 0.3s;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* =========================================
           HEADER (CABECERA)
           ========================================= */
        header {
            background-color: var(--header-bg);
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-brand {
            display: flex;
            flex-direction: column;
        }

        header h1 {
            color: var(--primary-color);
            font-size: 1.5rem;
            line-height: 1.2;
        }

        header p {
            font-size: 0.85rem;
            color: #666;
        }

        [data-theme="dark"] header p {
            color: #aaa;
        }

        /* Botones del header */
        .header-actions {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        header button {
            background: none;
            border: 2px solid var(--border-color);
            color: var(--text-color);
            font-size: 1.2rem;
            padding: 0.5rem;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s;
        }

        header button:hover {
            border-color: var(--primary-color);
            background-color: var(--bg-color);
        }

        /* El botón de menú hamburguesa se oculta en PC */
        #btn-menu {
            display: none;
        }

        /* =========================================
           NAVEGACIÓN
           ========================================= */
        nav ul {
            list-style: none;
            display: flex;
            gap: 1.5rem;
        }

        nav a {
            text-decoration: none;
            color: var(--text-color);
            font-weight: 600;
            font-size: 1rem;
            padding: 0.5rem 0;
            position: relative;
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary-color);
            transition: width 0.3s ease;
        }

        nav a:hover::after,
        nav a:hover {
            color: var(--primary-color);
        }
        
        nav a:hover::after {
            width: 100%;
        }

        /* =========================================
           MAIN (CONTENIDO PRINCIPAL)
           ========================================= */
        main {
            flex: 1;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        /* =========================================
           FOOTER (PIE DE PÁGINA)
           ========================================= */
        footer {
            background-color: var(--footer-bg);
            color: var(--footer-text);
            text-align: center;
            padding: 1.5rem 2rem;
            font-size: 0.9rem;
        }

        footer p {
            margin: 0.3rem 0;
            opacity: 0.9;
        }

        /* =========================================
           RESPONSIVE (DISEÑO PARA CELULARES)
           ========================================= */
        @media (max-width: 768px) {
            header {
                padding: 1rem;
            }

            #btn-menu {
                display: flex; /* Mostrar hamburguesa */
            }

            /* Menú desplegable en móviles */
            nav {
                display: none;
                width: 100%;
                margin-top: 1rem;
            }

            nav.active {
                display: block;
            }

            nav ul {
                flex-direction: column;
                gap: 0;
            }

            nav li {
                border-bottom: 1px solid var(--border-color);
            }

            nav a {
                display: block;
                padding: 1rem 0;
            }
            
            nav a::after {
                display: none; /* Quitar animación de línea en móvil */
            }
        }
    </style>
</head>

<body>

    <header>
        <!-- Agrupamos el título para mejor control -->
        <div class="header-brand">
            <h1>Agritech S.R.L.</h1>
            <p>Soluciones para el sector agropecuario de Eterazama</p>
        </div>

        <!-- Agrupamos los botones -->
        <div class="header-actions">
            <button type="button" id="btn-tema" aria-pressed="false" aria-label="Activar modo oscuro" title="Cambiar tema">
                🌙
            </button>

            <button type="button" id="btn-menu" aria-expanded="false" aria-controls="menu-principal"
                aria-label="Abrir menú de navegación" title="Menú">
                ☰
            </button>
        </div>

        <nav id="menu-principal" aria-label="Menú principal">
            <ul>
                <li><a href="/inicio">Inicio</a></li>
                <li><a href="/productos">Productos</a></li>
                <li><a href="/servicios">Servicios</a></li>
                <li><a href="/nosotros">Nosotros</a></li>
                <li><a href="/contacto">Contacto</a></li>
                <li><a href="/login">Panel</a></li>
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

    <!-- SCRIPT PARA QUE FUNCIONEN LOS BOTONES -->
    <script>
        // Lógica del Modo Oscuro
        const btnTema = document.getElementById('btn-tema');
        const htmlElement = document.documentElement;

        btnTema.addEventListener('click', () => {
            if (htmlElement.getAttribute('data-theme') === 'dark') {
                htmlElement.removeAttribute('data-theme');
                btnTema.textContent = '🌙';
                btnTema.setAttribute('aria-pressed', 'false');
            } else {
                htmlElement.setAttribute('data-theme', 'dark');
                btnTema.textContent = '☀️';
                btnTema.setAttribute('aria-pressed', 'true');
            }
        });

        // Lógica del Menú Hamburguesa
        const btnMenu = document.getElementById('btn-menu');
        const menuPrincipal = document.getElementById('menu-principal');

        btnMenu.addEventListener('click', () => {
            const isExpanded = btnMenu.getAttribute('aria-expanded') === 'true';
            btnMenu.setAttribute('aria-expanded', !isExpanded);
            menuPrincipal.classList.toggle('active');
            
            // Cambiar icono (opcional)
            btnMenu.textContent = isExpanded ? '☰' : '✕';
        });
    </script>

</body>

</html>