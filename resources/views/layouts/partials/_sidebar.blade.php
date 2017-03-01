<div class="sidebar-menu">

	<header class="logo-env">

		<!-- logo -->
		<div class="logo">
			<a href="http://rizi.dev">
				<img src="/images/risi-sidebar.png" width="120" alt="" />
			</a>
		</div>

		<!-- logo collapse icon -->
		<div class="sidebar-collapse">
			<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
				<i class="entypo-menu"></i>
			</a>
		</div>

		<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
		<div class="sidebar-mobile-menu visible-xs">
			<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
				<i class="entypo-menu"></i>
			</a>
		</div>

	</header>

	<ul id="main-menu" class="auto-inherit-active-class">
		<!-- add class "multiple-expanded" to allow multiple submenus to open -->
		<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
		<!-- Search Bar -->
		{{-- <li id="search">
			<form method="get" action="">
				<input type="text" name="q" class="search-input" placeholder="Search something..."/>
				<button type="submit">
					<i class="entypo-search"></i>
				</button>
			</form>
		</li> --}}
		<li class="{{ Request::is('home') ? 'active' : '' }}">
			<a href="/home">
				<i class="entypo-home"></i>
				<span>Home</span>
			</a>
		</li>
		<li class="{{ Request::is('citizen')||Request::is('permit')||Request::is('clearance') ? 'active opened active' : '' }}">
			<a href="citizen">
				<i class="entypo-docs"></i>
				<span>Barangay Documents</span>
				<span class="badge badge-secondary">8</span>
			</a>
			<ul>
				<li class="{{ Request::is('citizen') ? 'active' : '' }}">
					<a href="/citizen">
						<i class="entypo-users"></i>
						<span>Citizens (Barangay ID)</span>
					</a>
				</li>
				<li class="{{ Request::is('permit') ? 'active' : '' }}">
					<a href="/permit">
						<i class="entypo-newspaper"></i>
						<span>Barangay Business Permit</span>
					</a>
				</li>
				<li class="{{ Request::is('clearance') ? 'active' : '' }}">
					<a href="/clearance">
						<i class="entypo-doc-text"></i>
						<span>Barangay Clearance</span>
					</a>
				</li>
			</ul>
		</li>
		<li class="{{ Request::is('news') ? 'active' : '' }}">
			<a href="/news">
				<i class="entypo-clipboard"></i>
				<span>Barangay News</span>
			</a>
		</li>
		<li>
			<a href="">
				<i class="entypo-flow-tree"></i>
				<span>Organizational Chart</span>
			</a>
			<ul>
				<li>
					<a href="forms-main.html">
						<span>Barangay Employees</span>
					</a>
				</li>
				<li>
					<a href="forms-main.html">
						<span>Barangay Officials</span>
					</a>
				</li>
				<li>
					<a href="forms-main.html">
						<span>Municipal Officials</span>
					</a>
				</li>
				<li>
					<a href="forms-main.html">
						<span>Government Officials</span>
					</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="forms-main.html">
				<i class="entypo-chart-area"></i>
				<span>Barangay Status</span>
			</a>
			<ul>
				<li>
					<a href="forms-main.html">
						<span>Area 1</span>
					</a>
				</li>
				<li>
					<a href="forms-advanced.html">
						<span>Area 2</span>
					</a>
				</li>
				<li>
					<a href="forms-wizard.html">
						<span>Area 3</span>
					</a>
				</li>
				<li>
					<a href="forms-validation.html">
						<span>Area 4</span>
					</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="extra-icons.html">
				<i class="entypo-bag"></i>
				<span>Extra</span>
				<span class="badge badge-info badge-roundless">New Items</span>
			</a>
			<ul>
				<li>
					<a href="extra-portlets.html">
						<span>Portlets</span>
					</a>
				</li>
				<li>
					<a href="extra-gallery.html">
						<span>Gallery</span>
					</a>
					<ul>
						<li>
							<a href="extra-gallery.html">
								<span>Albums</span>
							</a>
						</li>
						<li>
							<a href="extra-gallery-single.html">
								<span>Single Album</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="extra-profile.html">
						<span>Profile</span>
					</a>
				</li>
			</ul>
		</li>
	</ul>
</div>