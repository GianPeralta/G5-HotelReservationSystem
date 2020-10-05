@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<form action="/room-types" method='POST'>
					@include('layouts.errors')
					@csrf
					<h5>Create a new Room Type</h5>
				  	<div class="form-group">
					    <label for="standard_rate">Standard Rate</label>
					    <input type="number" class="form-control" name="standard_rate" required>
				  	</div>
					<div class="form-group">
					    <label for="description">Description</label>
					    <input type="text" class="form-control" name="description" required>
				  	</div>
				  	<button type="submit" class="btn btn-primary" name="action">Submit</button>
				</form>
			</div>
		</div>
	</div>
@endsection
