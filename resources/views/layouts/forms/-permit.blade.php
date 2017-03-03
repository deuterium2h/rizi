<div class="col-md-12">
	<div class="panel panel-dark">
		<div class="panel-heading">
			<div class="panel-title">
				<h3 style="color: white;">Business Permit Form</h3>
			</div>
		</div>
		<div class="panel-body">
			<legend><h3 style="margin-top: -2px;">Business Infomation</h3></legend>
			<div class="form-group">
				<div class="row">
					<div class="col-md-12">
						{{ Form::label('business_name', 'Business Name:') }}
						{{ Form::text('business_name', old('business_name'), ['class' => 'form-control', 'placeholder' => 'Name of the business', 'required']) }}
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-6">
						{{ Form::label('business_type', 'Business Type:') }}
						{{ Form::text('business_type', old('business_type'), ['class' => 'form-control', 'placeholder' => 'Type of Business', 'required']) }}
					</div>
					<div class="col-md-6">
						{{ Form::label('business_address', 'Business Address:') }}
						{{ Form::text('business_address', old('business_address'), ['class' => 'form-control', 'placeholder' => 'Complete Address', 'required']) }}
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-6">
						{{ Form::label('business_owner', 'Business Owner/s:') }}
						{{ Form::text('business_owner', old('business_owner'), ['class' => 'form-control', 'placeholder' => 'Complete Name of the Owner/s', 'required']) }}
					</div>
					<div class="col-md-6">
						{{ Form::label('payment', 'Payment:') }}
						{{ Form::text('payment', old('payment'), ['class' => 'form-control', 'placeholder' => 'Amount Paid', 'required', 'data-mask' => '99999']) }}
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-12">
						{{ Form::label('validity', 'Vaild Until:') }}
						{{ Form::text('validity', $submitButton=='Register' ? Carbon\Carbon::now()->addYear()->format('F j, Y') : old('validity'), ['class' => 'form-control', 'readonly']) }}
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-12">
						<div class="g-recaptcha" data-sitekey="6LeXexcUAAAAAAVyEt0VSq5fDKKeNNecu6Ct1VOM"></div>
					</div>
					<br>
					<div class="col-md-12">
						{!! Form::submit($submitButton, ['class' => 'btn btn-success form-control']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{!! Form::close() !!}