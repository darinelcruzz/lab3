<!DOCTYPE HTML>
<html>
	<head>
		<title>Lab 3</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('forty/css/main.css') }}" />
	</head>
	<body>

		<!-- Wrapper -->
		<div id="wrapper">
			<!-- Header -->
			<header id="header" class="alt">
				<a href="#" class="logo"><strong>LAB3</strong> <span>Software</span></a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

			<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index">Inicio</a></li>
					<li><a href="landing">Nosotros</a></li>
					<li><a href="generic">Clientes</a></li>
					<li><a href="elements">Otros</a></li>
					<li><a href="{{ route('template.index') }}">Plantillas</a></li>
				</ul>
				<!--ul class="actions vertical">
					<li><a href="#" class="button special fit">Get Started</a></li>
					<li><a href="#" class="button fit">Log In</a></li>
				</ul-->
			</nav>

			<!-- Banner -->
            @yield('banner')

			<!-- Main -->
			<div id="main">
                @yield('main')
			</div>

			@yield('contact')

			<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; lab3</li><li>Software</li>
					</ul>
				</div>
			</footer>

		</div>

		<!-- Scripts -->
		<script src="{{ asset('forty/js/jquery.min.js') }}"></script>
		<script src="{{ asset('forty/js/jquery.scrolly.min.js') }}"></script>
		<script src="{{ asset('forty/js/jquery.scrollex.min.js') }}"></script>
		<script src="{{ asset('forty/js/skel.min.js') }}"></script>
		<script src="{{ asset('forty/js/util.js') }}"></script>
		<script src="{{ asset('forty/js/main.js') }}"></script>

	</body>
</html>
