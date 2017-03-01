<div class="form-group">
	{!! Form::label('title', 'Title:') !!}
	{!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group">
	{!! Form::label('body', 'News Content:') !!}
	{!! Form::textarea('body', null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group">
	{!! Form::label('category', 'News Category:') !!}
	{!! Form::select('category', ['Economical' => 'Economical', 'Political' => 'Political', 'Security' => 'Security', 'Others' => 'Others'], null, ['class' => 'form-control', 'placeholder' => 'Select a Category', 'required']) !!}
</div>
<div class="form-group">
	{!! Form::label('posted_by', 'Published By:') !!}
	{!! Form::text('posted_by', Auth::user()->name, ['class' => 'form-control', 'readonly']) !!}
</div>
<div class="form-group">
	{!! Form::submit($submitButton, ['class' => 'btn btn-primary form-control']) !!}
</div>

{!! Form::close() !!}