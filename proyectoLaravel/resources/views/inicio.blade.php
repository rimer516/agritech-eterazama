{{-- Esta página HEREDA el layout: header y footer vienen gratis. --}}
@extends('layouts.base')

@section('contenido')
    <h2>Nuestros productos</h2>
    <p>El mismo catálogo de ayer — pero hoy lo recorre Blade:</p>
    <ul>
        {{-- El foreach de ayer en PHP puro, en su versión Blade: --}}
        @foreach ($productos as $producto)
            <li>{{ $producto }}</li>
        @endforeach
    </ul>
@endsection 