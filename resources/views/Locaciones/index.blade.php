@extends('Layout')

@section('title', 'Locaciones')

@section('content')
	<h1>Aca se podra dar de alta, modificar y consultar la informacion <br> de todos las locaciones de maneja la empresa</h1>
	<a href="{{ route('administracionLocaciones.create') }}">Dar de alta Locacion</a>
	<ul>
		@forelse($locaciones as $locacionesItem)
			<li><a href="{{ route('administracionLocaciones.show', $locacionesItem) }}">{{ $locacionesItem->ciudad }} , {{ $locacionesItem->provincia }}</a></li>
		@empty
			<li>No hay nada que mostrar</li>
		@endforelse
	</ul>
@endsection