@extends('layouts.master')

@section('content')
	<form action="/services" method='POST'>
		@csrf
		<h3>Create New Service</h3>
	  	<div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" name="name">
	  	</div>
      <div class="form-group">
		    <label for="description">Description</label>
		    <input type="text" class="form-control" name="description">
	  	</div>
      <div class="form-group">
		    <label for="guests_id">Guests</label>
		    <input type="number" class="form-control" name="guests_id">
	  	</div>
	  	<button type="submit" class="btn btn-primary" name="action">Submit</button>
	</form>
@endsection
