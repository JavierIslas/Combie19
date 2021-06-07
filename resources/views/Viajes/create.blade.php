@extends('Layouts.app')

@section('title', 'Alta de Viaje')

@section('content')
	<h1>Sistema de alta Viaje </h1>
<br>
@include('partials.session-status')
@include('partials.errorVal')
	<form method="POST" action="{{ route('administracionViajes.store') }}">
	@include('Viajes._formularioViajes', ['btnText' => 'Dar de Alta'])
	</form>
@endsection
