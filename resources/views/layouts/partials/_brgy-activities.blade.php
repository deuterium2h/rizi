<section class="blog">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="blog-posts">
					<!-- Blog Post -->
					@foreach($activities as $activity)
					<div class="blog-post">
						<div class="post-thumb">
							<a href="brgy-activities/{{ $activity->id }}">
								<img src="{{ $activity->photos->first()->path }}" class="img-rounded img-size" />
								<span class="hover-zoom"></span>
							</a>
						</div>
						<div class="post-details">
							<h3>
								<a href="brgy-activities/{{ $activity->id }}">{{ $activity->title }}</a>
							</h3>
							<div class="post-meta">
								<div class="meta-info">
									<i class="entypo-calendar"></i> {{ ($activity->updated_at)->format('F d, Y') }}
								</div>
							</div>
							<p>{{ str_limit($activity->description, 620) }}</p>
						</div>
					</div>
					@endforeach
					<!-- Blog Pagination -->
					<div class="text-center">
						{{ $activities->links() }}
					</div>
				</div>
			</div>
			{{-- @include('layouts.partials._category-sidebar') --}}
		</div>
	</div>
</section>