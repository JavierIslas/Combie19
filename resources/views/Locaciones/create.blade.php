@extends('Layouts.app')

@section('title', 'Alta de Locacion')

@section('content')
	<h1>Sistema de alta de nueva Locacion </h1>
@include('partials.errorVal')
	<form method="POST" action="{{ route('administracionLocaciones.store') }}">
	@include('Locaciones._formularioLocaciones', ['btnText' => 'Dar de Alta'])
	</form>
@endsection