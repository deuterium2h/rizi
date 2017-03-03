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
		@if ($permits->count())
			@foreach($permits as $permit)
			<permit owner="{{ $permit->business_owner }}"
					name="{{ $permit->business_name }}"
					address="{{ $permit->business_address }}"
					validity="{{ $permit->validity}}"
			>
				<a href="/permit/{{ $permit->id }}" slot="view" class="btn btn-default btn-xs">
						<i class="entypo-eye" style="color: black;"></i>
				</a>

				<a href="/permit/{{ $permit->id }}/edit" slot="dropdown" class="btn btn-success btn-xs">
					<i class="entypo-pencil"></i>
				</a>
			</permit>
			@endforeach
		@else
			<div class="col-md-10 col-md-offset-1">
				<h2>No Results Found</h2>
			</div>
		@endif
		<center>{{ $citizens->links() }}</center>
	</div>
@endsection