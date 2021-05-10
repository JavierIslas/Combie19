@extends('Layouts.app')

@section('title','Patente :'. $combi->patente)

@section('content')
<a href="{{route('administracionCombis.edit', $combi)}}">Editar combi</a>
<form method="POST" action="{{route('administracionCombis.destroy',$combi)}}">
	@csrf @method('DELETE')
	<button>Eliminar</button>


</form>
<div>
<p>{{ 'Patente: '.$combi -> patente}}</p>
<p>{{ 'Modelo: '.$combi -> model}}</p>
<p>{{ 'Cantidad de asientos: '.$combi -> asientos}}</p>
<p>{{ 'Tipo: '.$combi -> tipo}}</p>
<p>{{ 'Chofer: '. $choferDeCombi->name . ' '. $choferDeCombi->last_name}}</p>
<p>{{ 'Dada de alta el: '.$combi -> created_at}}</p>
<p>{{ 'Ultima actualizacion: '.$combi -> updated_at}}</p>
</div>
@endsection