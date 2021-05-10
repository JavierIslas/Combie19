@extends('Layouts.app')

@section('title', 'Rutas')

@section('content')
	<h1>Aca se podra dar de alta, modificar y consultar la informacion de todos las rutas que maneja la empresa</h1>
	<a href="{{ route('administracionRutas.create') }}">Dar de alta Ruta</a>
	<ul>
		@forelse($rutas as $rutasItem)
			<li><a href="{{ route('administracionRutas.show', $rutasItem) }}"> {{ $rutasItem->origen }} , {{ $rutasItem->destino }} , {{ $rutasItem->combie_id }} , {{ $rutasItem->duracion }} , {{ $rutasItem->distancia }}</a></li>
		@empty
			<li>No hay nada que mostrar</li>
		@endforelse
	</ul>
@endsection