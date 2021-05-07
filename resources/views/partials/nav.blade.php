<nav>
	<ul>
		<li class= "{{setActive('home')}}"><a href="{{route('home')}}">@lang('Pagina Principal')</a></li>

		<li class= "{{setActive('about')}}"><a href="{{route('about')}}">@lang('Acerca de Nosotros')</a></li>

		<li class= "{{setActive('Choferes*')}}"><a href="{{route('Choferes')}}">@lang('Administracion de Choferes')</a></li>

		<li class= "{{setActive('contact')}}"><a href="{{route('contact')}}">@lang('Informacion de Contacto')</a></li>

		<li class= "{{setActive('administracionCombis*')}}"><a href="{{route('administracionCombis')}}">@lang('Administracion de Combis')</a></li>

		<li class= "{{setActive('aministracionLocaciones*')}}"><a href="{{route('administracionLocaciones')}}">@lang('Administracion de Locaciones')</a></li>

	</ul>
</nav>