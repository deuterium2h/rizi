@extends('layouts.front-end-template')

@section('title')
	News
@endsection

@section('content')
	<div class="wrap">
		@include('layouts.front-end-header')
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<hr class="no-top-margin">
				</div>
			</div>
		</div>
		@include('layouts.list-of-news')
		@include('layouts.front-end-footer')
	</div>
@endsection