@extends('Layout')

@section('title','Locacion :'. $locacion->ciudad . $locacion->provincia)

@section('content')
<a href="{{route('administracionLocaciones.edit', $locacion)}}">locacionEditar locacion</a>
<form method="POST" action="{{route('administracionLocaciones.destroy',$locacion)}}">
	@csrf @method('DELETE')
	<button>Eliminar</button>


</form>
<div>
<p>{{ 'Ciudad: '.$locacion -> ciudad}}</p>
<p>{{ 'Provincia: '.$locacion -> provincia}}</p>
<p>{{ 'Dada de alta el: '.$locacion -> created_at}}</p>
<p>{{ 'Ultima actualizacion: '.$locacion -> updated_at}}</p>
</div>
@endsection