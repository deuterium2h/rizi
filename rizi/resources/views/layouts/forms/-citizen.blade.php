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
						{!! Form::select('gender', ['' => '', 'Male' => 'Male', 'Female' => 'Female'], null, ['class' => 'form-control']) !!}
					</div>
					<div class="col-md-3">
						{!! Form::label('civil_status', 'Civil Status:') !!}
						{!! Form::select('civil_status', ['' => '', 'Single' => 'Single', 'Married' => 'Married'], null, ['class' => 'form-control']) !!}
					</div>
					<div class="col-md-3">
						{!! Form::label('contact_num', 'Contact Number:') !!}
						{!! Form::text('contact_num', old('contact_num'), ['class' => 'form-control', 'data-mask' => '(0999) 999-9999', 'placeholder' => '(09XX) XXX-XXXX']) !!}
					</div>
					<div class="col-md-3">
						{!! Form::label('birthdate', 'Birthdate:') !!}
						{!! Form::date('birthdate', old('birthdate'), ['class' => 'form-control']) !!}
					</div>
				</div>
				<legend><h3>Person to contact in case of Emergency</h3></legend>
				<div class="row">
					<div class="col-md-4">
						{!! Form::label('guardian_name', 'Complete Name:') !!}
						{!! Form::text('guardian_name', old('guardian_name'), ['class' => 'form-control', 'required']) !!}
					</div>
					<div class="col-md-8">
						{!! Form::label('guardian_address', 'Address:') !!}
						{!! Form::text('guardian_address', old('guardian_address'), ['class' => 'form-control', 'placeholder' => 'Complete Address', 'required']) !!}
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-4">
						{!! Form::label('guardian_relation', 'Relation to Guardian:') !!}
						{!! Form::text('guardian_relation', old('guardian_relation'), ['class' => 'form-control']) !!}
					</div>
					<div class="col-md-4">
						{!! Form::label('guardian_tel_num', 'Telephone Number:') !!}
						{!! Form::text('guardian_tel_num', old('guardian_tel_num'), ['class' => 'form-control', 'data-mask' => '999-9999', 'placeholder' => 'XXX-XXXX']) !!}
					</div>
					<div class="col-md-4">
						{!! Form::label('guardian_cell_num', 'Cellphone Number:') !!}
						{!! Form::text('guardian_cell_num', old('guardian_cell_num'), ['class' => 'form-control', 'data-mask' => '(0999) 999-9999', 'placeholder' => '(09XX) XXX-XXXX', 'required']) !!}
					</div>
				</div><hr>
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