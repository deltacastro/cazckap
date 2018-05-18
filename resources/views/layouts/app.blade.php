<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Styles -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="{{ asset('css/app2.css') }}" rel="stylesheet">
	@yield('style')
</head>
<body>
	<div id="app">
		<nav class="navbar navbar-default navbar-static-top bcWarning">
			<div class="container">
				<div class="navbar-header">

					<!-- Collapsed Hamburger -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<!-- Branding Image -->
					<a class="navbar-brand fontColorRed" href="{{ url('/') }}">
						{{ config('app.name', 'Laravel') }}
					</a>
				</div>

				<div class="collapse navbar-collapse" id="app-navbar-collapse">
					<!-- Left Side Of Navbar -->
					<ul class="nav navbar-nav">
						<li><a href="/home">Principal</a></li>
						<li><a href="/memoria">Memoria</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
									Articulos <span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="/articulos/comoSepararBasura">¿Como Separar la basura?</a></li>
							</ul>
						</li>
						<li><a href="/quienesSomos">¿Quienes Somos?</a></li>
					</ul>

					<!-- Right Side Of Navbar -->
					<ul class="nav navbar-nav navbar-right">
						<!-- Authentication Links -->
						@guest
							<li><a class="fontColorRed" href="{{ route('login') }}">Inciar Sesión</a></li>
							<li><a href="{{ route('register') }}">Registrarse</a></li>
						@else
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>

								<ul class="dropdown-menu">
									<li>
										<a href="{{ route('logout') }}"
										onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
										Cerrar Sesión
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								</li>
							</ul>
						</li>
					@endguest
				</ul>
			</div>
		</div>
	</nav>

	@if (session('success') && is_array(session('success')))
						<div class="alert alert-success">
							<ul>
								@foreach (session('success') as $key => $value)
									<li>{{ $value }}</li>
								@endforeach
							</ul>
						</div>
					@elseif (session('success'))
						<div class="alert alert-success">
							<ul>
								<li>{{ session('success') }}</li>
							</ul>
						</div>
					@endif
					@if (session('warning') && is_array(session('success')))
						<div class="alert alert-warning">
							<ul>
								@foreach (session('warning') as $key => $value)
									<li>{{ $value }}</li>
								@endforeach
							</ul>
						</div>
					@elseif (session('warning'))
						<div class="alert alert-warning">
							<ul>
								<li>{{ session('warning') }}</li>
							</ul>
						</div>
					@endif
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
	<div class="container">
		@yield('content')
	</div>
	
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('javascript')
</body>
</html>
