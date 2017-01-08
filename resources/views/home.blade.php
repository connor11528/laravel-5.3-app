@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<h1>Welcome to Home Page</h1>

        	<p>You have to be logged in in order to see this page!</p>

        	<a href='/candidates' class='btn btn-primary'>Go to candidates</a>
        </div>
    </div>
</div>
@endsection
