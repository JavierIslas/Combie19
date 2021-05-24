@extends('Layouts.app')

@section('title', 'Edicion de Locacion')

@section('content')
	<h1>Modificar locacion</h1>
<br>
@include('partials.session-status')
@include('partials.errorVal')
	<form method="POST" action="{{ route('administracionLocaciones.update', $locacion) }}">
	@method('PATCH')
	@include('Locaciones._formularioLocaciones', ['btnText' => 'Modificar Locacion'])
	</form>
@endsection