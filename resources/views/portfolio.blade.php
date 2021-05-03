@extends('Layout')

@section('title', 'Choferes')

@section('content')
	<h1>Aca se podra dar de alta, modificar y consultar la informacion <br> de todos los choferes de la empresa</h1>

	<ul>
		@forelse($portfolio as $portfolioItem)
			<li>{{ $portfolioItem->last_name }} {{ $portfolioItem->name }} -- {{ $portfolioItem->phone }}</li>
		@empty
			<li>No hay nada que mostrar</li>
		@endforelse
	</ul>
@endsection