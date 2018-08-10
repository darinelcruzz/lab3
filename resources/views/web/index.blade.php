@extends('web.root')

@section('banner')
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
@endsection

@section('main')

<!-- One -->
<section id="one" class="tiles">
	<article>
		<span class="image">
			<img src="{{ asset('forty/images/pic11.jpg') }}" alt="" />
		</span>
		<header class="major">
			<h3><a href="#" class="link">Aliquam</a></h3>
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

@endsection

@section('contact')
	@include('web.partials.contact')
@endsection
