<?php
use App\Models\User;
use APP\Models\Viaje;
 
?>

@extends('layouts.app')

@section('title', 'Pasajeros')

@section('content')
	<h1>Pasajeros del Viaje</h1>
	<p>Asientos disponibles {{$viaje->asientos_disponibles}}</p>
	@if($viaje->asientos_disponibles > 0)
	<a href="">Vender Pasaje</a>
	@endif
	<ul>
		@forelse($pasajeros as $pasaje)
		<?php
		   $usuario=User::find($pasaje->usuario_id);

		?>
			@if($viaje->id == $pasaje->viaje_id)
                <li> 
                {{ $usuario->name }} -  {{ $pasaje->estado }}
                @if ($pasaje->estado == "reservado") 
                    <a href="{{ route('administracionPasajerosChofer.edit', $pasaje) }}">Realizar Control</a>
                    <a href="{{ route('administracionViajesChofer.edit', $pasaje) }}">Ausente</a>
                @endif  
            @endif 
                </li>         		
		@empty
			<li>No hay pasajes comprados</li>
		@endforelse
	</ul>
	<a href="">Terminar Viaje</a>
@endsection