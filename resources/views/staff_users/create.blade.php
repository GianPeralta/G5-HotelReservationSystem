
	<form action="/staff-users" method='POST'>
		@include('layouts.errors')
		@csrf
		<h5>Create a new Staff User</h5>
	  	<div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" name="name" required>
	  	</div>
		<div class="form-group">
		    <label for="user_role_id">User Role ID</label>
		    <input type="number" class="form-control" name="user_role_id" required>
	  	</div>
	  	<button type="submit" class="btn btn-primary" name="action">Submit</button>
	</form>
