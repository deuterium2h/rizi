@extends('layouts.pages.app')

@section('title')
	{{ $activity->title }}
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
	<h1>{{ $activity->title }}</h1><hr>
	<div class="row">
		<div class="col-md-12">
			@include('layouts.show._activity')
		</div>
		<div class="col-md-12">
			<b><legend>Add Activity Photos</legend></b>
			<form id="addActivityPhoto" action="{{ route('store_photo_path', [$activity->id]) }}" method="POST" class="dropzone">
				{{ csrf_field() }}
			</form>
		</div>
	</div>
@endsection
@section('custom-js')
	<script>
		Dropzone.options.addActivityPhoto = {
			paramName: 'photo', 
			maxFilesize: 4,
			acceptedFiles: '.jpg, .jpeg, .png, .bmp',
			dictDefaultMessage: 'Drop pictures here to upload.'
		};
	</script>
@endsection