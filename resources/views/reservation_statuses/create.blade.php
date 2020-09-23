@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
					<h5>Create Reservation Status</h5>
					<form action="/reservation_statuses" method="POST">
						@csrf
					     <div class="row">
					       <div class="input-field col s12">
					         <input placeholder="Reservation Status ID" id="reservation_status_id" type="text" name="reservation_status_id">
					         <label for="reservation_status_id">Reservation Status ID</label>
					       </div>
					     </div>
					     <div class="row">
					       <div class="input-field col s12">
					         <input placeholder="Guest ID" id="guest_id" type="text" name="guest_id">
					         <label for="guest_id">Guest ID</label>
					       </div>
					     </div>
					     <div class="row">
					       <div class="input-field col s12">
					         <input placeholder="Room ID" id="room_id" type="text" name="room_id">
					         <label for="room_id">Room ID</label>
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