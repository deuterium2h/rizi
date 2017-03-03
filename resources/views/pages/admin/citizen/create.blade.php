@extends('layouts.pages.app')

@section('title')
	Register new citizen
@endsection

@section('content')
	<div class="row">
		{!! Form::open(['url' => 'citizen', 'files' => true]) !!}
		@include('layouts.forms.-citizen', ['submitButton' => 'Register'])
	</div>
@stop