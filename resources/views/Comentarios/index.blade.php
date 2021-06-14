@extends('layouts.app')

@section('title', 'Comentarios')

@section('content')
	<h1>Estas son las opiniones de nustros Clientes</h1>
	<a href="{{ route('Comentario.nuevo') }}">Dejanos la tuya</a>
	@include('partials.session-status')
	<ul>
		@forelse($comentarios as $comentario)
			<li><a href="{{ route('Comentario.show', $comentario) }}"> 
			@for ($i = 0; $i < $comentario->rating; $i++)
				&#9733
			@endfor
			{{$comentario->descripcion }}
			</a></li>
		@empty
			<li>No hay nada que mostrar</li>
		@endforelse
	</ul>
@endsection