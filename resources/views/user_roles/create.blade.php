@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<form action="/user-roles" method='POST'>
					@include('layouts.errors')
					@csrf
					<h5>Create a new User Role</h5>
				  	<div class="form-group">
					    <label for="title">Title</label>
					    <input type="text" class="form-control" name="title" required>
					</div>
				  	<button type="button" onclick="location.href='/user-roles';" class="btn waves-effect wave-light">
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
