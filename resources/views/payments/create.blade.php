@extends('layouts.master')

@section('content')
	<form action="/payments" method='POST'>
		@csrf
		<h5>Create Payments</h5>
	  	<div class="form-group">
		    <label for="status">Status</label>
		    <input type="text" class="form-control" name="status" required placeholder="Status">
	  	</div>
	  	<div class="form-group">
		    <label for="description">Description</label>
		    <input type="text" class="form-control" name="description" required placeholder="Description">
	  	</div>
	  	<button type="submit" class="btn btn-primary" name="action">Submit</button>
	</form>
@endsection