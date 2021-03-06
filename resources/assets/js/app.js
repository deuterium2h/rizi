
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('citizen', {
	props: ['id', 'name', 'address', 'birthday', 'gender'],

	template: `
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-dark">
				<div class="panel-heading">
					<div class="panel-title">Brgy.ID No.: {{ id }}</div>
					<div class="panel-options">
						&nbsp;
						<slot name="update"></slot>
						&nbsp;
						<slot name="view"></slot>
						&nbsp;
						<slot name="dropdown"></slot>
					</div>
				</div>

				<div class="panel-body">
					<h4>
						<center><b>Resident Identification</b></center><hr>
						<div class="row">
							<div class="col-md-3">
								<slot></slot>
							</div>
							<div class="col-md-9">
								<div class="row">
									<b><label for="name" class="control-label col-md-2">Name:</label></b>
									<div class="col-md-10">{{ name }}</div>
								</div>
								<br>
								<div class="row">
									<b><label for="address" class="control-label col-md-2">Address:</label></b>
									<div class="col-md-10">
										{{ address }}
									</div>
								</div>
								<br>
								<div class="row">
									<b><label for="birthday" class="control-label col-md-2">Birthday:</label></b>
									<div class="col-md-10">
										{{ birthday }}
									</div>
								</div>
								<br>
								<div class="row">
									<b><label for="gender" class="control-label col-md-2">Gender:</label></b>
									<div class="col-md-10">
										{{ gender }}
									</div>
								</div>
							</div>
						</div>
					</h4>
				</div>
			</div>
		</div>
	`
});

Vue.component('permit', {
	props: ['name', 'owner', 'validity', 'address'],

	template: `
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-dark">
				<div class="panel-heading">
					<div class="panel-title">Owner: {{ owner }}</div>
					<div class="panel-options">
						&nbsp;
						<slot name="update"></slot>
						&nbsp;
						<slot name="view"></slot>
						&nbsp;
						<slot name="dropdown"></slot>
					</div>
				</div>

				<div class="panel-body">
					<h4>
						<center><b>Business Permit Information</b></center><hr>
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<b><label for="name" class="control-label col-md-2">Business Name:</label></b>
									<div class="col-md-10">{{ name }}</div>
								</div>
								<br>
								<div class="row">
									<b><label for="address" class="control-label col-md-2">Address:</label></b>
									<div class="col-md-10">
										{{ address }}
									</div>
								</div>
								<br>
								<div class="row">
									<b><label for="validity" class="control-label col-md-2">Validity:</label></b>
									<div class="col-md-10">
										{{ validity }}
									</div>
								</div>
								<br>
							</div>
						</div>
					</h4>
				</div>
			</div>
		</div>
	`
});

const datacard = new Vue({
	el: '#data-card'
});
