@extends('layouts.pages.app')

@section('title')
	Business Permits
@endsection

@section('content')
	<h1>List of Business Permits<a href="permit/create" class="btn btn-success btn-lg pull-right"><i class="glyphicon glyphicon-plus"></i></a></h1>
	{{-- <a href="javascript:;" onclick="jQuery('#create-citizen').modal('show');" class="btn btn-success btn-lg pull-right">+</a> --}}
	<hr>
	@include('layouts.partials._search-bar')
	<br>
	<div id="data-card" class="row">
		
	</div>
@endsection