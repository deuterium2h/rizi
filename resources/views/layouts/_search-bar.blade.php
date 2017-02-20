{!! Form::open(['method' => 'GET']) !!}
	<div class="form-group input-group"><span class="input-group-addon"><i class="entypo-search"></i></span>
	{!! Form::input('search', 'q', null, ['class' => 'form-control input-lg', 'placeholder' => 'Search...']) !!}
	<span class="input-group-btn">{!! Form::submit('Go!', ['class' => 'btn btn-primary btn-lg']) !!}</span>
	</div>
{!! Form::close() !!}