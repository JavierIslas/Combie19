@extends('Layouts.app')

@section('title','Insumo :'. $insumo->nombre)

@section('content')
<a href="{{route('administracionInsumos.edit', $insumo)}}">Modificar Insumo</a>
<br>
@include('partials.session-status')
<form method="POST" action="{{route('administracionInsumos.destroy',$insumo)}}">
	@csrf @method('DELETE')
	<button>Eliminar</button>


</form>
<div>
<p>{{ 'Nombre: '.$insumo -> nombre}}</p>
<p>{{ 'Tipo: '.$insumo -> tipo}}</p>
<p>{{ 'Precio Unitario: '.$insumo -> precio}}</p>
<p>{{ 'Dada de alta el: '.$insumo -> created_at}}</p>
<p>{{ 'Ultima actualizacion: '.$insumo -> updated_at}}</p>
</div>
@endsection