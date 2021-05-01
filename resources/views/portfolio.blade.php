@extends('Layout')

@section('title', 'Portfolio')

@section('content')
	<h1>Anda a saber</h1>

	<ul>
		@forelse($portfolio as $portfolioItem)
			<li>{{ $portfolioItem['title'] }}</li>
		@empty
			<li>No hay nada que mostrar</li>
		@endforelse
	</ul>
@endsection