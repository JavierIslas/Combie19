@extends('Layouts.app')

@section('title', 'Edicion de Insumo')

@section('content')
	<h1>Modificar Insumo</h1>
<br>
@include('partials.session-status')
@include('partials.errorVal')
	<form method="POST" action="{{ route('administracionInsumos.update', $insumo) }}">
	@method('PATCH')
	@include('Insumos._formularioInsumos', ['btnText' => 'Modificar Locacion'])
	</form>
@endsection