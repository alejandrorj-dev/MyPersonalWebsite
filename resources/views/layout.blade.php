<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script src="{{ mix('js/app.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">


</head>
<body>
	<div id="app" class="d-flex flex-column h-screen justify-content-between">
		<header>
			@include('partials.nav')
			@include('partials.session-status')
		</header>

		<main class="py-4">
			@yield('content')
		</main>

		<footer class="bg-white text-black-50 text-center py-3 shadow">
			{{ config('app.name') }} | Copyright @ {{  date('Y') }}
		</footer>

	</div>
</body>
</html>