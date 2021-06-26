@extends('layouts.app')

@section('title', 'Nuestros Viajes')

@section('content')
	<h1>Encuentre su proximo Viaje</h1>

	<table class="table table-striped">
		<thead>
			<tr>
				<th scope="col">Codigo</th>
				<th scope="col">Precio</th>
				<th scope="col">Dia</th>
				<th scope="col">Origen</th>
				<th scope="col">Destino</th>
				<th scope="col">Salida</th>
			</tr>
		</thead>
		<tbody>
			@forelse($viajes as $viaje)
				<tr>
					<th scope="row">{{$viaje->id}}
						<td>{{$viaje->precio}}</td>
						<td>{{$viaje->fecha}}</td>
						<td>ruta_id->Origen</td>
						<td>ruta_id->Destino</td>
						<td>{{$viaje->horario_Salida}}</td>
						<td><button type="button" class="btn btn-primary btn-sm">Comprar</button></td>
					</th>
				</tr>
			@empty
				<tr>
					Por el Momento NO contamos con asientos disponibles en algun viaje
				</tr>
			@endforelse
		</tbody>
	</table>
	
@endsection