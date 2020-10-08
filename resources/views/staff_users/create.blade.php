@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<form action="/staff-users" method='POST'>
					@include('layouts.errors')
					@csrf
					<h5>Create a new Room</h5>
				  	<div class="form-group">
					    <label for="name">Name</label>
					    <input type="text" class="form-control" name="name" required>
				  	</div>
				  	<div class="form-group">
					    <label for="status">User Role ID</label>
					    <input type="number" class="form-control" name="user_role_id" required>
				  	</div>

				  	<button type="button" onclick="location.href='/staff-users';" class="btn waves-effect wave-light">
							Cancel
							<i class="material-icons right">cancel</i>
					</button>
					<button type="submit" class="btn waves-effect wave-light" name="action">
							Submit
							<i class="material-icons right">send</i>
					</button>
				</form>
			</div>
		</div>
	</div>
@endsection