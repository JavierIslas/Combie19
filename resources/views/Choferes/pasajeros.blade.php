<?php
use App\Models\User;
use APP\Models\Viaje;
<<<<<<< HEAD
use APP\Models\Pasaje;
=======
>>>>>>> 98af882fdb292ac0864eea7d3bc72551cd5df8a5
 
?>

@extends('layouts.app')

@section('title', 'Pasajeros')

@section('content')
	<h1>Pasajeros del Viaje</h1>
<<<<<<< HEAD
=======
	<p>Asientos disponibles {{$viaje->asientos_disponibles}}</p>
	@if($viaje->asientos_disponibles > 0)
	<a href="">Vender Pasaje</a>
	@endif
>>>>>>> 98af882fdb292ac0864eea7d3bc72551cd5df8a5
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
<<<<<<< HEAD
	<?php
	$existe = Pasaje::where('estado', '=', 'cancelado' )->first();
    ?>
    @if ($existe=== null)
	<p>Asientos disponibles {{$viaje->asientos_disponibles}}</p>
	@if($viaje->asientos_disponibles > 0)
	<a href="{{route('Pasajes')}}">Vender Pasaje</a><br>
	@endif
	<a href="">Terminar Viaje</a> <br>
	<a href="{{ route('administracionPasajerosChofer.show', $viaje) }}">Cancelar viaje</a>
	@endif
=======
	<a href="">Terminar Viaje</a>
>>>>>>> 98af882fdb292ac0864eea7d3bc72551cd5df8a5
@endsection