@extends('layouts.pages.app')

@section('title')
	View Business Permit
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<legend>
				<h1>Business Permit</h1>
				@include('layouts.show._permit')
			</legend>
		</div>
	</div>
@endsection
