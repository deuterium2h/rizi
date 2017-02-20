@extends('layouts.app')

@section('title')
	Register new citizen
@endsection

@section('content')
	<div class="row">
		{{-- {!! Form::model($citizen, ['url' => 'citizen/create/' . $citizen->id, 'files' => true]) !!} --}}
		@include('layouts.forms.-citizen', ['submitButton' => 'Register'])
	</div>
@stop