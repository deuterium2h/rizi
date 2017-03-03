@extends('layouts.pages.app')

@section('title')
	Update Local News
@endsection

@section('content')

	<div class="row">
		<div class="col-md-12">
			<h1><strong>Edit: </strong>{{ $news->title }}</h1>
		</div>
		<div class="col-md-12">
			<hr>
			{!! Form::model($news, ['url' => 'news/' . $news->id, 'method' => 'PATCH']) !!}
			@include('layouts.forms.-news', ['submitButton' => 'Update Local News'])
		</div>
	</div>

@endsection