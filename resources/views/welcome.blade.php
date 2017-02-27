@extends('layouts.front-end-template')
@section('title')
	Brgy. San Isidro
@endsection
@section('content')
	<div class="wrap">
		@include('layouts.front-end-header')
		<!-- Main Slider -->
		@include('layouts.slideshow')
		<!-- Features Blocks -->
		@include('layouts.list-of-registered')
		<!-- News/Articles -->
		@include('layouts.news-articles')
		<!-- Testimonails -->
		<div class="container">
			<hr>
		</div>
		{{-- @include('layouts.statistics') --}}
		<!-- Barangay Officials -->
		@include('layouts.brgy-officials')
		<!-- Footer Widgets -->
		@include('layouts.front-end-footer')
	</div>
@endsection