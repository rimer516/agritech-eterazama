@extends('layouts.base')

@section('title', 'Nuestros Productos - Agritech Eterazama')

@section('contenido')

<style>
    /* Contenedor principal */
    .productos-wrapper {
        max-width: 800px;
        margin: 50px auto;
        padding: 0 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Cabecera de la página */
    .productos-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        border-bottom: 2px solid #2e7d32;
        padding-bottom: 15px;
        margin-bottom: 30px;
    }

    .productos-header h2 {
        color: #2e7d32;
        margin: 0;
        font-size: 28px;
    }

    /* Etiqueta del contador */
    .contador-badge {
        background-color: #e8f5e9;
        color: #2e7d32;
        padding: 8px 15px;
        border-radius: 20px;
        font-weight: bold;
        font-size: 14px;
        border: 1px solid #c8e6c9;
    }

    /* Lista de productos */
    .lista-productos {
        list-style: none;
        padding: 0;
        margin: 0 0 30px 0;
        display: flex;
        flex-direction: column;
        gap: 15px; /* Separación entre tarjetas */
    }

    /* Tarjeta individual de cada producto */
    .producto-card {
        background: #ffffff;
        padding: 20px 25px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        border-left: 5px solid #2e7d32;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .producto-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    .producto-nombre {
        font-size: 18px;
        font-weight: 600;
        color: #333;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    /* Etiqueta del precio */
    .producto-precio {
        font-size: 16px;
        font-weight: bold;
        color: #2e7d32;
        background: #e8f5e9;
        padding: 8px 16px;
        border-radius: 8px;
    }

    /* Botón de agregar producto */
    .acciones-container {
        text-align: right;
    }

    .btn-agregar {
        display: inline-block;
        background-color: #2e7d32;
        color: white;
        text-decoration: none;
        padding: 14px 25px;
        border-radius: 8px;
        font-weight: bold;
        font-size: 16px;
        transition: background-color 0.3s ease, transform 0.2s ease;
        box-shadow: 0 4px 10px rgba(46, 125, 50, 0.3);
    }

    .btn-agregar:hover {
        background-color: #1b5e20;
        transform: translateY(-2px);
    }

    /* Estado vacío (si no hay productos) */
    .empty-state {
        text-align: center;
        padding: 40px;
        background: #fff;
        border-radius: 10px;
        color: #666;
        font-style: italic;
        border: 1px dashed #ccc;
    }
</style>

<div class="productos-wrapper">
    
    {{-- Cabecera --}}
    <div class="productos-header">
        <h2>Nuestros productos</h2>
        <span class="contador-badge">
            {{ count($productos) }} registrados
        </span>
    </div>

    {{-- Lista de productos --}}
    @if(count($productos) > 0)
        <ul class="lista-productos">
            @foreach ($productos as $producto)
                <li class="producto-card">
                    <span class="producto-nombre">
                        🌱 {{ $producto->nombre }}
                    </span>
                    <span class="producto-precio">
                        Bs {{ $producto->precio }}
                    </span>
                </li>
            @endforeach
        </ul>
    @else
        <div class="empty-state">
            No hay productos en la base de datos todavía.
        </div>
    @endif

    {{-- Botón para agregar --}}
    <div class="acciones-container">
        <a href="/productos/nuevo" class="btn-agregar">+ Agregar un producto</a>
    </div>

</div>

@endsection