@extends('layouts.pages.app')

@section('title')
	Update Citizen
@endsection

@section('content')
	<div class="row">
		{!! Form::model($citizen, ['url' => 'citizen/' . $citizen->id, 'method' => 'PATCH', 'files' => true]) !!}
		@include('layouts.forms.-citizen', ['submitButton' => 'Update'])
	</div>
@stop