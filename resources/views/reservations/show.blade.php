@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="row">
					<h5>Reservation ID: <span style="color: #ee6e73;">{{ $reservation->id }} </span></h5>
					<ol>
						<p>Guest ID: <span style="color: #ee6e73;">{{ $reservation->guest->id }}</span></p>
						<p>Guest Name: <span style="color: #ee6e73;">{{ $reservation->guest->first_name }} {{ $reservation->guest->last_name }}</span></p>
						<p>Guest Contact Number: <span style="color: #ee6e73;">{{ $reservation->guest->contact_number }}</span></p>
						<p>Guest Email: <span style="color: #ee6e73;">{{ $reservation->guest->email }}</span></p>
						<p>Room ID: <span style="color: #ee6e73;">{{ $reservation->room->id }}</span></p>
						<p>Room Name: <span style="color: #ee6e73;">{{ $reservation->room->name }}</span></p>
						<p>Room Status: <span style="color: #ee6e73;">{{ $reservation->room->status }}</span></p>
						<p>Room Floor Level: <span style="color: #ee6e73;">{{ $reservation->room->floor_level }}</span></p>
						<p>Date: <span style="color: #ee6e73;">{{ $reservation->date }}</span></p>
					</ol>
				</div>

				<div class="row">
					<h6>Options</h6>
					<form action="/reservations/{{ $reservation->id }}" method='POST'>
							@csrf
							@method('DELETE')
							<button class="btn btn-primary" type="button" onclick="location.href='/reservations';">
								Cancel
								<i class="material-icons right">cancel</i>
							</button>
							<button class="btn btn-primary" type="submit">
								Delete
								<i class="material-icons right">delete</i>
							</button>
							<button class="btn btn-primary" type="button" onclick="location.href='/reservations/{{ $reservation->id }}/edit';">
								Edit
								<i class="material-icons right">create</i>
							</button>
					</form>
					<hr>
				</div>
				
				<div class="row">
					<table>
						<caption>Reservation Statuses</caption>
						<thead>
							<tr>
								<th style="color: #ee6e73; font-size: 20px;">ID</th>
								<th style="color: #ee6e73; font-size: 20px;">Status</th>
								<th style="color: #ee6e73; font-size: 20px;">Description</th>
							</tr>
						</thead>
						<tbody>
							@foreach($reservation->reservation_statuses as $reservation_status)
								<tr>
									<td>{{ $reservation_status->id }}</td>
									<td>{{ $reservation_status->status }}</td>
									<td>{{ $reservation_status->description }}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>
@endsection


