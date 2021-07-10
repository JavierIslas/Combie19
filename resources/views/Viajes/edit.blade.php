<?php
use App\Models\Locacion;
?>
@extends('Layouts.app')

@section('title', 'Modificar de Viaje')

@section('content')
	<h1>Sistema para modificar Viaje</h1>
<br>
@include('partials.session-status')
	<form method="POST" action="{{ route('administracionViajes.update', $viaje) }}">
		@csrf @method('PATCH')
		@include('Viajes._formularioViajes', ['btnText' => 'Modificar Viaje'])
	</form>
@endsection

