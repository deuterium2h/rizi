@extends('layouts.app')

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
				<div class="form-group">
					{!! Form::label('title', 'Title:') !!}
					{!! Form::text('title', null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('body', 'News Content:') !!}
					{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('posted_by', 'Published By:') !!}
					{!! Form::text('posted_by', Auth::user()->name, ['class' => 'form-control', 'readonly']) !!}
				</div>
				<div class="form-group">
					{!! Form::submit('Add Local News', ['class' => 'btn btn-primary form-control']) !!}
				</div>
			{!! Form::close() !!}
		</div>
	</div>

@endsection