\<section class="blog">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="blog-posts">
					<!-- Blog Post -->
					@foreach($articles as $news)
					<div class="blog-post">
						<div class="post-thumb">
							<a href="local-news/{{ $news->id }}">
								<img src="{{ $news->photos->first()->path }}" class="img-rounded img-size" />
								<span class="hover-zoom"></span>
							</a>
						</div>
						<div class="post-details">
							<h3>
								<a href="local-news/{{ $news->id }}">{{ $news->title }}</a>
							</h3>
							<div class="post-meta">
								<div class="meta-info">
									<i class="entypo-calendar"></i> {{ ($news->updated_at)->format('F d, Y') }}
								</div>
							</div>
							<p>{{ str_limit($news->body, 620) }}</p>
						</div>
					</div>
					@endforeach
					<!-- Blog Pagination -->
					<div class="text-center">
						{{ $articles->links() }}
					</div>
				</div>
			</div>
			@include('layouts.partials._category-sidebar')
		</div>
	</div>
</section>