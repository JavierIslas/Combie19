@extends('layouts.app')

@section('title','Comentario de'. $usuario->name)

@section('content')
@if(false)
<a href="{{route('administracionCombis.edit', $comentario)}}">Modificar combi</a>
<br>
@include('partials.session-status')
<form method="POST" action="{{route('administracionCombis.destroy',$comentario)}}">
	@csrf @method('DELETE')
	<button>Eliminar</button>
@endif
</form>
<div>
<p>{{ 'Usuario: '.$usuario -> name}}</p>
<p>{{ 'Puntaje: '}}
@for ($i = 0; $i < $comentario->rating; $i++)
				&#9733
@endfor
</p>
<p>{{ 'Opinion: '.$comentario -> descripcion}}</p>
</div>
@endsection