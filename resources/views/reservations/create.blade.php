@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<form action="/reservations" method='POST'>
					@include('layouts.errors')
					@csrf
					<h5>Create a new Reservation</h5>
				  	<div class="form-group">
					    <label for="guest_id">Guest ID</label>
					    <input type="text" class="form-control" name="guest_id" required>
				  	</div>
				  	<div class="form-group">
					    <label for="room_id">Room ID</label>
					    <input type="text" class="form-control" name="room_id" required>
				  	</div>
				  	<div class="form-group">
					    <label for="contact_number">Date</label>
					    <input type="date" class="form-control" name="date" required>
				  	</div>

				  	<button type="button" onclick="location.href='/reservations';" class="btn waves-effect wave-light">
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