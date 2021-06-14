@extends('layouts.app')

@section('title', 'Modificar de Combi')

@section('content')
	<h1>Cual es tu nueva opinion</h1>
<br>
@include('partials.session-status')
@include('partials.errorVal')
	<form method="POST" action="{{ route('Comentario.actualizar', $comentario) }}">
		@csrf @method('PATCH')
		<label>Mi opinion es: </label>
		<br><textarea name="descripcion" value="{{old('descripcion', $comentario->descripcion)}}"></textarea><br>

		<label>Puntuacion: </label>
		<select  name="rating" value="{{old('rating', $comentario->rating)}}">
			<option value="1">1 &#9733</option>
			<option value="2">2 &#9733</option>
			<option value="3">3 &#9733</option>
			<option value="4">4 &#9733</option>
			<option value="5">5 &#9733</option>
		</select><br>

		<input type="hidden" name="user_id" value="{{Auth::id()}}">
		<button>Modificar</button>
	</form>
@endsection