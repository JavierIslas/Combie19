@extends('Layouts.app')

@section('title', 'Comentar')

@section('content')
	<h1>Dejanos tu opinion sobre Combi-19</h1>
<br>
@include('partials.session-status')
@include('partials.errorVal') 
	<form method="POST" action="{{ route('Comentario.almacenar') }}">
		@csrf

		<label>Mi opinion es: </label>
		<br><textarea name="descripcion"></textarea><br>

		<label>Puntuacion: </label>
		<select  name="rating" value=4>
			<option value="1">1 &#9733</option>
			<option value="2">2 &#9733</option>
			<option value="3">3 &#9733</option>
			<option value="4">4 &#9733</option>
			<option value="5">5 &#9733</option>
		</select><br>

		<input type="hidden" name="user_id" value="{{Auth::id()}}">

        </select>
        <button>Enviar</button>
	</form>
@endsection