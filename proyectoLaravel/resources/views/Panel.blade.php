@extends('layouts.base')

@section('contenido')

<style>
    /* Contenedor principal del Panel */
    .panel-container {
        max-width: 800px;
        margin: 40px auto;
        padding: 0 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Cabecera: Saludo a la izquierda, botón salir a la derecha */
    .panel-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 2px solid #2e7d32;
        padding-bottom: 15px;
        margin-bottom: 25px;
    }

    .panel-header h2 {
        color: #2e7d32;
        margin: 0;
    }

    .panel-header p {
        color: #666;
        margin: 5px 0 0 0;
        font-size: 14px;
    }

    /* Botón de Salir (Logout) */
    .btn-logout {
        background-color: #ffebee;
        color: #c62828;
        border: 1px solid #ffcdd2;
        padding: 8px 16px;
        border-radius: 6px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-logout:hover {
        background-color: #c62828;
        color: white;
    }

    /* Sección de Productos */
    .productos-section {
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        padding: 25px;
        border: 1px solid #e0e0e0;
    }

    .productos-section h3 {
        margin-top: 0;
        color: #333;
        border-bottom: 1px solid #eee;
        padding-bottom: 15px;
    }

    /* Lista de productos */
    .lista-productos {
        list-style: none;
        padding: 0;
        margin: 0 0 20px 0;
    }

    .lista-productos li {
        background: #f8f9fa;
        border-left: 4px solid #2e7d32;
        padding: 15px;
        margin-bottom: 10px;
        border-radius: 4px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: transform 0.2s ease;
    }

    .lista-productos li:hover {
        transform: translateX(5px);
        background: #f1f8e9;
    }

    .producto-nombre {
        font-weight: 600;
        color: #333;
    }

    .producto-precio {
        font-weight: bold;
        color: #2e7d32;
        background: #e8f5e9;
        padding: 5px 10px;
        border-radius: 15px;
        font-size: 14px;
    }

    /* Botón de Agregar Producto */
    .btn-agregar {
        display: inline-block;
        background-color: #2e7d32;
        color: white;
        text-decoration: none;
        padding: 12px 20px;
        border-radius: 6px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .btn-agregar:hover {
        background-color: #1b5e20;
    }
</style>

<div class="panel-container">
    
    {{-- CABECERA DEL PANEL --}}
    <div class="panel-header">
        <div>
            {{-- Uso el email porque en el Seeder no guardamos el name --}}
            <h2>Hola, {{ auth()->user()->email }}</h2>
            <p>Panel de administración de Agritech Eterazama</p>
        </div>

        {{-- Formulario para Salir --}}
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="btn-logout">Salir</button>
        </form>
    </div>

    {{-- SECCIÓN DE PRODUCTOS --}}
    <div class="productos-section">
        <h3>Tus productos ({{ count($productos) }})</h3>

        @if(count($productos) > 0)
            <ul class="lista-productos">
                @foreach ($productos as $producto)
                    <li>
                        <span class="producto-nombre">{{ $producto->nombre }}</span>
                        <span class="producto-precio">Bs {{ $producto->precio }}</span>
                    </li>
                @endforeach
            </ul>
        @else
            <p style="color: #666; font-style: italic;">No tenés productos cargados todavía.</p>
        @endif

        <p style="margin-top: 25px; text-align: right;">
            <a href="/productos/nuevo" class="btn-agregar">+ Agregar un producto</a>
        </p>
    </div>

</div>

@endsection