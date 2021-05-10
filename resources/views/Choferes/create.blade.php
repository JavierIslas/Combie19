@extends('layouts.app')

@section('title', 'Alta de Chofer')

@section('content')
	<h1>Sistema de alta de nuevo conductor</h1>
@include('partials.errorVal')
	<form method="POST" action="{{ route('Choferes.almacenar') }}">
	@include('Choferes.formularioChofer', ['btnText' => 'Dar de Alta'])
	</form>
@endsection