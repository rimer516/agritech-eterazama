{{-- LARAVEL 11 — clase 12
    La MISMA vista de siempre... pero la lista ya no viene de un arreglo
    escrito a mano: viene de la base de datos. --}}
@extends('layouts.base')

@section('contenido')
    <h2>Nuestros productos</h2>

    {{-- count() sobre lo que llegó de la BD: cuántas filas hay hoy. --}}
    <p>Hay <strong>{{ count($productos) }}</strong> productos guardados en la base de datos</p>

    <ul>
        {{-- El mismo @foreach de la clase 11. Lo que cambió es de DÓNDE vienen los datos.
            Ojo: ahora cada $producto es un OBJETO, por eso se pide $producto->nombre
            (con flecha) y ya no solo {{ $producto }}. --}}
        @foreach ($productos as $producto)
            <li>{{ $producto->nombre }} — Bs {{ $producto->precio }}</li>
        @endforeach
    </ul>

    <p><a href="/productos/nuevo">+ Agregar un producto</a></p>
@endsection