<section class="portfolio-widget">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="portfolio-info">
					<h3>
						<a href="#">Latest News</a>
					</h3>
					<p>Local news and trends in the barangay.</p>
				</div>
			</div>
			@foreach($articles as $news)
			<div class="col-sm-3">
				<!-- Portfolio Item in Widget -->
				<div class="portfolio-item">
					<a href="/local-news/{{ $news->id }}" class="image">
						<img src="{{ $news->photos->first()->path }}" class="img-rounded img-size" />
						<span class="hover-zoom"></span>
					</a>
					<h4>
						<a href="/local-news/{{ $news->id }}" class="name">{{ $news->title }}</a>
					</h4>
					<div class="categories">
						<a href="/local-news/{{ $news->id }}">{{ $news->category }}</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>