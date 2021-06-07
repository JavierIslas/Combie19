
@extends('Layouts.app')

@section('title', 'Insumos')

@section('content')
	<h1>En esta pestaña se podrán dar de alta, modificar y consultar la informacion sobre <br> Insumos ofrecidos</h1>
	<a href="{{ route('administracionInsumos.create') }}">Dar de alta nuevo Insumo</a>
	<br>
	@include('partials.session-status')
    <ul>
		@forelse($insumos as $insumoItem)
			<li><a href="{{ route('administracionInsumos.show', $insumoItem) }}">{{ $insumoItem->nombre}}</a>
		@empty
			<li>No hay Insumos para mostrar</li>
		@endforelse
	</ul>
@endsection