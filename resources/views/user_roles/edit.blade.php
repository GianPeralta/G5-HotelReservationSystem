
	<form action="/user-roles/{{ $user_role->id }}" method='POST'>
		@method('PUT')
		@include('layouts.errors')
		@csrf
		<h5>Edit User Role</h5>
	  	<div>
		    <label for="name">Name</label>
		    <input type="text" name="name" value="{{ $user_role->name }}" required>
	  	</div>
	  	<button type="submit" name="action">Submit</button>
	</form>
