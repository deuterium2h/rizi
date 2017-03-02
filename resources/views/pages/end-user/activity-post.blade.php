@extends('layouts.pages.lgu')

@section('title')
	{{ $activity->title }}
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

		@include('layouts.partials._activity-post')

		@include('layouts.partials._front-end-footer')
	</div>
@endsection