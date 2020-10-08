@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<form action="/guests" method='POST'>
					@include('layouts.errors')
					@csrf
					<h5>Create a new Guest</h5>
				  	<div class="form-group">
					    <label for="first_name">First Name</label>
					    <input type="text" class="form-control" name="first_name" required>
				  	</div>
				  	<div class="form-group">
					    <label for="last_name">Last Name</label>
					    <input type="text" class="form-control" name="last_name" required>
				  	</div>
				  	<div class="form-group">
					    <label for="contact_number">Contact Number</label>
					    <input type="number" class="form-control" maxlength="11" name="contact_number" required>
				  	</div>
				  	<div class="form-group">
					    <label for="email">Email</label>
					    <input type="email" class="form-control" name="email" required>
				  	</div>

				  	<button type="button" onclick="location.href='/guests';" class="btn waves-effect wave-light">
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