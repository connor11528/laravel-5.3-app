@extends('layouts.app')

@section('content')
	<h1>{{ $candidate->name }}</h1>

	<div class='body'>
		<pre>{{ $candidate }}</pre>
	</div>
@stop
