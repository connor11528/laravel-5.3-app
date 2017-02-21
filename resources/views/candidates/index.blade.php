
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
		<h1>Candidates</h1>
		<table id="table"></table>
		
		<a href="{{ route('candidates.create') }}" class="btn btn-default">Add Candidate</a>
		<div>
			@forelse($candidates as $candidate)
				<h2>
					<a href="{{ url('/candidates', $candidate->id) }}">
						{{ $candidate->name }}
					</a>
				</h2>
				<a href="{{ route('candidates.edit', $candidate->id) }}">
					Edit candidate
				</a>
				<div class='body'>
					<pre>{{ $candidate }}</pre>
				</div>
				
			@empty
				<p>There are no candidates to display!</p>
			@endforelse
		</div>
	</div>
</div>
@stop
