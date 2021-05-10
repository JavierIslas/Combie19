@extends('layouts.app')

@section('title', $chofer->last_name)

@section('content')
	<h1>{{ $chofer->last_name }}, {{ $chofer->name }}</h1>
	<a href="{{route('Choferes.editar', $chofer)}}">Editar Conductor</a><br>
	<ul>
		<li>{{ $chofer->email }}</li>
		<li>{{ $chofer->phone }}</li>
	</ul>
	<form method="POST" action="{{ route('Choferes.eliminar', $chofer) }}">
		@csrf @method('DELETE')
		<button>Eliminar</button>
	</form>

@endsection
