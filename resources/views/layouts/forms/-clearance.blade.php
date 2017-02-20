<div class="col-md-12">
	<div class="panel panel-dark">
		<div class="panel-heading">
			<div class="panel-title">
				<h3 style="color: white;">Clearance Form</h3>
			</div>
			<div class="panel-options">
				<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
			</div>
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
					{{-- @unless (Auth::guest())	 --}}
						<div class="col-md-3">
							{!! Form::label('control_num', 'Control No.:') !!}
							{!! Form::text('control_num', old('control_num'), ['class' => 'form-control']) !!}
						</div>
					{{-- @endunless --}}
				</div><br>
				<div class="row" id="2nd-row">
					<div class="col-md-12">
						{!! Form::label('address', 'Address:') !!}
						{!! Form::text('address', old('address'), ['class' => 'form-control', 'placeholder' => 'Complete Address', 'required']) !!}
					</div><br>
				</div>
				<div class="row" id="3rd-row">
					<div class="col-md-4">
						{!! Form::label('birthdate', 'Date of Birth:') !!}
						{!! Form::date('birthdate', old('birthdate'), ['class' => 'form-control']) !!}
					</div>
					<div class="col-md-4">
						{!! Form::label('birthplace', 'Place of Birth:') !!}
						{!! Form::text('birthplace', old('birthplace'), ['class' => 'form-control']) !!}
					</div>
					<div class="col-md-4">
						{!! Form::label('purpose', 'Purpose:') !!}
						{!! Form::text('purpose', old('purpose'), ['class' => 'form-control', 'placeholder' => 'Brief Description']) !!}
					</div>
				</div><hr>
				<div class="row">
					<div class="col-md-4">
						{!! Form::label('ctc_num', 'CTC Number:') !!}
						{!! Form::text('ctc_num', old('ctc_num'), ['class' => 'form-control']) !!}
					</div>
					<div class="col-md-4">
						{!! Form::label('issued_at', 'Issued At:') !!}
						{!! Form::date('issued_at', old('issued_at'), ['class' => 'form-control']) !!}
					</div><div class="col-md-4">
						{!! Form::label('issued_on', 'Issued On:') !!}
						{!! Form::date('issued_on', old('issued_on'), ['class' => 'form-control']) !!}
					</div>
				</div><hr>
				<div class="row">
					<div class="col-md-12">
						{!! Form::label('validity', 'Valid Until:') !!}
						{!! Form::text('validity', $submitButton=='Register' ? Carbon\Carbon::now()->addYear()->format('F j, Y') : old('validity'), ['class' => 'form-control', 'readonly']) !!}
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-12">
						{!! Form::submit($submitButton, ['class' => 'btn btn-success form-control']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>