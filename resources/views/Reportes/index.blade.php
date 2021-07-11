
@extends('Layouts.app')

@section('title', 'Reportes')

@section('content')
	<h1>Generar Reportes</h1>
	@include('partials.session-status')
    <ul>
		<h3><a href="{{ route('administracionReportes.show', 1) }}">Generar reporte de pasajeros sospechosos de COVID-19</a></h3>
		<h3><a href="">Generar reporte de Viajes</a></h3>
	</ul>
@endsection