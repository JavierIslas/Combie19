@extends('Layout')

@section('title', 'Combis')

@section('content')
	<h1>En esta pestaña se podrán dar de alta, modificar y consultar la informacion <br> de las combis de la empresa</h1>
	<a href="{{ route('administracionCombis.create') }}">Dar de alta nueva combi</a>
    <ul>
		@forelse($combis as $combiItem)
			<li><a href="{{ route('administracionCombis.show', $combiItem) }}">{{ $combiItem->model }} {{ $combiItem->patente }}</a>
		@empty
			<li>No hay combis para mostrar</li>
		@endforelse
	</ul>
@endsection