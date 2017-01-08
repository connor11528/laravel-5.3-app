
@extends('layouts.app')

@section('content')
	<h1>Candidates</h1>
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
@stop
