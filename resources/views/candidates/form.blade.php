
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
	<label>Location:</label>
	<input id="searchTextField" type="text" name='location' class='form-control'>
</div>

<script>
function initialize() {

	var input = document.getElementById('searchTextField');
	var autocomplete = new google.maps.places.Autocomplete(input);
}

google.maps.event.addDomListener(window, 'load', initialize);

function handleSubmit(input){
	console.log('form submitted!');
	console.log(input);
}
</script>
{{-- 
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
</div>  --}}

<div class='form-group'>
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-lg btn-success form-control']) !!}
</div>
