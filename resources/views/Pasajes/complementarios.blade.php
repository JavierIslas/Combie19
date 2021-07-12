@extends('layouts.app')

@section('title', 'Bienes complementarios')

@section('content')
	<h1>Nuestros bienes complementarios</h1>
   
	<table class="table table-striped">
		<thead>
			<tr>
				<th scope="col">Codigo</th>
				<th scope="col">Nombre</th>
				<th scope="col">Precio</th>
				 
			</tr>
		</thead>
		<tbody>
			@forelse($insumos as $insumo)
				<tr>
						<th name="insumoComprado" scope="row">{{$insumo->id}}
							<td>{{$insumo->nombre}}</td>

							<td>{{$insumo->precio}}</td>

							<td>
								<form action="{{ route('administracionViajesChofer.create')}} " method="GET">
									
									<input type="hidden" name="insumo_id" readonly value="{{$insumo->id}}">
									<input type="hidden" name="viaje_id" readonly value="{{$viaje->id}}">

									<input type="hidden" name="usuario_id" readonly value="{{Auth::user()->id}}">

									<button type="submit" class="btn btn-primary btn-sm">Comprar</button>
								</form>
							</td>
						</th>
				</tr>
			@empty
				<tr>
					Por el Momento NO ofrecemos insumos
				</tr>
			@endforelse
		</tbody>
		<form action="{{ route('administracionPasajerosChofer.create' )}} " method="GET">
			<button type="submit" class="btn btn-primary btn-sm">Terminar Compra</button>
       </form>
	</table>
	 
@endsection