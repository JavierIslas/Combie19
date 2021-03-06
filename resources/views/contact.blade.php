@extends('layouts.app')

@section('title', 'Contact')

@section('content')
	<h1>{{__('Informacion de Contacto')}}</h1>
	<form method="POST" action= "{{ route('contact') }}">
		@csrf
		<input name="name" placeholder="Ingrese Nombre" value="{{ old('name') }}"> <br>
		{!! $errors->first('name', '<small>:message</small><br>') !!}
		<input type="email" name="email" placeholder="Email de Contacto" value="{{ old('email') }}"><br>
		{!! $errors->first('email', '<small>:message</small><br>') !!}
		<input name="subject" placeholder="Asunto" value="{{ old('subject') }}"><br>
		{!! $errors->first('subject', '<small>:message</small><br>') !!}
		<textarea name="content" placeholder="Describa el Problema">{{ old('content') }}</textarea><br>
		{!! $errors->first('content', '<small>:message</small><br>') !!}
		<button>@lang('Enviar')</button><br>
	</form>
@endsection