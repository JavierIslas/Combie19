@extends('layouts.app')

@section('title', 'Home')

@section('content')
	<h1>Pagina Principal</h1>
	@auth
		@if(User::noGold())
			<form action="{{ route('User.Premium', Auth::id()) }}" method="GET">
				<button type="submit" class="btn btn-primary btn-sm">MEJORAR CUENTA</button>
			</form>
		@endif
	@endauth
@endsection