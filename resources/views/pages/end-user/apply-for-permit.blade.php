@extends('layouts.pages.lgu')

@section('title')
	Apply for Business Permit
@endsection

@section('content')
	<div class="wrap">
		@include('layouts.partials._front-end-header')
		<div class="col-md-10 col-md-offset-1">
			<br>@include('layouts.forms.-permit', ['submitButton' => 'Register'])<br>
		</div>
		<!-- Footer Widgets -->
		@include('layouts.partials._front-end-footer')
	</div>
@endsection