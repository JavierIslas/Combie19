@extends('Layout')

@section('title', 'Alta de Ruta')

@section('content')
	<h1>Sistema de alta de nueva Ruta </h1>
@include('partials.errorVal')
	<form method="POST" action="{{ route('administracionRutas.store') }}">
	@include('Rutas._formularioRutas', ['btnText' => 'Dar de Alta'])
	</form>
@endsection