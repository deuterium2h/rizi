@extends('layouts.pages.app')

@section('title')
	New Activity
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1>Add New Barangay Activity</h1>
		</div>
		<div class="col-md-12">
			<hr>
			{!! Form::open(['url' => 'activity']) !!}
			@include('layouts.forms.-activity', ['submitButton' => 'Add Activity'])
		</div>
	</div>
@endsection