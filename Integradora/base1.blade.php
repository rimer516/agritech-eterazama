<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pasteleria La Espiga')</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #fdf3e7 0%, #f7e0c4 100%);
            color: #4a2c17;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* ---------- HEADER ---------- */
        header {
            background: linear-gradient(120deg, #b5651d 0%, #d98c3f 100%);
            color: #fff8f0;
            padding: 28px 20px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(120, 70, 20, 0.25);
        }

        header h1 {
            font-size: 2rem;
            letter-spacing: 1px;
            font-weight: 700;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        header h1::before {
            content: "🥐 ";
        }

        header h1::after {
            content: " 🍰";
        }

        /* ---------- MAIN ---------- */
        main {
            flex: 1;
            padding: 30px 20px 40px;
        }

        /* ---------- FOOTER ---------- */
        footer {
            background: #4a2c17;
            color: #f4c07a;
            text-align: center;
            padding: 18px 20px;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            border-top: 4px solid #d98c3f;
        }

        footer p {
            margin: 0;
        }

        /* ---------- RESPONSIVE ---------- */
        @media (max-width: 600px) {
            header h1 {
                font-size: 1.4rem;
            }

            main {
                padding: 20px 12px 30px;
            }
        }
    </style>
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