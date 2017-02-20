@extends('layouts.app')

@section('content')
	<div class='col-md-6 col-md-offset-3'>
		<h1>Add New Candidate</h1>

		<hr>

		<candidates-form endpoint='/candidates' buttontext='Add Candidate'></candidates-form>
	</div>
@stop


