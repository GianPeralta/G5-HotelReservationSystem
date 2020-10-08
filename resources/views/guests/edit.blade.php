@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<form action="/guests/{{ $guest->id }}" method='POST'>
					@method('PUT')
					@include('layouts.errors')
					@csrf
					<h5>Edit Guest</h5>
				  	<div class="form-group">
					    <label for="first_name">First Name</label>
					    <input type="text" class="form-control" name="first_name" value="{{ $guest->first_name }}" required>
				  	</div>
				  	<div class="form-group">
					    <label for="last_name">Last Name</label>
					    <input type="text" class="form-control" name="last_name" value="{{ $guest->last_name }}" required>
				  	</div>
				  	<div class="form-group">
					    <label for="contact_number">Contact Number</label>
					    <input type="number" class="form-control" maxlength="11" name="contact_number" value="{{ $guest->contact_number }}" required>
				  	</div>
					<div class="form-group">
					    <label for="email">Email</label>
					    <input type="text" class="form-control" name="email" value="{{ $guest->email }}" required>
				  	</div>
				  	<button type="button" onclick="location.href='/guests/{{ $guest->id }}';" class="btn btn-primary">
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
