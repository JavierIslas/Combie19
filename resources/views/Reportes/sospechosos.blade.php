
@extends('Layouts.app')

@section('title', 'Reportes')

@section('content')
	<h1>Reportes pasajeros sospechosos de COVID-19</h1>
	@include('partials.session-status')
    <ul>
    	@forelse($usuarios as $usuario)
		<li> 
           {{ $usuario->name }} - {{ $usuario->email }} - {{ $usuario->phone }} 
	    </li>  
		@empty
			<li>No hay pasajeros sospechosos de COVID-19</li>
		@endforelse
	</ul>
@endsection