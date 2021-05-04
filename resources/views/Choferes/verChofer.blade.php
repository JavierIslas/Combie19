@extends('Layout')

@section('title', $chofer->last_name)

@section('content')
	<h1>{{ $chofer->last_name }}, {{ $chofer->name }}</h1>
	<ul>
		<li>{{ $chofer->email }}</li>
		<li>{{ $chofer->phone }}</li>
	</ul>	
@endsection
