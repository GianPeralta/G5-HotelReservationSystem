@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<form action="/services/{{ $service->id }}" method='POST'>
					@method('PUT')
					@include('layouts.errors')
					@csrf
					<h5>Edit Service</h5>
				  	<div class="form-group">
					    <label for="name">Name</label>
					    <input type="text" class="form-control" name="name" value="{{ $service->name }}" required>
				  	</div>
				  	<div class="form-group">
					    <label for="description">Description</label>
					    <input type="text" class="form-control" name="description" value="{{ $service->description }}" required>
				  	</div>
				  	<div class="form-group">
					    <label for="guest_id">Guest ID</label>
					    <input type="number" class="form-control" name="guest_id" value="{{ $service->guest_id }}" required>
				  	</div>
				  	<button type="button" onclick="location.href='/services/{{ $service->id }}';" class="btn btn-primary">
				  		Cancel
				  		<i class="material-icons right">cancel</i>
				  	</button>
				  	<button type="submit" class="btn btn-primary" name="action">
				  		Save
				  		<i class="material-icons right">save</i>
				  	</button>
				</form>
			</div>
		</div>
	</div>
@endsection
