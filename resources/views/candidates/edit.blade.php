@extends('layouts.app')

@section('content')

	<div class='col-md-6 col-md-offset-3'>
		<h1>Edit Candidate</h1>

		<hr>
		
		{!! Form::model($candidate, ['method' => 'PATCH', 'action' => ['CandidateController@update',$candidate->id]]) !!}
			@include('candidates.form', ['submitButtonText' => 'Edit Candidate'])
		{!! Form::close() !!}
	</div>
@stop