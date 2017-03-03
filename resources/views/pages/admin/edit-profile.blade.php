@extends('layouts.pages.app')

@section('title')
	Edit Profile
@endsection

@section('content')
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<img src="/images/profiles/{{ $user->avatar }}" style="width: 150px; height: 150px; border-radius: 50%; border: solid 2px #d3d3d3; float: left; margin-right: 25px;">
			<h1>{{ $user->name }}'s Profile</h1><hr>
			<h3>Update Profile Image</h3>
			<form enctype="multipart/form-data" action="/edit-profile" method="POST">
				{{ csrf_field() }}
				<div class="fileinput fileinput-new" data-provides="fileinput">
				{{-- {!! Form::label('avatar', 'User Photo:') !!} --}}
				<br>
					<span class="btn btn-info btn-file" name="avatar">
						<span class="fileinput-new">Select file</span>
						<span class="fileinput-exists">Change</span>
						{!! Form::file('avatar', ['accept' => 'image/*']) !!}
					</span>
					<span class="fileinput-filename"></span>
					<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
				</div>
				<center>
					<div class="col-md-10 col-md-offset-2">
						<input type="submit" class="btn btn-success btn-block">
					</div>
				</center>
			</form>
			
		</div>
	</div>
@endsection