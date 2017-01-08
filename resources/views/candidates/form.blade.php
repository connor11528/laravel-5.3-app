
<div class='form-group'>
	{!! Form::label('name', 'Name:') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
	{!! Form::label('email', 'Email:') !!}
	{!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
	{!! Form::label('phone', 'Phone:') !!}
	{!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
	{!! Form::label('latitude', 'Latitude:') !!}
	{!! Form::text('latitude', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
	{!! Form::label('longitude', 'Longitude:') !!}
	{!! Form::text('longitude', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
	{!! Form::label('city', 'City:') !!}
	{!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
	{!! Form::label('state', 'State:') !!}
	{!! Form::text('state', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
	{!! Form::label('zip', 'Zip:') !!}
	{!! Form::text('zip', null, ['class' => 'form-control']) !!}
</div> 

<div class='form-group'>
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-lg btn-success form-control']) !!}
</div>
