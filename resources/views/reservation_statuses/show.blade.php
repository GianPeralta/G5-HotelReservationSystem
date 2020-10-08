@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="row">
					<h5>Reservation Status ID: <span style="color: #ee6e73;">{{ $reservation_status->id }} </span></h5>
					<ol>
						<p>Status: <span style="color: #ee6e73;">{{ $reservation_status->status }}</span></p>
						<p>Description: <span style="color: #ee6e73;">{{ $reservation_status->description }}</span></p>
						<p>Reservation ID: <span style="color: #ee6e73;">{{ $reservation_status->reservation->id }}</span></p>
						<p>Guest ID: <span style="color: #ee6e73;">{{ $reservation_status->reservation->guest_id }} </span></p>
						<p>Room ID: <span style="color: #ee6e73;">{{ $reservation_status->reservation->room_id }}</span></p>
					</ol>
				</div>

				<div class="row">
					<hr>
					<h6>Options</h6>
					<form action="/reservation_statuses/{{ $reservation_status->id }}" method='POST'>
							@csrf
							@method('DELETE')
							<button class="btn btn-primary" type="button" onclick="location.href='/reservation_statuses';">
								Cancel
								<i class="material-icons right">cancel</i>
							</button>
							<button class="btn btn-primary" type="submit">
								Delete
								<i class="material-icons right">delete</i>
							</button>
							<button class="btn btn-primary" type="button" onclick="location.href='/reservation_statuses/{{ $reservation_status->id }}/edit';">
								Edit
								<i class="material-icons right">create</i>
							</button>
							
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection


