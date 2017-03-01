@extends('layouts.app')

@section('title')
	Register new clearance
@endsection

@section('content')
	<div class="row">
		{{-- {!! Form::model($citizen, ['url' => 'citizen/create/' . $citizen->id, 'files' => true]) !!} --}}
		@include('layouts.forms.-clearance', ['submitButton' => 'Register'])
	</div>
@stop