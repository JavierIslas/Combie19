<?php
use App\Models\Locacion;
use App\Models\Ruta;
use App\Models\Combi;
?>
@extends('Layouts.app')

@section('title', 'Viajes')

@section('content')
	<h1>En esta pestaña se podrán dar de alta, modificar y consultar la informacion <br> de los Viajes de la empresa</h1>
	<a href="{{ route('administracionViajes.create') }}">Dar de alta nuevo viaje</a>
	<br>
	@include('partials.session-status')
    <ul>
		@forelse($viajes as $viajeItem)
		<?php
		   $ruta= Ruta::find($viajeItem->ruta_id);
		?>
			<li><a href="{{ route('administracionViajes.show', $viajeItem) }}">{{ $LocacionOrigen = Locacion::find($ruta->origen)->ciudad .'('.$LocacionOrigen = Locacion::find($ruta->origen)->provincia .')'.' - '. $Locaciondestino = Locacion::find($ruta->destino)->ciudad.'('.$Locaciondestino = Locacion::find($ruta->destino)->provincia .')'}}{{ ' -  Fecha: '. $viajeItem->fecha }} </a>
		@empty
			<li>No hay Viajes para mostrar</li>
		@endforelse
	</ul>
@endsection