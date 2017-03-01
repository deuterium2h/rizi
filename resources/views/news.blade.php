@extends('layouts.pages.lgu')

@section('title')
	News
@endsection

@section('custom-css')
	<style>
		.img-size {
			height: 170px;
			width: 215px;
			max-height: 195px;
			/*border: dashed 2px #dadada;*/
		}
	</style>
@endsection

@section('content')
	<div class="wrap">
		@include('layouts.partials._front-end-header')
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<hr class="no-top-margin">
				</div>
			</div>
		</div>
		@include('layouts.partials._local-news')
		@include('layouts.partials._front-end-footer')
	</div>
@endsection