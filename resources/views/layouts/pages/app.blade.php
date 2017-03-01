<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		{{-- CSRF Token --}}
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name', 'Risi') }} | @yield('title')</title>

		{{-- Styles --}}
		<link href="/css/libs.css" rel="stylesheet">
		<link rel="icon" href="/favicon.png" type="image/x-icon">

		{{-- Script for CSRF Token --}}
		<script>
			window.Risi = <?php echo json_encode([
				'csrfToken' => csrf_token(),
			]); ?>
		</script>
		@yield('custom-css')
	</head>
	<body {{-- class="page-body"  --}}>
	@if (Auth::guest())
		<div class="container">
			@yield('content')
		</div>
	@else
		<div class="page-container">
			{{-- Sidebar --}}
			@include('layouts.partials._sidebar')
			<div class="main-content">
				{{-- Navbar --}}
				@include('layouts.partials._navbar')
				<hr>
				@yield('content') {{-- Always start with .row --}}
			</div>
		</div>
	@endif
		{{-- Scripts --}}
		<script src="/js/app.js"></script>
		<script src="/js/libs.js"></script>
	@yield('custom-js')
	</body>
</html>
