<nav class="navbar bg-teal shadow-sm">
	<a href="{{ route('home') }}">
		{{ config('app.name') }}
	</a>

	<ul>
		<li class= "{{setActive('home')}}"><a href="{{route('home')}}">@lang('Pagina Principal')</a></li>

		<li class= "{{setActive('about')}}"><a href="{{route('about')}}">@lang('Acerca de Nosotros')</a></li>

		<li class= "{{setActive('Choferes*')}}"><a href="{{route('Choferes')}}">@lang('Administracion de Choferes')</a></li>

		<li class= "{{setActive('contact')}}"><a href="{{route('contact')}}">@lang('Informacion de Contacto')</a></li>

		<li class= "{{setActive('administracionCombis*')}}"><a href="{{route('administracionCombis')}}">@lang('Administracion de Combis')</a></li>

		<li class= "{{setActive('aministracionLocaciones*')}}"><a href="{{route('administracionLocaciones')}}">@lang('Administracion de Locaciones')</a></li>

		<li class= "{{setActive('aministracionRutas*')}}"><a href="{{route('administracionRutas')}}">@lang('Administracion de Rutas')</a></li>

		@guest
			<li><a href="{{route('login')}}">@lang('Iniciar Sesion')</a></li>
		@else
			<li><a href="{{route('login')}}">{{auth()->user()->name}}</a></li>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               	@csrf
               	<li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">@lang('Cerrar Sesion')</a></li>
            </form>
		@endguest

	</ul>
</nav>