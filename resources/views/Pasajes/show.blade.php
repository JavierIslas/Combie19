@extends('layouts.app')

@section('title', 'Cobro')

@section('content')
	<h1>Reglas de Cancelacion</h1>
	<p>
		Recuerde que si usted cancela su pasaje 48 horas (o mas) antes del viaje, el reintegro, sera del 100%.
		Si usted lo cancela al menos con 24 horas de anticipacion el reintegro sera solo del 50%
	</p>
	<form method="POST" action="{{ route('Pasajes.actualizar', $pasaje->id) }}">@method('PATCH')
		@csrf
		<button>CANCELAR</button>
	</form>
@endsection