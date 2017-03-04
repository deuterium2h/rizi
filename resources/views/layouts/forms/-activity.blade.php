<div class="form-group">
	{!! Form::label('title', 'Title:') !!}
	{!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group">
	{!! Form::label('description', 'Description:') !!}
	{!! Form::textarea('description', null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group">
	<div class="row">
		<div class="col-md-6">
			{!! Form::label('start_date', 'Start Date:') !!}
			{!! Form::date('start_date', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-md-6">
			{!! Form::label('end_date', 'End Date:') !!}
			{!! Form::date('end_date', null, ['class' => 'form-control']) !!}
		</div>
	</div>
</div>
<div class="form-group">
	{!! Form::submit($submitButton, ['class' => 'btn btn-primary form-control']) !!}
</div>

{!! Form::close() !!}