@extends('layouts.pages.lgu')

@section('title')
	Brgy. San Isidro
@endsection

@section('custom-css')
	<style>
		h2.slider{
			color:white;
		}
		.img-size {
			width: 263px;
			height: 185px;
			max-height: 185px;
		}
	</style>
@endsection

@section('content')
	<div class="wrap">
		@include('layouts.partials._front-end-header')
		<!-- Main Slider -->
		@include('layouts.partials._slideshow')
		<!-- Features Blocks -->
		@include('layouts.partials._list-of-registered')
		<!-- News/Articles -->
		@include('layouts.partials._news-articles')
		<!-- Testimonails -->
		<div class="container">
			<hr>
		</div>
		{{-- @include('layouts.partials._statistics') --}}
		<!-- Barangay Officials -->
		<center>
			<h1>Barangay Officials</h1>
		</center>
		@include('layouts.partials._brgy-officials')
		<!-- Footer Widgets -->
		@include('layouts.partials._front-end-footer')
	</div>
@endsection