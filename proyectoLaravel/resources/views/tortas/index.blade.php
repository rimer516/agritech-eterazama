@extends('layouts.base1')

@section('title', 'Pasteleria La Espiga')
@section('h1', 'Pasteleria La Espiga')

@section('content')
    <p>La Espiga es una pastelería de barrio donde cada torta se prepara con dedicación para endulzar tus mejores momentos.</p>

    <p>Hay {{ count($tortas) }} tortas en la vitrina.</p>

    <ul>
        @foreach ($tortas as $torta)
            <li>{{ $torta->sabor }} — Bs {{ $torta->precio }}</li>
        @endforeach
    </ul>

    <p>Vitrina atendida por Rimer Cadima Fernandez</p>

    <a href="/tortas/nuevo">Registrar nueva torta</a>
@endsection