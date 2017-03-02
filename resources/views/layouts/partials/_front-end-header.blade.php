<div class="site-header-container container">
	<div class="row">
		<div class="col-md-12">
			<header class="site-header">
				<section class="site-logo">
					<a href="/">
						<img src="/images/1ANTIPOLO.png" height="100" />
					</a>
				</section>

				<nav class="site-nav">
					<ul class="main-menu hidden-xs" id="main-menu">
						<li class="{{ Request::is('/') ? 'active' : '' }}">
							<a href="/">
								<span>Home</span>
							</a>
						</li>
						<li class="{{ Request::is('brgy-activities*')||Request::is('brgy-ordinance')||Request::is('local-news*') ? 'active' : '' }}">
							<a>
								<span>Services</span>
							</a>
							<ul>
								<li>
									<a href="/brgy-ordinance">
										<span>Ordinance</span>
									</a>
								</li>
								<li>
									<a href="/local-news">
										<span>News</span>
									</a>
								</li>
								<li>
									<a href="/brgy-activities">
										<span>Activities</span>
									</a>
								</li>
								<li>
									<a href="/registered">
										<span>List of</span>
									</a>
									<ul>
										<li>
											<a href="/registered#business">
												<span>Registered Business</span>
											</a>
										</li>
										<li>
											<a href="/registered#citizens">
												<span>Registered Citizens</span>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="{{ Request::is('apply-for-permit')||Request::is('apply-for-cedula')||Request::is('apply-for-citizenship')||Request::is('apply-for-clearance') ? 'active' : '' }}">
							<a>
								<span>Register Online</span>
							</a>
							<ul>
								<li>
									<a href="/apply-for-permit">
										<span>Business Permit</span>
									</a>
								</li>
								<li>
									<a href="/apply-for-cedula">
										<span>Cedula</span>
									</a>
								</li>
								<li>
									<a href="/apply-for-citizenship">
										<span>Citizenship</span>
									</a>
								</li>
								<li>
									<a href="/apply-for-clearance">
										<span>Clearance</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="{{ Request::is('about-us') ? 'active' : '' }}">
							<a href="/about-us">
								<span>About Us</span>
							</a>
						</li>
					</ul>
					<div class="visible-xs">
						<a href="#" class="menu-trigger">
							<i class="entypo-menu"></i>
						</a>
					</div>
				</nav>
			</header>
		</div>
	</div>
</div>