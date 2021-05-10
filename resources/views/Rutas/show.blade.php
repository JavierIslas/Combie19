@extends('Layout')

@section('title','Ruta :'. $ruta->combie_id . $ruta->duracion . $ruta->distancia)

@section('content')

</form>
	<div>
		<p>{{ 'Origen: '.$lugarOrigen->provincia . ' - ' .$lugarOrigen->ciudad}}</p>
		<p>{{ 'Destino: '.$lugarDestino->provincia . ' - ' .$lugarDestino->ciudad}}</p>
		<p>{{ 'Combi (Patente - Conductor): '.$combi->patente . ' - ' .$choferDeCombi->last_name . ', ' .$choferDeCombi->name}}</p>
		<p>{{ 'Duracion: '.$ruta -> duracion}}</p>
		<p>{{ 'Distancia: '.$ruta -> distancia . ' Kms'}}</p>
		<p>{{ 'Dada de alta el: '.$ruta -> created_at}}</p>
		<p>{{ 'Ultima actualizacion: '.$ruta -> updated_at}}</p>
	</div>


	<a href="{{route('administracionRutas.edit', $ruta)}}">
		<button>Editar ruta</button>
	</a>

	<form method="POST" action="{{route('administracionRutas.destroy',$ruta)}}">
		@csrf @method('DELETE')
		<button>Eliminar</button>

@endsection