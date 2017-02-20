@extends('layouts.front-end-template')

@section('title')
	Apply for Citizenship
@endsection

@section('content')
	<div class="wrap">
		@include('layouts.front-end-header')
		<hr class="no-top-margin">
		<div class="col-md-10 col-md-offset-1">
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
		@include('layouts.front-end-footer')
	</div>
@endsection