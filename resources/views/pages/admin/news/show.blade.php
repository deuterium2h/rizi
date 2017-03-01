@extends('layouts.pages.app')

@section('title')
	{{$news->title}}
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
	<legend><h1>{{ $news->title }}</h1>
		<small>By: {{ $news->posted_by }} | Category: {{ $news->category }}</small>
	</legend>
	<div class="row">
		<div class="col-md-12">
			@include('layouts.show._news')
		</div>
		<div class="col-md-12">
			<b><legend>Add News Photos</legend></b>
			<form id="addNewsPhoto" action="{{ route('store_photo_path', [$news->id]) }}" method="POST" class="dropzone">
				{{ csrf_field() }}
			</form>
		</div>
	</div>
@endsection
@section('custom-js')
	<script>
		Dropzone.options.addNewsPhoto = {
			paramName: 'photo', 
			maxFilesize: 4,
			acceptedFiles: '.jpg, .jpeg, .png, .bmp',
			dictDefaultMessage: 'Drop pictures here to upload.'
		};
	</script>
@endsection