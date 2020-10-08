@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<form action="/reservations/{{ $reservation->id }}" method='POST'>
					@method('PUT')
					@include('layouts.errors')
					@csrf
					<h5>Edit Reservation</h5>
				  	<div class="form-group">
					    <label for="guest_id">Guest ID</label>
					    <input type="text" class="form-control" name="guest_id" step="0.0001" value="{{ $reservation->guest_id }}" >
				  	</div>
					<div class="form-group">
					    <label for="room_id">Room ID</label>
					    <input type="text" class="form-control" name="room_id" value="{{ $reservation->room_id }}" >
					</div>
					<div class="form-group">
					    <label for="date">Date</label>
					    <input type="date" class="form-control" name="date" value="{{ $reservation->date }}" >
					</div>
				  	<button type="button" onclick="location.href='/reservations/{{ $reservation->id }}';" class="btn btn-primary">
				  		Cancel
				  		<i class="material-icons right">cancel</i>
				  	</button>
				  	<button type="submit" class="btn btn-primary" name="action">
				  		Save
				  		<i class="material-icons right">save</i>
				  	</button>
				</form>
			</div>
		</div>
	</div>
@endsection
