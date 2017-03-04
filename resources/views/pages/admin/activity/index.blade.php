@extends('layouts.pages.app')

@section('title')
	Activities
@endsection

@section('content')
	<h1>Barangay Activities
		<a href="activity/create" class="btn btn-success btn-lg pull-right">
			<span class="glyphicon glyphicon-plus"></span>
		</a>
	</h1>
	<hr>
	{{-- @include('layouts._search-bar') --}}
	<div class="row">
		@foreach($activities as $activity)
		<div class="col-md-12">
			<article>
				<h2><a href="/activity/{{ $activity->id }}"> {{ $activity->title}}</a></h2>
				<div class="body">
					{{ $activity->description }}
				</div>
				<div class="row">
					<div class="col-md-6">
						{{ $activity->start_date }}
					</div>
					<div class="col-md-6">
						{{ $activity->end_date }}
					</div>
				</div>
			</article>
		</div>
		@endforeach
	</div>
@endsection