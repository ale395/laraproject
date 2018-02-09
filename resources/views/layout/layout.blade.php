<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href="/css/app.css">

	<title>Pruebas Laravel</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Probando Laravel</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li>
							<a href="{{ route('login') }}">Login</a></li>
						<li>
							<a href="{{ route('register') }}">Registrarme</a></li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Formularios <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="{{ url('rol') }}">Rol</a></li>
								<li><a href="{{ url('modulo') }}">Modulo</a></li>
								<li><a href="{{ url('formulario') }}">Formulario</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
	</header>
	<div class="container">
		@yield('contenido')

	
		<footer>{{date('Y')}}</footer>
	</div>

	<script type="text/javascript" src="/js/app.js"></script>

</body>
</html>