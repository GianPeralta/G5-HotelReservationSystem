@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<form action="/staff-users/{{ $staff_user->id }}" method='POST'>
					@method('PUT')
					@include('layouts.errors')
					@csrf
					<h5>Edit Room</h5>
				  	<div class="form-group">
					    <label for="name">Name</label>
					    <input type="text" class="form-control" name="name" value="{{ $staff_user->name }}" required>
				  	</div>
				  	<div class="form-group">
					    <label for="user_role_id">User Role ID</label>
					    <input type="text" class="form-control" name="user_role_id" value="{{ $staff_user->user_role_id }}" required>
				  	</div>
				  	<button type="button" onclick="location.href='/staff-users/{{ $staff_user->id }}';" class="btn btn-primary">
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
