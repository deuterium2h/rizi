<div class="panel panel-dark">
	<div class="panel-heading">
		<div class="panel-title">
			<strong>{{ $citizen->last_name }}, {{ $citizen->first_name }} {{ $citizen->middle_name }}'s Profile</strong> | Citizen ID: {{ $citizen->id }}
		</div>
		<div class="panel-options">
			<a href="/citizen/{{ $citizen->id }}/edit" class="btn btn-success btn-xs pull-right">
				<i class="entypo-pencil"></i>
			</a>
			<a class="pull-right">
				<form class="" method="POST" action="/citizen/{{ $citizen->id }}">
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
		<legend>Citizen's Information</legend>
		<div class="form-group">
			<div class="col-md-5">
				{!! Form::label('complete-name', 'Complete Name:') !!}
				<div id="complete-name" name="complete-name">{{ $citizen->last_name }}, {{ $citizen->first_name }} {{ $citizen->middle_name }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('contact_num', 'Contact Number:') !!}
				<div id="contact_num" name="contact_num">{{ $citizen->contact_num }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('gender', 'Gender:') !!}
				<div id="gender" name="gender">{{ $citizen->gender }}</div>
			</div>
			<div class="col-md-2 pull-right" style="float: left;">
				<img src="/images/citizens/{{ $citizen->avatar }}" 
					 alt="{{ $citizen->last_name }}, {{ $citizen->first_name }} {{ $citizen->middle_name }}" 
					 class="pull-right" 
					 style="width:110px; height:110px; border: 4px solid #c1c1c1;">
			</div>
		</div>&nbsp;

		<div class="form-group">
			<div class="col-md-12">
				{!! Form::label('address', 'Current Address:') !!}
				<div id="address" name="address"><p>{{ $citizen->address }}</p></div>
			</div>
		</div>&nbsp;

		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('birthdate', 'Date of Birth:') !!}
				<div id="birthdate" name="birthdate">{{ $citizen->birthdate }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('civil_status', 'Civil Status:') !!}
				<div id="civil_status" name="civil_status">{{ $citizen->civil_status }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('weight', 'Weight:') !!}
				<div id="weight" name="weight">{{ $citizen->weight }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('height', 'Height:') !!}
				<div id="height" name="height">{{ $citizen->height }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('bloodtype', 'Blood Type:') !!}
				<div id="bloodtype" name="bloodtype">{{ $citizen->bloodtype }}</div>
			</div>
		</div>&nbsp;

		
		<div class="form-group">
			<div class="col-md-6">
				{!! Form::label('sss_no', 'SSS Number:') !!}
				<div id="sss_no" name="sss_no">{{ $citizen->sss_no }}</div>
			</div>
			<div class="col-md-6">
				{!! Form::label('tin', 'Tax Identification Number:') !!}
				<div id="tin" name="tin">{{ $citizen->tin }}</div>
			</div>
		</div>&nbsp;
		
		<legend>Person to Notify in case of Emergency</legend>
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('guardian_name', 'Name of Guardian:') !!}
				<div id="guardian_name" name="guardian_name">{{ $citizen->guardian_name }}</div>
			</div>
			<div class="col-md-5">
				{!! Form::label('guardian_address', 'Address:') !!}
				<div id="guardian_address" name="guardian_address">{{ $citizen->guardian_address }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('guardian_contact_num', 'Contact Number:') !!}
				<div id="guardian_contact_num" name="guardian_contact_num">{{ $citizen->guardian_contact_num }}</div>
			</div>
		</div>&nbsp;<hr>
		
		<div class="form-group">
			<div class="col-md-6">
				{!! Form::label('validity', 'Valid Until:') !!}
				<div id="validity" name="validity">{{ $citizen->validity }}</div>
			</div>
		</div>
	</div>
</div>