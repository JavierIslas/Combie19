<?php
use App\Models\User;
use APP\Models\Viaje;
use APP\Models\Pasaje;
 
?>

@extends('layouts.app')

@section('title', 'Pasajeros')

@section('content')
	<h1>Pasajeros del Viaje</h1>
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
	<?php
	$existe = Pasaje::where('estado', '=', 'cancelado' )->first();
	$existe2 = Pasaje::where('estado', '=', 'finalizado' )->first();
    ?>
    @if ($existe == null && $existe2 == null)
	<p>Asientos disponibles {{$viaje->asientos_disponibles}}</p>
	@if($viaje->asientos_disponibles > 0)
	<a href="{{route('administracionCompraChoferes.show', $viaje)}}">Vender Pasaje</a><br>
	@endif
	<a href="{{ route('administracionReportes.edit', $viaje) }}">Terminar Viaje</a> <br>
	<a href="{{ route('administracionPasajerosChofer.show', $viaje) }}">Cancelar viaje</a>
	@endif
@endsection