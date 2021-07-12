
<?php
   use App\Models\Insumo;
   use App\Models\Viaje;
   use App\Models\Ruta;
   use App\Models\Locacion;
          
  ?>
@extends('layouts.app')

@section('title', 'Cobro')

@section('content')
	<h1>Insumos comprados</h1>
	<ul>
		@forelse($insumos as $insumo)
		<?php
   
          $viaje=Viaje::find($insumo->viaje_id);
          $insumoReal=Insumo::find($insumo->insumo_id);
         ?>
			<li>{{ $insumo->id }} - {{$viaje->horario_Salida}} - {{$insumoReal->nombre}} - $ {{$insumoReal->precio}} - {{$insumoReal->tipo}} </li>
		@empty
			<li>No hay insumos comprados</li>
		@endforelse
	</ul>
	</form>
@endsection