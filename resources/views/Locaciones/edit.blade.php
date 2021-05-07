@extends('Layout')

@section('title', 'Edicion de Locacion')

@section('content')
	<h1>Editor de locacion</h1>
@include('partials.errorVal')
	<form method="POST" action="{{ route('administracionLocaciones.update', $locacion) }}">
	@method('PATCH')
	@include('Locaciones._formularioLocaciones', ['btnText' => 'Aceptar'])
	</form>
@endsection