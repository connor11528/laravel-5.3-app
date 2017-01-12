@extends('layouts.app')

@section('content')

	<div class='col-md-6 col-md-offset-3'>
		<h1>Add New Candidate</h1>

		<hr>

		<candidates-form endpoint='/candidates/create' buttontext='Add Candidate'></candidates-form>
		
		{{-- 		
		{!! Form::open(['action' => 'CandidateController@store', 'onsubmit' => 'createCandidate(); return false;']) !!}
			@include('candidates.form', ['submitButtonText' => 'Add Candidate'])
		{!! Form::close() !!} 
		--}}

		
	</div>
@stop


