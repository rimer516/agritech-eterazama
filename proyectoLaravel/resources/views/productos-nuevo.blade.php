@extends('layouts.base')

@section('title', 'Agregar Producto - Agritech Eterazama')

@section('contenido')

<style>
    /* Contenedor principal */
    .form-wrapper {
        max-width: 500px;
        margin: 50px auto;
        padding: 0 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Tarjeta del formulario */
    .form-card {
        background: #ffffff;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        border-top: 6px solid #2e7d32; /* Verde Agritech */
    }

    .form-card h2 {
        color: #2e7d32;
        margin-top: 0;
        margin-bottom: 30px;
        font-size: 24px;
        text-align: center;
    }

    /* Grupos de inputs */
    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: #333;
        font-weight: 600;
        font-size: 14px;
    }

    .form-group input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 15px;
        box-sizing: border-box; /* Para que el padding no rompa el ancho */
        transition: all 0.3s ease;
        font-family: inherit;
    }

    .form-group input:focus {
        outline: none;
        border-color: #2e7d32;
        box-shadow: 0 0 8px rgba(46, 125, 50, 0.3);
    }

    /* Botón de Guardar */
    .btn-guardar {
        width: 100%;
        padding: 14px;
        background-color: #2e7d32;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
        margin-top: 10px;
    }

    .btn-guardar:hover {
        background-color: #1b5e20;
        transform: translateY(-2px);
    }

    /* Enlace para volver */
    .link-volver {
        display: block;
        text-align: center;
        margin-top: 25px;
        color: #666;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
        transition: color 0.3s ease;
    }

    .link-volver:hover {
        color: #2e7d32;
        text-decoration: underline;
    }
</style>

<div class="form-wrapper">
    <div class="form-card">
        
        <h2>📦 Agregar un producto</h2>

        {{-- action = a dónde se manda. method="POST" = va escondido en el sobre, no en la URL --}}
        <form action="/productos/nuevo" method="POST">
            
            {{-- La firma de seguridad que Laravel exige en TODO formulario --}}
            @csrf

            <div class="form-group">
                <label for="nombre">Nombre del producto:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ej. Abono orgánico" required>
            </div>

            <div class="form-group">
                <label for="precio">Precio en Bs:</label>
                <input type="number" step="0.01" id="precio" name="precio" placeholder="Ej. 450.50" required>
            </div>

            <button type="submit" class="btn-guardar">Guardar producto</button>
        </form>

        <a href="/productos" class="link-volver">&larr; Volver a la lista de productos</a>

    </div>
</div>

@endsection