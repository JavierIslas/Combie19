@extends('Layouts.app')

@section('title', 'Edicion de Ruta')

@section('content')
	<h1>Editor de Ruta</h1>
		@include('partials.errorVal')
	<form method="POST" action="{{ route('administracionRutas.update', $ruta) }}">
		@method('PATCH')
		@include('Rutas._formularioRutas', ['btnText' => 'Aceptar'])

		<button>Dar de Alta</button>
	</form>
@endsection