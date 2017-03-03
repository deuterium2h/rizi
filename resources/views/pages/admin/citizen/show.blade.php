@extends('layouts.pages.app')

@section('title')
	Show Citizen Member
@stop

@section('content')
	<div class="row">
		<div class="col-md-12">
			<legend><h1>Citizen's Profile</h1></legend>
			@include('layouts.show._citizen')
		</div>
	</div>
@stop