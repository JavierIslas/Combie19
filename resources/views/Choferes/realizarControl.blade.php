<?php
use App\Models\User;
$usuario=User::find($pasaje->usuario_id) 
?>
@extends('layouts.app')

@section('title', 'Edicion de Chofer')

@section('content')
	<h1>Realizar Control {{$usuario->name}}</h1>
@include('partials.errorVal')
	 <form method="POST" action="{{ route('administracionPasajerosChofer.update', $pasaje) }}">
		@csrf @method('PATCH')
<<<<<<< HEAD
		<label>Fiebre: </label><input type="number" step="0.01"name="fiebre" required ><br>
=======
		<label>Fiebre: </label><input type="number" name="fiebre"  ><br>
>>>>>>> 98af882fdb292ac0864eea7d3bc72551cd5df8a5
		

         <label>¿Dolor muscular?</label>
          <label>No</label>
		 <input type="radio" name="muscular" value="0" checked>
		 <label>Si</label>
         <input type="radio" name="muscular" value="1">
         <br>
         <label>¿Perdida del olfato y/o gusto?</label>
          <label>No</label>
		 <input type="radio" name="olfato" value="0" checked>
		 <label>Si</label>
         <input type="radio" name="olfato" value="1">
         <br>
         <label>¿Dolor de cabeza?</label>
          <label>No</label>
		 <input type="radio" name="cabeza" value="0" checked>
		 <label>Si</label>
         <input type="radio" name="cabeza" value="1">
         <br>
         <label>¿Dolor de gargante?</label>
          <label>No</label>
		 <input type="radio" name="garganta" value="0" checked>
		 <label>Si</label>
         <input type="radio" name="garganta" value="1">
         <br>
	    <button>Aceptar</button> 
	</form>
@endsection