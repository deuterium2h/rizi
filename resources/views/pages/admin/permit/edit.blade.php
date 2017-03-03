@extends('layouts.pages.app')

@section('title')
	Update Business Permit
@endsection

@section('content')
	<div class="row">
		{!! Form::model($permit, ['url' => 'permit/' . $permit->id, 'method' => 'PATCH']) !!}
		@include('layouts.forms.-permit', ['submitButton' => 'Update'])
	</div>
@stop