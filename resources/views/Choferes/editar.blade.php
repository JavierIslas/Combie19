@extends('layouts.app')

@section('title', 'Edicion de Chofer')

@section('content')
	<h1>Editor de conductor</h1>
@include('partials.errorVal')
	<form method="POST" action="{{ route('Choferes.actualizar', $chofer) }}">@method('PATCH')
	@include('Choferes.formularioChofer', ['btnText' => 'Aceptar'])
	</form>
@endsection