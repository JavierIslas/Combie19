<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Combie19')</title>
    <style>
        .active a{
            color: red;
            text-decoration: none;
        }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   <img alt= "Home" src="{{asset('logo_is.png')}}" width="100" height="100">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        <!--  Eventually smthng -->

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if (User::isClient())
                            <li class= "{{setActive('Pasajes')}}"><a href="{{route('Pasajes')}}">@lang('Comprar Pasaje')</a></li>
                            @if (User::tienePasajes())
                                <li class= "{{setActive('Comentario')}}"><a href="{{route('Comentario')}}">@lang('Mis Pasajes')</a></li>
                            @endif
                            @if (User::puedeComentar())
                            <li class= "{{setActive('Comentario')}}"><a href="{{route('Comentario')}}">@lang('Informacion de Contacto')</a></li>
                            @endif
                        @endif
                        @if (User::isAdmin())
                            <li class= "{{setActive('Choferes')}}"><a href="{{route('Choferes')}}">@lang('Administracion de Choferes')</a></li>

                            <li class= "{{setActive('administracionCombis')}}"><a href="{{route('administracionCombis')}}">@lang('Administracion de Combis')</a></li>

                            <li class= "{{setActive('administracionLocaciones')}}"><a href="{{route('administracionLocaciones')}}">@lang('Administracion de Locaciones')</a></li>

                            <li class= "{{setActive('administracionRutas')}}"><a href="{{route('administracionRutas')}}">@lang('Administracion de Rutas')</a>
                            </li>

                            <li class= "{{setActive('administracionViajes')}}"><a href="{{route('administracionViajes.index')}}">@lang('Administracion de Viajes')</a>
                            </li>

                            <li class= "{{setActive('administracionInsumos')}}"><a href="{{route('administracionInsumos.index')}}">@lang('Administracion de Insumos')</a>
                            </li>

                            <li class= "{{setActive('administracionReportes')}}"><a href="{{route('administracionReportes.index')}}">@lang('Generar Reportes')</a>
                            </li>
                            
                        @endif
                        @if (User::isDriver())
                             <li class= "{{setActive('administracionViajesChofer')}}"><a href="{{route('administracionViajesChofer.index')}}">@lang('Ver Viajes')</a>
                            </li>

                        @endif
                    @auth
                        <li class= "{{setActive('User.show')}}"><a href="{{ route('User.show', Auth::id()) }}">@lang('Informacion Personal')</a></li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                        @endauth
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @endguest

                                    </form>
                                </div>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @include('partials.session-status')
            @yield('content')
        </main>
    </div>
</body>
</html>
