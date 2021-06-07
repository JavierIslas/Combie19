@extends('Layouts.app')

@section('title', 'Alta de Insumos')

@section('content')
	<h1>Sistema de alta de Insumos </h1>
<br>
@include('partials.session-status')
@include('partials.errorVal')
	<form method="POST" action="{{ route('administracionInsumos.store') }}">
	@include('Insumos._formularioInsumos', ['btnText' => 'Dar de Alta'])
	</form>
@endsection