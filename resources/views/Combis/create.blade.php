@extends('Layout')

@section('title', 'Alta de Combi')

@section('content')
	<h1>Sistema de alta para una nueva combi</h1>

	<form method="POST" action="{{ route('administracionCombis.store') }}">
		@csrf
		<label>Modelo: </label><input type="string" name="model" value="{{old('model') }}"><br>
		{!!$errors->first('model', '<small>:message</small><br>')!!}

		<label>Patente: </label><input type="string" name="patente" value="{{old('patente')}}"><br>
		{!!$errors->first('patente', '<small>:message</small><br>')!!}

		<label>Cantidad de asientos: </label><input type="number" name="asientos" value="{{old('asientos') }}"><br>
		{!!$errors->first('asientos', '<small>:message</small><br>')!!}

		<label>Tipo: </label><input type="string" name="tipo" value="{{old('tipo') }}"><br>
		{!!$errors->first('tipo','<small>:message</small><br>')!!}

	    <label>ID Chofer asignado:</label><input type="number" name="chofer_id" value="{{old('chofer_id') }}"><br>
	    {!!$errors->first('chofer_id', '<small>:message</small><br>')!!}
		<button>Dar de Alta</button>
	</form>
@endsection