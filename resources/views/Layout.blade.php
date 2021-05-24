<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Combie19')</title>
	<style>
		.active a{
			color: red;
			text-decoration: none;
		}
	</style>
</head>
<body>
	@include('partials/nav')
	@include('partials.session-status')
	@yield('content')
</body>
</html>