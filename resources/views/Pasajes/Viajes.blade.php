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
				</tr>
			</thead>
			<tbody>
				@for($viajes as $viaje)
					<tr>	
						<th name="viaje_id" scope="row">
							<td>{{$viaje->fecha}}</td>

							<td>{{$lugares[$rutas[$viaje->ruta_id]->origen]->ciudad}} - {{$lugares[$rutas[$viaje->ruta_id]->origen]->provincia}}</td>

							<td>{{$lugares[$rutas[$viaje->ruta_id]->destino]->ciudad}} - {{$lugares[$rutas[$viaje->ruta_id]->destino]->provincia}}</td>

							<td>{{$viaje->horario_Salida}}</td>
							<td>
								<form action="{{ route('Pasajes.show', $pasaje->id) }}" method="GET">
									<button type="submit" class="btn btn-primary btn-sm">Comprar</button>
								</form>
							</td>
						</th>
				@endfor
			</tbody>
		</table>

@endsection