<!-- Navbar -->
<div class="row">
	<!-- Profile Info and Notifications -->
	<div class="col-md-6 col-sm-8 clearfix">
		<ul class="user-info pull-left pull-none-xsm">
			<!-- Profile Info -->
			<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<img src="/images/profiles/{{ Auth::user()->avatar }}" alt="" class="img-circle" width="44" />
					{{ Auth::user()->name }}  
				</a>

				<ul class="dropdown-menu">

					<!-- Reverse Caret -->
					<li class="caret"></li>

					<!-- Profile sub-links -->
					<li>
						<a href="/edit-profile">
							<i class="entypo-user"></i>
							Edit Profile
						</a>
					</li>
					<li>
						<a href="{{ url('/logout') }}"
						   onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
							<i class="entypo-logout right"></i>
							Log Out
						</a>
						<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</div>