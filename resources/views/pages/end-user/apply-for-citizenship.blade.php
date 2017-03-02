@extends('layouts.pages.lgu')

@section('title')
	Apply for Citizenship
@endsection

@section('custom-css')
	<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

@section('content')
	<div class="wrap">
		@include('layouts.partials._front-end-header')
		<hr class="no-top-margin">
		<div class="col-md-10 col-md-offset-1">
		{!! Form::open(['url' => 'apply-for-citizenship', 'files' => true]) !!}
			<br>@include('layouts.forms.-citizen', ['submitButton' => 'Register'])<br>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<hr class="no-top-margin">
				</div>
			</div>
		</div>
		<!-- Footer Widgets -->
		@include('layouts.partials._front-end-footer')
	</div>
@endsection