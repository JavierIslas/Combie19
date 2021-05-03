@extends('Layout')

@section('title', 'Choferes')

@section('content')
	<h1>Aca se podra dar de alta, modificar y consultar la informacion <br> de todos los choferes de la empresa</h1>
	<a href="{{ route('Choferes.nuevo') }}">Dar de alta nuevo chofer</a>
	<ul>
		@forelse($portfolio as $portfolioItem)
			<li><a href="{{ route('Choferes.show', $portfolioItem) }}">{{ $portfolioItem->last_name }} {{ $portfolioItem->name }}</a></li>
		@empty
			<li>No hay nada que mostrar</li>
		@endforelse
	</ul>
@endsection