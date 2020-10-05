
	<form action="/staff-users/{{ $staff_user->id }}" method='POST'>
		@method('PUT')
		@include('layouts.errors')
		@csrf
		<h5>Edit Staff User</h5>
	  	<div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" name="name" value="{{ $staff_user->name }}" >
	  	</div>
		<div class="form-group">
		    <label for="user_role_id">User Role ID</label>
		    <input type="number" class="form-control" name="user_role_id" value="{{ $staff_user->user_role_id }}" >
		</div>
	  	<button type="submit" class="btn btn-primary" name="action">Submit</button>
	</form>
