@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
					<h5>Reservation Status</h5>
					<a href="/reservation_statuses/{{ $reservation_status->id }}/edit">Edit</a>
					<form action="/reservation_statuses/{{ $reservation_status->id }}" method='POST'>
						@csrf
						@method('DELETE')
						<button class="btn" type='submit'>Delete</button>
					</form>
					<br>

					<p>ID = {{ $reservation_status->id }}</p>
					<p>Start Date = {{ $reservation_status->start_date }} - End Date = {{ $reservation_status->end_date }}</p>
					<p>Reservation Status ID = {{ $reservation_status->reservation_status_id }}</p>
					<p>Guest ID = {{ $reservation_status->guest_id }}</p>
					<p>Room ID = {{ $reservation_status->room_id }}</p>
			</div>
		</div>
	</div>
@endsection