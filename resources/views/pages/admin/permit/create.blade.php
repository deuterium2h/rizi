@extends('layouts.pages.app')

@section('title')
	Register new Business Permit
@endsection

@section('content')
	<div class="row">
		{!! Form::open(['url' => 'permit']) !!}
		@include('layouts.forms.-permit', ['submitButton' => 'Register'])		
	</div>
@endsection