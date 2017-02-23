@extends('layouts.app')

@section('title')

@endsection

@section('content')
	<legend><h1>Local News<a href="news/create" class="btn btn-success btn-lg pull-right">+</a></h1></legend>
	{{-- @include('layouts._search-bar') --}}
	<div class="row">
		<div class="col-md-12">
			<article>

				<h2>ss</h2>

				<div class="body">
					{{-- {{ $article->body }} --}}
				</div>

			</article>
		</div>
	</div>
@endsection