@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="row">
					<h5>Room ID: <span style="color: #ee6e73;">{{ $room->id }} </span></h5>
					<ol>
						<p>Name: <span style="color: #ee6e73;">{{ $room->name }}</span></p>
						<p>Status: <span style="color: #ee6e73;">{{ $room->status }}</span></p>
						<p>Floor level: <span style="color: #ee6e73;">{{ $room->floor_level }}</span></p>
						<p>Room type ID: <span style="color: #ee6e73;">{{ $room->room_type_id }}</span></p>
						<p>Room type Rate: <span style="color: #ee6e73;">{{ $room->room_type->standard_rate }}</span></p>
						<p>Room type Description: <span style="color: #ee6e73;">{{ $room->room_type->description }}</span></p>
					</ol>
				</div>

				<div class="row">
					<h6>Options</h6>
					<form action="/rooms/{{ $room->id }}" method='POST'>
							@csrf
							@method('DELETE')
							<button class="btn btn-primary" type="button" onclick="location.href='/rooms';">
								Cancel
								<i class="material-icons right">cancel</i>
							</button>
							<button class="btn btn-primary" type="submit">
								Delete
								<i class="material-icons right">delete</i>
							</button>
							<button class="btn btn-primary" type="button" onclick="location.href='/rooms/{{ $room->id }}/edit';">
								Edit
								<i class="material-icons right">create</i>
							</button>
					</form>
					<hr>
				</div>
				
				<div class="row">
					<table>
						<caption>Reservations</caption>
						<thead>
							<tr>
								<th style="color: #ee6e73; font-size: 20px;">ID</th>
								<th style="color: #ee6e73; font-size: 20px;">Guest ID</th>
								<th style="color: #ee6e73; font-size: 20px;">Date</th>
							</tr>
						</thead>
						<tbody>
							@foreach($room->reservations as $reservation)
								<tr>
									<td>{{ $reservation->id }}</td>
									<td>{{ $reservation->guest_id }}</td>
									<td>{{ $reservation->date }}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					<hr>
				</div>
			</div>
		</div>
	</div>
@endsection


