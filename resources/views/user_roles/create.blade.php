
	<form action="/user-roles" method='POST'>
		@include('layouts.errors')
		@csrf
		<h5>Create a new User Role</h5>
	  	<div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" name="name" required>
	  	</div>
	  	<button type="submit" name="action">Submit</button>
	</form>
