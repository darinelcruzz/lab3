<!DOCTYPE HTML>
<html>
	<head>
		<title>Plantilla: {{ ucfirst($template) }}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="{{ asset("templates/$template/assets/css/main.css") }}" />
	</head>

	<body class="is-preload">

		@include("web.templates.$template")

		<script src="{{ asset("templates/$template/assets/js/jquery.min.js") }}"></script>
		<script src="{{ asset("templates/$template/assets/js/jquery.dropotron.min.js") }}"></script>
		<script src="{{ asset("templates/$template/assets/js/jquery.selectorr.min.js") }}"></script>
		<script src="{{ asset("templates/$template/assets/js/jquery.scrollex.min.js") }}"></script>
		<script src="{{ asset("templates/$template/assets/js/jquery.scrolly.min.js") }}"></script>
		<script src="{{ asset("templates/$template/assets/js/browser.min.js") }}"></script>
		<script src="{{ asset("templates/$template/assets/js/breakpoints.min.js") }}"></script>
		<script src="{{ asset("templates/$template/assets/js/util.js") }}"></script>
		<script src="{{ asset("templates/$template/assets/js/main.js") }}"></script>
	</body>
</html>