@extends('layouts.default')
@section('content')
    
	
	<form action="/checkin" method="post">
		<label>First Name</label>
		<input type="text" name="first_name">

		<label>Last Name</label>
		<input type="text" name="last_name">

		<input type="hidden" name="_method" value="POST">
	    <input type="hidden" name="_token" value="{{ csrf_token() }}">

	    <input type="submit" value="Save Data!">
	</form>

@stop