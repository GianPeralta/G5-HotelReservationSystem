@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
					<h5>Reservation</h5>
					<a href="/reservations/{{ $reservation->id }}/edit">Edit</a>
					<form action="/reservations/{{ $reservation->id }}" method='POST'>
						@csrf
						@method('DELETE')
						<button class="btn" type='submit'>Delete</button>
					</form>
					<br>

					<p>ID = {{ $reservation->id }}</p>
					<p>Date = {{ $reservation->date }}</p>
					<p>Guest ID = {{ $reservation->guest_id }}</p>
					<p>Room ID = {{ $reservation->room_id }}</p>
			</div>
		</div>
	</div>
@endsection