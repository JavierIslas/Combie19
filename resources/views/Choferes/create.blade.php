@extends('Layout')

@section('title', 'Alta de Chofer')

@section('content')
	<h1>Sistema de alta de nuevo conductor</h1>

	<form method="POST" action="{{ route('Choferes.almacenar') }}">
		@csrf
		<label>Apellido: </label><input type="string" name="last_name"><br>
		<label>Nombre: </label><input type="string" name="name"><br>
		<label>Email: </label><input type="string" name="email"><br>
		<label>Telefono: </label><input type="string" name="phone"><br>
		<label>Contraseña: </label><input type="string" name="password"><br>
		<label>Fecha de nacimiento: </label><input type="date" name="birthday"><br>
		<label>Informacion extra: </label><textarea name="extra"> </textarea><br>
		<button>Dar de Alta</button>
	</form>
@endsection