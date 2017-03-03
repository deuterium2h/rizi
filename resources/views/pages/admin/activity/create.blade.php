@extends('layouts.pages.app')

@section('title')
	Write Local News
@endsection

@section('content')

	<div class="row">
		<div class="col-md-12">
			<h1>Write a Local News</h1>
		</div>
		<div class="col-md-12">
			<hr>
			{!! Form::open(['url' => 'news']) !!}
			@include('layouts.forms.-news', ['submitButton' => 'Add Local News'])
		</div>
	</div>

@endsection