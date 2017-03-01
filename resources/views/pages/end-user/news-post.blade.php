@extends('layouts.pages.lgu')

@section('title')
	{{ $news->title }}
@endsection

@section('custom-css')
	<style>
		.img-size {
			height: 320px;
			width: 940px;
			border: dashed 2px #dadada;
		}
	</style>
@endsection

@section('content')
	<div class="wrap">
		@include('layouts.partials._front-end-header')

		@include('layouts.partials._news-post')

		@include('layouts.partials._front-end-footer')
	</div>
@endsection