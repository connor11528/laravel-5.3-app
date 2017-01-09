
<div class='form-group'>
	{!! Form::label('name', 'Name:') !!}
	{!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
</div>

<div class='form-group'>
	{!! Form::label('email', 'Email:') !!}
	{!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) !!}
</div>

<div class='form-group'>
	{!! Form::label('phone', 'Phone:') !!}
	{!! Form::text('phone', null, ['class' => 'form-control', 'id' => 'phone']) !!}
</div>

<div class='form-group'>
	<label>Location:</label>
	<input id="location" type="text" name='location' class='form-control'>
</div>

<script>
var input, autocomplete;

function initialize() {

	input = document.getElementById('location');
	autocomplete = new google.maps.places.Autocomplete(input);
}

google.maps.event.addDomListener(window, 'load', initialize);

function createCandidate(a, b, c){
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var phone = document.getElementById("phone").value;

	var place = autocomplete.getPlace();
	console.log(place);

	var latitude = place.geometry.location.lat();
	var longitude = place.geometry.location.lng();
	console.log(latitude, longitude);

	// for grabbing the rest of the address components:
	// https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete-addressform

	// then send form to server etc

}

function editCandidate(){
	console.log('edit form submitted!');
}
</script>

<div class='form-group'>
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-lg btn-success form-control']) !!}
</div>
