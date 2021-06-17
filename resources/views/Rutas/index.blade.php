<?php
use App\Models\Locacion;
use App\Models\Combi;
?>

@extends('Layouts.app')

@section('title', 'Rutas')

@section('content')
	<h1>Aca se podra dar de alta, modificar y consultar la informacion de todos las rutas que maneja la empresa</h1>
	<a href="{{ route('administracionRutas.create') }}">Dar de alta nueva Ruta</a>
	<ul>
		@forelse($rutas as $rutasItem)
		<?php
		   $origen= Locacion::find($rutasItem->origen);
		   $destino= Locacion::find($rutasItem->destino);
		   $combi= Combi::find($rutasItem->combie_id);
		?>
			<li><a href="{{ route('administracionRutas.show', $rutasItem) }}"> {{ $origen->ciudad .'('.$origen->provincia .')'.' - '.$destino->ciudad .'('.$destino->provincia .')'}} , {{ $combi->model .' (Patente: '.$combi->patente .')' }} , {{ $rutasItem->duracion .' hs'}} , {{ $rutasItem->distancia .' Km'}}</a></li>
		@empty
			<li>No se encuentran rutas registradas en el sistema</li>
		@endforelse
	</ul>
@endsection
