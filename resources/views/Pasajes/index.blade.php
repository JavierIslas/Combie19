@extends('layouts.app')

@section('title', 'Nuestros Viajes')

@section('content')
	<h1>Encuentre su proximo Viaje</h1>

	<div>
        <div class="mx-auto pull-right">
            <div class="">
                <form action="{{ route('Pasajes') }}" method="GET" role="search">
                    <div class="input-group">
                    	<input type="date" class="form-control mr-2" name="fecha">

                    	<input type="text" class="form-control mr-2" name="ciudad" placeholder="Buscar por ciudad">

                        <input type="text" class="form-control mr-2" name="provincia" placeholder="Buscar por Provincia">
                      
                        <button type="button" class="btn btn-success">Buscar Viaje</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
					@if(Auth::user())							<th name="viaje_id" scope="row">{{$viaje->id}}
							<td>${{$viaje->precio}}</td>
							<td>{{$viaje->fecha}}</td>
							<td>{{$lugares[$rutas[$viaje->ruta_id]->origen]->ciudad}} - {{$lugares[$rutas[$viaje->ruta_id]->origen]->provincia}}</td>
							<td>{{$lugares[$rutas[$viaje->ruta_id]->destino]->ciudad}} - {{$lugares[$rutas[$viaje->ruta_id]->origen]->provincia}}</td>
							<td>{{$viaje->horario_Salida}}</td>
							<td>
								<form action="{{ route('Pasajes.show', Auth::user()->id) }}" method="POST">
									<button type="button" class="btn btn-primary btn-sm">Comprar</button>
								</form>
							</td>
						</th>
					@else
						<th name="viaje_id" scope="row">{{$viaje->id}}
							<td>${{$viaje->precio}}</td>
							<td>{{$viaje->fecha}}</td>
							<td>{{$lugares[$rutas[$viaje->ruta_id]->origen]->ciudad}} - {{$lugares[$rutas[$viaje->ruta_id]->origen]->provincia}}</td>
							<td>{{$lugares[$rutas[$viaje->ruta_id]->destino]->ciudad}} - {{$lugares[$rutas[$viaje->ruta_id]->origen]->provincia}}</td>
							<td>{{$viaje->horario_Salida}}</td>
							<td><a class="button" href="{{ route('login') }}">{{ __('Comprar') }}</a></td>
						</th>
					@endif
				</tr>
			@empty
				<tr>
					Por el Momento NO contamos con asientos disponibles en los viajes disponibles
				</tr>
			@endforelse
		</tbody>
	</table>
	
@endsection