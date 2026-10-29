@extends('layouts.base1')

@section('title', 'Pasteleria La Espiga')
@section('h1', 'Pasteleria La Espiga')

@section('content')
    <style>
        .espiga-contenedor {
            max-width: 700px;
            margin: 30px auto;
            padding: 25px 30px;
            background: #fff8f0;
            border-radius: 14px;
            box-shadow: 0 4px 14px rgba(120, 70, 20, 0.15);
            font-family: 'Segoe UI', Tahoma, sans-serif;
            color: #4a2c17;
        }

        .espiga-intro {
            font-size: 1rem;
            line-height: 1.5;
            color: #6b4a2f;
            margin-bottom: 18px;
            font-style: italic;
        }

        .espiga-contador {
            display: inline-block;
            background: #f4c07a;
            color: #4a2c17;
            padding: 6px 14px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.95rem;
            margin-bottom: 18px;
        }

        .espiga-lista {
            list-style: none;
            padding: 0;
            margin: 0 0 20px 0;
        }

        .espiga-lista li {
            background: #ffffff;
            border-left: 5px solid #d98c3f;
            padding: 12px 16px;
            margin-bottom: 10px;
            border-radius: 8px;
            font-size: 1.05rem;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        }

        .espiga-lista li strong {
            color: #b5651d;
        }

        .espiga-stock {
            display: inline-block;
            margin-top: 6px;
            background: #f4c07a;
            color: #4a2c17;
            padding: 3px 12px;
            border-radius: 14px;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .espiga-firma {
            font-size: 0.9rem;
            color: #8a6a4f;
            margin: 20px 0 10px 0;
            padding-top: 12px;
            border-top: 1px dashed #d9b48c;
        }

        .espiga-boton {
            display: inline-block;
            background: #b5651d;
            color: #ffffff;
            padding: 10px 22px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.2s ease;
        }

        .espiga-boton:hover {
            background: #8e4d14;
        }
    </style>

    <div class="espiga-contenedor">
        <p class="espiga-intro">
            La Espiga es una pastelería de barrio donde cada torta se prepara con dedicación
            para endulzar tus mejores momentos.
        </p>

        <p class="espiga-contador">
            Hay {{ count($tortas) }} tortas en la vitrina.
        </p>

        <ul class="espiga-lista">
            @foreach ($tortas as $torta)
                <li>
                    <strong>{{ $torta->sabor }}</strong> — Bs {{ $torta->precio }}
                    <br>
                    <span class="espiga-stock">Stock: {{ $torta->stock }}</span>
                </li>
            @endforeach
        </ul>

        <p class="espiga-firma">
            Vitrina atendida por Rimer Cadima Fernandez
        </p>

        <a href="/tortas/nuevo" class="espiga-boton">Registrar nueva torta</a>
    </div>
@endsection