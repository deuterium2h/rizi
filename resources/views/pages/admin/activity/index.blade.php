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
				<h2><a href="/activity/{{ $activity->id }}">{{ $activity->title}}</a></h2>
				<div class="body">
					{{ str_limit($activity->description, 500) }}
				</div>
				<div class="row">
					<div class="col-md-6">
						<b>Start:</b> {{ $activity->start_date }} @ {{ $activity->start_time }}
					</div>
					<div class="col-md-6">
						<b>End:</b> {{ $activity->end_date }} @ {{ $activity->end_time }}
					</div>
				</div>
			</article>
		</div>
		@endforeach
	</div>
@endsection