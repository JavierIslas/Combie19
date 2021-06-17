@extends('layouts.app')

@section('title','Comentario de'. $usuario->name)

@section('content')
@include('partials.session-status')
@if($comentario->user_id == Auth::id())
	<a href="{{route('Comentario.editar', $comentario)}}">Modificar tu reseña</a>
	<br>

	<form method="POST" action="{{route('Comentario.eliminar',$comentario->id)}}">
		@csrf @method('DELETE')
		<button>Eliminar</button>
	</form>
@endif
	<div>
	<p>{{ 'Usuario: '.$usuario -> name}}</p>
	<p>{{ 'Puntaje: '}}
	@for ($i = 0; $i < $comentario->rating; $i++)
					&#9733
	@endfor
	</p>
	<p>{{ 'Opinion: '.$comentario -> descripcion}}</p>
	</div>
@endsection