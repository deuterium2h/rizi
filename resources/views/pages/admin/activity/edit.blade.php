@extends('layouts.pages.app')

@section('title')
	Update Activity
@endsection

@section('content')

	<div class="row">
		<div class="col-md-12">
			<h1><strong>Edit: </strong>{{ $activity->title }}</h1>
		</div>
		<div class="col-md-12">
			<hr>
			{!! Form::model($activity, ['url' => 'activity/' . $activity->id, 'method' => 'PATCH']) !!}
			@include('layouts.forms.-activity', ['submitButton' => 'Update Activity'])
		</div>
	</div>

@endsection