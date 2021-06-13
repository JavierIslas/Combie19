@extends('Layouts.app')

@section('title','Informacion')

@section('content')
<a href="{{route('Usuario.editar', $usuario)}}">Editar Informacion Personal</a>
<br>

</form>
<div>
	<h1>FUnciona</h1>
</div>
@endsection