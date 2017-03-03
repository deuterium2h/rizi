@extends('layouts.pages.app')

@section('title')
	Citizen
@endsection

@section('content')
	<h1>List of Citizens<a href="citizen/create" class="btn btn-success btn-lg pull-right"><i class="glyphicon glyphicon-plus"></i></a></h1>
	{{-- <a href="javascript:;" onclick="jQuery('#create-citizen').modal('show');" class="btn btn-success btn-lg pull-right">+</a> --}}
	<hr>
	@include('layouts.partials._search-bar')
	<br>
	<div id="data-card" class="row">
		@if ($citizens->count())
			@foreach($citizens as $citizen)
				<citizen id="{{ $citizen->id }}"
						 name="{{ $citizen->last_name }}, {{ $citizen->first_name }} {{ $citizen->middle_name }}"
						 address="{{ $citizen->address }}"
						 birthday="{{ Carbon\Carbon::parse($citizen->birthdate)->format('F d, Y') }}"
						 gender="{{ $citizen->gender}}"
				>
					{{-- <a href="#" slot="dropdown" data-rel="collapse" class="pull-right"><i class="entypo-down-open"></i></a> --}}

					<a href="/citizen/{{ $citizen->id }}" slot="view" class="btn btn-default btn-xs">
							<i class="entypo-eye" style="color: black;"></i>
					</a>

					<a href="/citizen/{{ $citizen->id }}/edit" slot="dropdown" class="btn btn-success btn-xs">
						<i class="entypo-pencil"></i>
					</a>

					<img src="images/citizens/{{ $citizen->avatar}}" alt="" style="border-radius: 6%; border: 3px solid #333; width: 175px; height: 175px;">
				</citizen>
			@endforeach
		@else
			<div class="col-md-10 col-md-offset-1">
				<h2>No Results Found</h2>
			</div>
		@endif
			<center>{{ $citizens->links() }}</center>
	</div>

@stop