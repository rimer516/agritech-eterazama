@extends('layouts.base1')

@section('title', 'Pasteleria La Espiga')
@section('h1', 'Pasteleria La Espiga')

@section('content')
    <style>
        .espiga-form-contenedor {
            max-width: 480px;
            margin: 30px auto;
            padding: 25px 30px;
            background: #fff8f0;
            border-radius: 14px;
            box-shadow: 0 4px 14px rgba(120, 70, 20, 0.15);
            font-family: 'Segoe UI', Tahoma, sans-serif;
            color: #4a2c17;
        }

        .espiga-errores {
            background: #fdecea;
            border-left: 5px solid #d9534f;
            color: #a94442;
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 0.95rem;
        }

        .espiga-errores ul {
            margin: 0;
            padding-left: 20px;
        }

        .espiga-errores li {
            margin: 4px 0;
        }

        .espiga-campo {
            margin-bottom: 18px;
        }

        .espiga-campo label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
            color: #6b4a2f;
        }

        .espiga-campo input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #d9b48c;
            border-radius: 8px;
            background: #ffffff;
            font-size: 1rem;
            color: #4a2c17;
            box-sizing: border-box;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .espiga-campo input:focus {
            outline: none;
            border-color: #b5651d;
            box-shadow: 0 0 0 3px rgba(181, 101, 29, 0.2);
        }

        .espiga-error-campo {
            color: #a94442;
            font-size: 0.88rem;
            margin-top: 6px;
        }

        .espiga-boton {
            display: inline-block;
            width: 100%;
            background: #b5651d;
            color: #ffffff;
            padding: 12px 22px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.2s ease;
            margin-top: 6px;
        }

        .espiga-boton:hover {
            background: #8e4d14;
        }

        .espiga-volver {
            display: inline-block;
            margin-top: 16px;
            color: #8e4d14;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .espiga-volver:hover {
            text-decoration: underline;
        }
    </style>

    <div class="espiga-form-contenedor">

        @if ($errors->any())
            <div class="espiga-errores">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/tortas/nuevo" method="POST">
            @csrf

            <div class="espiga-campo">
                <label for="sabor">Sabor de la torta:</label>
                <input type="text" id="sabor" name="sabor" value="{{ old('sabor') }}">
            </div>

            <div class="espiga-campo">
                <label for="precio">Precio en Bs:</label>
                <input type="number" id="precio" name="precio" value="{{ old('precio') }}">
            </div>

            <div class="espiga-campo">
                <label for="stock">Stock:</label>
                <input
                    type="number"
                    id="stock"
                    name="stock"
                    value="{{ old('stock', 0) }}"
                    min="0"
                    required
                >
                @error('stock')
                    <div class="espiga-error-campo">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="espiga-boton">Registrar torta</button>
        </form>

        <a href="/tortas" class="espiga-volver">← Volver a la vitrina</a>
    </div>
@endsection