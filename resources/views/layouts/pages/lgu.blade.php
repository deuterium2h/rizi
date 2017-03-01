<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		{{-- CSRF Token --}}
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>@yield('title') | {{ config('app.name', 'RISI') }}</title>

		<link href="/css/user.css" rel="stylesheet">
		<link rel="icon" href="/favicon.png" type="image/x-icon">

		{{-- Script for CSRF Token --}}
		<script>
			window.RISI = <?php echo json_encode([
				'csrfToken' => csrf_token(),
			]); ?>
		</script>
		@yield('custom-css')
	</head>
	<body>
		<div class="wrap">
			@yield('content')
		</div>
	</body>
	{{-- Scripts --}}
	<script src="/js/user.js"></script>
	@yield('custom-js')
</html>
