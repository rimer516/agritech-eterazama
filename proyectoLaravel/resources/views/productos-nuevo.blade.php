@extends('layouts.base')

@section('contenido')
    <h2>Agregar un producto</h2>

    {{-- action = a dónde se manda. method="POST" = va escondido en el sobre, no en la URL --}}
    <form action="/productos/nuevo" method="POST">

        {{-- La firma de seguridad que Laravel exige en TODO formulario — el jueves la vemos... --}}
        @csrf

        <p>
            <label for="nombre">Nombre del producto:</label><br>
            {{-- El name="nombre" es el rótulo del dato: así lo pide el servidor del otro lado.
                 El required es el mismo del parcial: el navegador no deja mandar vacío. --}}
            <input type="text" id="nombre" name="nombre" required>
        </p>

        <p>
            <label for="precio">Precio en Bs:</label><br>
            <input type="number" id="precio" name="precio" required>
        </p>

        <p><button type="submit">Guardar producto</button></p>
    </form>

    <p><a href="/productos">&larr; Volver a la lista</a></p>
@endsection