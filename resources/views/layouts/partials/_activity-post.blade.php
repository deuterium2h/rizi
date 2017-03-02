<section class="blog blog-single">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="blog-post-single">
					<a class="image">
						<img src="/{{ $activity->photos->first()->path }}" class="img-responsive img-rounded img-size">
					</a>
					<div class="post-details">
						<h3>
							<a>{{ $activity->title }}</a>
						</h3>
						<div class="post-meta">
							<div class="meta-info">
								<i class="entypo-calendar"></i> {{ ($activity->updated_at)->format('F d, Y') }}
							</div>
						</div>
					</div>
					<div class="post-content">
						<p style="text-align: justify;">{{ $activity->description }}</p>
					</div>
					<div class="post-content">
						<legend>More Photos</legend>
						@foreach($activity->photos->chunk(3) as $set)
						<div class="row">
							@foreach($set as $photo)
								<div class="col-md-4">
									<a href="/{{ $photo->path }}" data-lity>
										<img src="/{{ $photo->thumbnail_path }}" style="border: 2px dashed #d3d3d3; margin-bottom: 3em;">
									</a>
								</div>
							@endforeach
						</div>
					@endforeach
					</div>
					<br/>
				</div>
			</div>
		</div>
	</div>
</section>