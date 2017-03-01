@extends('layouts.pages.app')

@section('title')
	Citizen
@endsection

@section('content')
	<legend><h1>Registered Citizens<a href="applicant/citizen" class="btn btn-success btn-lg pull-right">+</a></h1></legend>
	{{-- <a href="javascript:;" onclick="jQuery('#create-citizen').modal('show');" class="btn btn-success btn-lg pull-right">+</a> --}}
	@include('layouts.partials._search-bar')
	<br>
	<div id="data-card" class="row">
		@if ($citizens->count())
			{{ $citizens->links() }}
			@foreach($citizens as $citizen)
				<citizen id="{{ $citizen->id }}"
						 name="{{ $citizen->last_name }}, {{ $citizen->first_name }} {{ $citizen->middle_name }}"
						 address="{{ $citizen->address }}"
						 birthday="{{ $citizen->birthday }}"
						 gender="{{ $citizen->gender}}"
				>
					<img src="images/profiles/{{ $citizen->avatar}}" alt="" style="border-radius: 6%; border: 3px solid #333; width: 175px; height: 175px;">
				</citizen>
			@endforeach
		@else
			<div class="col-md-10 col-md-offset-1">
				<h2>No Results Found</h2>
			</div>
		@endif
	</div>

@stop