@extends('Layouts.app')

@section('title', 'Alta de Combi')

@section('content')
	<h1>Sistema de alta para una nueva combi</h1>

	<form method="POST" action="{{ route('administracionCombis.store') }}">
		@csrf
		<label>Modelo: </label><input type="string" name="model" value="{{old('model', $combi->model)}}"><br>
		{!!$errors->first('model', '<small>:message</small><br>')!!}

		<label>Patente: </label><input type="string" name="patente" value="{{old('patente',$combi->patente)}}"><br>
		{!!$errors->first('patente', '<small>:message</small><br>')!!}

		<label>Cantidad de asientos: </label><input type="number" name="asientos" value="{{old('asientos',$combi->asientos)}}"><br>
		{!!$errors->first('asientos', '<small>:message</small><br>')!!}

		<label>Tipo: </label>
		<select  name="tipo" value="{{old('tipo',$combi->tipo)}}" >
			<option value="comoda">Comoda</option>
			<option value="super-comoda">Super-Comoda</option>
		</select><br>

 		<label>Chofer asignado:</label>
		<select name="chofer_id" value="{{old('chofer_id',$combi->chofer_id)}}">
        	@foreach ($choferes as $chofer)
               <option  value="{{$chofer->id}}">{{ $chofer->name .' ' . $chofer->last_name}}</option>
            @endforeach
        </select>
        <button>Dar de Alta</button>
	</form>
@endsection



