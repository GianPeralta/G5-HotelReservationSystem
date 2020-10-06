@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
					<h5>Create a Reservation</h5>
					<form action="/reservations" method="POST">
						@include('layouts.errors')
						@csrf
						<div class="row">
					       <div class="input-field col s12">
					         <input placeholder="Date" type="date" name="date">
					         <label for="date">Date</label>
					       </div>
					     </div>
					     <div class="row">
					       <div class="input-field col s12">
					         <input placeholder="Guest ID" type="number" name="guest_id">
					         <label for="guest_id">Guest ID</label>
					       </div>
					     </div>
					     <div class="row">
					       <div class="input-field col s12">
					         <input placeholder="Room ID" id="description" type="number" name="room_id">
					         <label for="description">Room ID</label>
					       </div>
					     </div>
					     <div class="row">
					     	<div class="col s12">
					     		<button class="btn waves-effect wave-light" type="submit" name="action">Submit
					     			<i class="material-icons right">send</i>
					     		</button>
					     	</div>
					     </div>
					</form>
			</div>
		</div>
	</div>
@endsection