@extends('layouts.app')

@section('title', 'Informacion Personal')

@section('content')
	<h1>Editor de Informacion Personal</h1>
@include('partials.errorVal')
	<form method="POST" action="{{ route('Usuario.actualizar', $usuario) }}">@method('PATCH')
	@csrf
	<label>Nombre Completo: </label><input type="string" name="name" value="{{old('name', $usuario->name)}}"><br>
	<label>Email: </label><input type="string" name="email" value="{{old('email', $usuario->email)}}"><br>
	<label>Telefono: </label><input type="string" name="phone" value="{{old('phone', $usuario->phone)}}"><br>
	<label>Contraseña: </label><input type="password" name="password" value="{{old('password', $usuario->password)}}"><br>
	<label>Fecha de nacimiento: </label><input type="date" name="birthday" value="{{old('birthday', $usuario->birthday)}}"><br>
	<button>Aceptar</button>)
	</form>
@endsection