@extends('layouts.base')

@section('title', 'Productos - Agritch Eterazama')

@section('contenido')

    <section>
        <h2>Nuestros productos</h2>
        <p>Conoce algunos de los productos que ofrecemos.</p>
        </br>
        <a href="{{ route('productos.crear') }}">
            <button type="button">Crear nuevo producto</button>
        </a>
    <ul>
        </br>
        @foreach ($productos as $producto)
    <li>
        <strong>{{ $producto->nombre }}</strong>
        - Bs {{ $producto->precio }}
    </li>
@endforeach 
    </ul>

    <form action="{{ route('logout') }}" method="post">
        @csrf

        <button type="submit">Cerrar sesión</button>
    </form>

</section>

@endsection