@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h5>Rooms</h5>
			 	
				<ul>
					@foreach($rooms as $room)
						<li><a href="/rooms/{{$room-> id}}">{{$room-> name}}</a></li>
					@endforeach	
				</ul>
				<div class="row">
					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Status</th>
								<th>Floor level</th>
								<th>Room Type</th>
							</tr>
						</thead>
						<tbody>
							@foreach($rooms as $room)
								<tr>
									<td>{{ $room->name }}</td>
									<td>{{ $room->status }}</td>
									<td>{{ $room->floor_level }}</td>
									<td>{{ $room->room_type->description }}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<hr>
				<div class="room-opt">
					<a href="/rooms/create">Create a new Room</a>
				</div>
			</div>
		</div>
	</div>
@endsection	
