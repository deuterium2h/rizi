@extends('layouts.app')

@section('title')

@endsection

@section('content')
	<h1>Local News<a href="news/create" class="btn btn-success btn-lg pull-right">+</a></h1>
	<hr>
	{{-- @include('layouts._search-bar') --}}
	<div class="row">
		@foreach($articles as $news)
		<div class="col-md-12">
			<article>
				<h2><a href="/news/{{ $news->id }}"> {{ $news->title}} | By: {{ $news->posted_by }} </a></h2>
				<div class="body">
					{{ $news->body }}
				</div>
			</article>
		</div>
		@endforeach
	</div>
@endsection