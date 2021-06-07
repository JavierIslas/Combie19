@extends('Layouts.app')

@section('title','Viajes')

@section('content')
<a href="{{route('administracionViajes.edit', $viaje)}}">Modificar Viaje</a>
<br>
@include('partials.session-status')
<form method="POST" action="{{route('administracionViajes.destroy',$viaje)}}">
	@csrf @method('DELETE')
	<button>Eliminar</button>

<?php
use App\Models\Locacion;
$origen= Locacion::find($ruta->origen);
$destino=Locacion::find($ruta->destino);
?>

</form>
<div>
<p>{{ 'Fecha: '.$viaje -> fecha}}</p>
<p>{{ 'Hora de Salida: '.$viaje -> horario_Salida}}</p>
<p>{{ 'Hora de Llegada: '.$viaje -> horario_Llegada}}</p>
<p>{{ 'Origen: '.$origen -> ciudad .' ('.$origen->provincia.')'}}</p>
<p>{{ 'Destino: '.$destino -> ciudad.' ('.$destino->provincia.')'}}</p>
<p>{{ 'Precio:  $'.$viaje -> precio}}</p>
<p>{{ 'Asientos disponibles: '.$viaje -> asientos_disponibles}}</p>
<p>{{ 'Dada de alta el: '.$viaje -> created_at}}</p>
<p>{{ 'Ultima actualizacion: '.$viaje -> updated_at}}</p>
</div>
@endsection