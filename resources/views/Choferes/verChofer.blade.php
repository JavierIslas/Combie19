@extends('Layout')

@section('title', $chofer->last_name)

@section('content')
{{ $chofer }}
@endsection
