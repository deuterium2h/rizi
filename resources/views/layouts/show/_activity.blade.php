<div class="body">
	<p>{{ $activity->body }}</p>
	<div class="row">
		<div class="col-md-6">
			{{ $activity->start_date }}
		</div>
		<div class="col-md-6">
			{{ $activity->end_date }}
		</div>
	</div>
</div>
<b><legend>Activity Photos</legend></b>
<div class="form-group" id="data-card">
	<div class="col-md-12 gallery">
		@foreach ($activity->photos->chunk(3) as $set)
			<div class="row">
				@foreach ($set as $photo)
					<form method="POST" action="/photos/{{ $photo->id }}">
						 {!! csrf_field() !!}
						 <input type="hidden" name="_method" value="DELETE">
						 <button class="btn btn-xs btn-danger" type="submit" style="float: left; position: relative;">
							<span class="entypo-trash"></span>
						 </button>
					</form>
					<div class="col-md-3">
						<a href="/{{ $photo->path }}" data-lity>
							<img src="/{{ $photo->thumbnail_path }}" style="border: 5px solid #222; margin-bottom: 3em;">
						</a>
					</div>
				@endforeach
			</div>
		@endforeach
	</div>
</div>&nbsp;