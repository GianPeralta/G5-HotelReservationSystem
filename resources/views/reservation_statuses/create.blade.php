@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<form action="/reservation_statuses" method='POST'>
					@include('layouts.errors')
					@csrf
					<h5>Create a new Reservation Status</h5>
				  	<div class="form-group">
					    <label for="reservation_id">Reservation ID</label>
					    <input type="number" class="form-control" name="reservation_id" required>
				  	</div>
				  	<div class="form-group">
					    <label for="status">Status</label>
					    <input type="text" class="form-control" name="status" required>
				  	</div>
				  	<div class="form-group">
					    <label for="description">Description</label>
					    <input type="text" class="form-control" name="description" required>
				  	</div>

				  	<button type="button" onclick="location.href='/reservation_statuses';" class="btn waves-effect wave-light">
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