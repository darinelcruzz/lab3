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
							<li><a href="index.html">Inicio</a></li>
							<li><a href="landing.html">Nosotros</a></li>
							<li><a href="generic.html">Clientes</a></li>
							<li><a href="elements.html">Otros</a></li>
						</ul>
						<!--ul class="actions vertical">
							<li><a href="#" class="button special fit">Get Started</a></li>
							<li><a href="#" class="button fit">Log In</a></li>
						</ul-->
					</nav>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>lab 3</h1>
							</header>
							<div class="content">
								<p>Desarrollo web, apps e impresión 3D</p>
								<ul class="actions">
									<li><a href="#one" class="button next scrolly">Empezar</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="{{ asset('forty/images/pic01.jpg') }}" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Aliquam</a></h3>
										<p>Ipsum dolor sit amet</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="{{ asset('forty/images/pic02.jpg') }}" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Tempus</a></h3>
										<p>feugiat amet tempus</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="{{ asset('forty/images/pic03.jpg') }}" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Magna</a></h3>
										<p>Lorem etiam nullam</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="{{ asset('forty/images/pic04.jpg') }}" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Ipsum</a></h3>
										<p>Nisl sed aliquam</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="{{ asset('forty/images/pic05.jpg') }}" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Consequat</a></h3>
										<p>Ipsum dolor sit amet</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="{{ asset('forty/images/pic06.jpg') }}" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Etiam</a></h3>
										<p>Feugiat amet tempus</p>
									</header>
								</article>
							</section>

						<!-- Two -->
							<section id="two">
								<div class="inner">
									<header class="major">
										<h2>Massa libero</h2>
									</header>
									<p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet pharetra et feugiat tempus.</p>
									<ul class="actions">
										<li><a href="landing.html" class="button next">Get Started</a></li>
									</ul>
								</div>
							</section>

					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="#">
									<div class="field half first">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="6"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">information@untitled.tld</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-phone"></span>
										<h3>Phone</h3>
										<span>(000) 000-0000 x12387</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-home"></span>
										<h3>Address</h3>
										<span>1234 Somewhere Road #5432<br />
										Nashville, TN 00000<br />
										United States of America</span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
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
