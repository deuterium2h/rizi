<div class="col-md-12">
	<div class="panel panel-dark">
		<div class="panel-heading">
			<div class="panel-title">
				<h3 style="color: white;"><strong>{{ $permit->name }}'s Business Permit Information</strong></h3>
			</div>
			<div class="panel-options">
				<a href="/permit/{{ $permit->id }}/edit" class="btn btn-success btn-xs pull-right">
					<i class="entypo-pencil"></i>
				</a>
				<a class="pull-right">
					<form class="" method="POST" action="/permit/{{ $permit->id }}">
						{!! csrf_field() !!}
						<input type="hidden" name="_method" value="DELETE">
						<button type="submit" class="btn btn-danger btn-xs">
							<i class="entypo-trash"></i>
						</button>
					</form>
				</a>
			</div>
		</div>
		<div class="panel-body">
			<legend>Business Information</legend>
			<div class="form-group">
				<div class="row">
					<div class="col-md-12">
						{{ Form::label('business_name', 'Business Name:') }}
						<div id="business_name" name="business_name">{{ $permit->business_name }}</div>
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-6">
						{{ Form::label('business_type', 'Business Type:') }}
						<div id="business_type" name="business_type">{{ $permit->business_type }}</div>
					</div>
					<div class="col-md-6">
						{{ Form::label('business_address', 'Business Address:') }}
						<div id="business_address" name="business_address">{{ $permit->business_address }}</div>
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-6">
						{{ Form::label('business_owner', 'Business Owner/s:') }}
						<div id="business_owner" name="business_owner">{{ $permit->business_owner }}</div>
					</div>
					<div class="col-md-6">
						{{ Form::label('payment', 'Payment:') }}
						<div id="payment" name="payment">{{ $permit->payment }}</div>
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-12">
						{{ Form::label('validity', 'Valid Until:') }}
						<div id="validity" name="validity">{{ $permit->validity }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>