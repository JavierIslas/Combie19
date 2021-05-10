<!DOCTYPE html>
<html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Combi 19') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>

<body>
	<nav class="navbar fixed-top navbar-dark bg-primary">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">
      		<img src="/images/logo.png" alt="" width="60" height="60" class="d-inline-block align-text-mid">
      			Combi19
    	</a>
	      <ul class="navbar-nav mb-2 mb-lg-0 flex-row">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href={{route('home')}}>Pagina Principal</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href={{route('about')}}>Acerca de Nosotros</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href={{route('Choferes')}}>Administracion de Choferes</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href={{route('contact')}}>Informacion de Contacto</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href={{route('home')}}>Administracion de Combis</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href={{route('home')}}>Administracion de Locaciones</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href={{route('home')}}>Administracion de Rutas</a>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Dropdown
	          </a>
	          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
	            <li><a class="dropdown-item" href={{route('Choferes')}}>Administracion de Choferes</a></li>
	            <li><a class="dropdown-item" href="#">Another action</a></li>
	            <li><hr class="dropdown-divider"></li>
	            <li><a class="dropdown-item" href="#">Something else here</a></li>
	          </ul>
	        </li>
	      </ul>
	      <form class="d-flex">
	        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
	        <button class="btn btn-outline-success" type="submit">Search</button>
	      </form>
	  </div>
	</nav>

	@include('partials/nav')
	@include('partials.session-status')
	@yield('content')

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
</body>
</html>