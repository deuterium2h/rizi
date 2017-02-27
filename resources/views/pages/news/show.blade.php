@extends('layouts.app')

@section('title')
	
@endsection

@section('custom-css')
	<style>
		.dropzone {
			border: 2px dashed #0087F7;
  			border-radius: 5px;
		}
		.dropzone .dz-message {
			text-align: center;
		    font-size: 25px;
		    margin: 3em;
		}
	</style>
@endsection

@section('content')
	<legend><h1>{{ $news->title }}</h1><small>By: {{ $news->posted_by }}</small></legend>
	<div class="row">
		<div class="col-md-12">
			{{$news->body}}
		</div><br>
		<div class="col-md-12">
			<b><legend>News Photos</legend></b>
			<div class="container">
				
			</div>
		</div>
	</div>
@endsection