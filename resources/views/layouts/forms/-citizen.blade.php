<div class="col-md-12">
	<div class="panel panel-dark">
		<div class="panel-heading">
			<div class="panel-title">
				<h3 style="color: white;">Applicant's Information</h3>
			</div>
			{{-- <div class="panel-options">
				<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
			</div> --}}
		</div>
		<div class="panel-body">
				<legend><h3 style="margin-top: -2px;">Personal Infomation</h3></legend>
			<div class="form-group">
				<div class="row" id="1st-row">
					<div class="col-md-3">
						{!! Form::label(null, 'Complete Name:', ['class' => 'control-label']) !!}
						{!! Form::text('last_name', old('last_name'), ['class' => 'form-control', 'placeholder' => 'Last Name', 'required']) !!}
					</div>
					<div class="col-md-3">
						{!! Form::label(null, '&nbsp;') !!}
						{!! Form::text('first_name', old('first_name'), ['class' => 'form-control', 'placeholder' => 'First Name', 'required']) !!}	
					</div>
					<div class="col-md-3">
						{!! Form::label(null, '&nbsp;') !!}
						{!! Form::text('middle_name', old('middle_name'), ['class' => 'form-control', 'placeholder' => 'Middle Name']) !!}
					</div>
					@unless (Auth::guest())
						<div class="col-md-3">
							<div class="fileinput fileinput-new" data-provides="fileinput">
							{!! Form::label('avatar', 'Applicant Photo:') !!}
							<br>
								<span class="btn btn-info btn-file" name="avatar">
									<span class="fileinput-new">Select file</span>
									<span class="fileinput-exists">Change</span>
									{!! Form::file('avatar', ['accept' => 'image/*']) !!}
								</span>
								<span class="fileinput-filename"></span>
								<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
							</div>
						</div>
					@endunless
				</div><br>
				<div class="row" id="2nd-row">
					<div class="col-md-12">
						{!! Form::label('address', 'Address:') !!}
						{!! Form::text('address', old('address'), ['class' => 'form-control', 'placeholder' => 'Complete Address', 'required']) !!}
					</div><br>
				</div>
				<div class="row" id="3rd-row">
					<div class="col-md-3">
						{!! Form::label('gender', 'Gender:') !!}
						{!! Form::select('gender', ['Male' => 'Male', 'Female' => 'Female'], null, ['class' => 'form-control', 'placeholder' => 'Select a Gender']) !!}
					</div>
					<div class="col-md-3">
						{!! Form::label('civil_status', 'Civil Status:') !!}
						{!! Form::select('civil_status', ['Single' => 'Single', 'Married' => 'Married'], null, ['class' => 'form-control', 'placeholder' => 'Select a Civil Status']) !!}
					</div>
					<div class="col-md-3">
						{!! Form::label('contact_num', 'Contact Number:') !!}
						{!! Form::text('contact_num', old('contact_num'), ['class' => 'form-control', 'data-mask' => '(0999) 999-9999', 'placeholder' => '(09XX) XXX-XXXX']) !!}
					</div>
					<div class="col-md-3">
						{!! Form::label('birthdate', 'Birthdate:') !!}
						{!! Form::date('birthdate', old('birthdate'), ['class' => 'form-control']) !!}
					</div>
				</div><br>
				<div class="row" id="4th-row">
					<div class="col-md-3">
						{!! Form::label('tin', 'Tax Identification Number:') !!}
						{!! Form::text('tin', old('tin'), ['class' => 'form-control', 'placeholder' => 'XXX-XXX-XXX-XXX', 'required', 'data-mask' => '999-999-999-999']) !!}
					</div>
					<div class="col-md-3">
						{!! Form::label('sss', 'SSS Number:') !!}
						{!! Form::text('sss', old('sss'), ['class' => 'form-control', 'placeholder' => 'XXX-XXX-XXX', 'required', 'data-mask' => '999-999-999']) !!}
					</div>
					<div class="col-md-2">
						{!! Form::label('bloodtype', 'Blood Type:') !!}
						{!! Form::select('bloodtype', 
							['AB+' => 'AB+', 'AB-' => 'AB-', 'A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+', 'B-' => 'B-', 'O+' => 'O+', 'O-' => 'O-' ], null, ['class' => 'form-control', 'placeholder' => 'Select a Blood Type']) !!}
					</div>
					<div class="col-md-2">
						{!! Form::label('weight', 'Weight:') !!}
						<div class="input-group">
							{!! Form::text('weight', old('weight'), ['placeholder' => 'XXX', 'class' => 'form-control', 'aria-describedby' => 'weight-addon', 'required', 'data-mask' => '999']) !!}
							<i class="input-group-addon" id="weight-addon">Kg</i>
						</div>
					</div>
					<div class="col-md-2">
						{!! Form::label('height', 'Height:') !!}
						<div class="input-group">
							{!! Form::text('height', old('height'), ['placeholder' => 'XXX', 'class' => 'form-control', 'aria-describedby' => 'height-addon', 'required', 'data-mask' => '999']) !!}
							<i class="input-group-addon" id="height-addon">cm</i>
						</div>
					</div>
				</div>
				<legend><h3>Person to contact in case of Emergency</h3></legend>
				<div class="row">
					<div class="col-md-3">
						{!! Form::label('guardian_name', 'Complete Name:') !!}
						{!! Form::text('guardian_name', old('guardian_name'), ['class' => 'form-control', 'required']) !!}
					</div>
					<div class="col-md-3">
						{!! Form::label('guardian_contact_num', 'Contact Number:') !!}
						{!! Form::text('guardian_contact_num', old('guardian_contact_num'), ['class' => 'form-control',  'placeholder' => '(XXXX) XXX-XXXX', 'required']) !!}
					</div>
					<div class="col-md-6">
						{!! Form::label('guardian_address', 'Address:') !!}
						{!! Form::text('guardian_address', old('guardian_address'), ['class' => 'form-control', 'placeholder' => 'Complete Address', 'required']) !!}
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-12">
						{!! Form::label('validity', 'Valid Until:') !!}
						{!! Form::text('validity', $submitButton=='Register' ? Carbon\Carbon::now()->addYear()->format('F j, Y') : old('validity'), ['class' => 'form-control', 'readonly']) !!}
					</div>
				</div><hr>
				<div class="row">
					<div class="col-md-12">
						{!! Form::submit($submitButton, ['class' => 'btn btn-success form-control']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{!! Form::close() !!}