<?php
use App\Models\InsumoComprado;
use App\Models\Viaje;
?>
@extends('layouts.app')

@section('title', 'Nuestros Viajes')

@section('content')

	<h1>Estas son sus compras realizadas en nuestro sistema</h1>
   
	<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">Dia</th>
					<th scope="col">Origen</th>
					<th scope="col">Destino</th>
					<th scope="col">Salida</th>
					<th scope="col">Estado</th>
					<th scope="col">Insumos</th>
				</tr>
			</thead>
			<tbody>
				@foreach($pasajes as $pasaje)
					<tr>

						<?php
                           $viaje=Viaje::find($pasaje->viaje_id);

                        ?>
                        
						<th scope="row">{{$viajes[$pasaje->viaje_id - 1]->fecha}}</th>
						<th scope="row">{{$lugares[$rutas[$viajes[$pasaje->viaje_id-1]->ruta_id - 1]->origen - 1]->ciudad}} - {{$lugares[$rutas[$viajes[$pasaje->viaje_id-1]->ruta_id - 1]->origen - 1]->provincia}}</th>
						<th scope="row">{{$lugares[$rutas[$viajes[$pasaje->viaje_id-1]->ruta_id - 1]->destino - 1]->ciudad}} - {{$lugares[$rutas[$viajes[$pasaje->viaje_id-1]->ruta_id - 1]->destino - 1]->provincia}}</th>
						<th scope="row">{{$viajes[$pasaje->viaje_id - 1]->horario_Salida}}</th>
						<th scope="row">{{$pasaje->estado}}</th>
						<th scope="row"><a href="{{ route('administracionPasajerosChofer.create') }}">Ver</a></th>
						
						<th>
							@if($pasaje->estado == "reservado")
							<form action="{{ route('Pasajes.editar', $pasaje->id) }}" method="GET">
									<button type="submit" class="btn btn-danger">CANCELAR</button>
							</form>
							@endif
						</th>
					</tr>
				@endforeach
			</tbody>
		</table>

@endsection