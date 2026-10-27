{{-- CANDADO Y PUBLICACIÓN — clase 13
     La primera página PRIVADA del curso. Nadie llega acá sin haber pasado por /login:
     el candado no está en esta vista, está en la ruta. --}}
@extends('layouts.base')

@section('contenido')
    {{-- auth()->user() es "quién está adentro ahora mismo". Es el objeto User
         que salió de la tabla users, así que se le piden sus columnas con flecha. --}}
    <h2>Hola, {{ auth()->user()->name }}</h2>

    <p>Entraste con <strong>{{ auth()->user()->email }}</strong>. Esta página no existe para quien no tenga la llave.</p>

    <h3>Tus productos ({{ count($productos) }})</h3>

    <ul>
        {{-- El mismo @foreach de /productos. La diferencia no está en la lista:
             está en quién puede verla y quién puede agregar. --}}
        @foreach ($productos as $producto)
            <li>{{ $producto->nombre }} — Bs {{ $producto->precio }}</li>
        @endforeach
    </ul>

    <p><a href="/productos/nuevo">+ Agregar un producto</a></p>

    {{-- Salir es un formulario, no un enlace: mandar datos que CAMBIAN algo
         siempre va por POST, y todo POST lleva su firma. --}}
    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Salir</button>
    </form>
@endsection