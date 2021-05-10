@extends('Layout')

@section('title','Ruta :'. $ruta->origen . $ruta->destino . $ruta->combie_id . $ruta->duracion . $ruta->distancia)

@section('content')
<a href="{{route('administracionRutas.edit', $ruta)}}">rutaEditar ruta</a>
<form method="POST" action="{{route('administracionRutas.destroy',$ruta)}}">
	@csrf @method('DELETE')
	<button>Eliminar</button>


</form>
<div>
<p>{{ 'Origen: '.$ruta -> origen}}</p>
<p>{{ 'Destino: '.$ruta -> destino}}</p>
<p>{{ 'combie_id: '.$ruta -> combie_id}}</p>
<p>{{ 'Duracion: '.$ruta -> duracion}}</p>
<p>{{ 'Distancia: '.$ruta -> distancia}}</p>
<p>{{ 'Dada de alta el: '.$ruta -> created_at}}</p>
<p>{{ 'Ultima actualizacion: '.$ruta -> updated_at}}</p>
</div>
@endsection