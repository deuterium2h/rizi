@extends('layouts.pages.lgu')

@section('title')
	Application Pending
@endsection

@section('content')
	<div class="wrap">
		@include('layouts.partials._front-end-header')
		<hr class="no-top-margin">
		<div class="jumbotron">
			<center>
				<h1>Your Transaction ID is: <br>{{ $tid }}</h1><br>
				<i><h3>Please write down your Transaction ID and proceed to the nearest Barangay Hall for approval of your Pending Application</h3></i>
			</center>
		</div>
		@include('layouts.partials._front-end-footer')
	</div>
@endsection