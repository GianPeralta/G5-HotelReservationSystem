@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">	
				<h4>Rooms</h4>
				<table>
					<thead>
						<tr>
							<th style="color: #ee6e73; font-size: 20px;">ID</th>
							<th style="color: #ee6e73; font-size: 20px;">Name</th>
							<th style="color: #ee6e73; font-size: 20px;">Status</th>
							<th style="color: #ee6e73; font-size: 20px;">Floor level</th>
							<th style="color: #ee6e73; font-size: 20px;">Room Type ID</th>
							<th style="color: #ee6e73; font-size: 20px;">Standard Rate</th>
							<th style="color: #ee6e73; font-size: 20px;">Description</th>
						</tr>
					</thead>
					<tbody>
						@foreach($rooms as $room)
							<tr>
								<td><a href="/rooms/{{$room-> id}}">{{ $room->id }}</a></td>
								<td>{{ $room->name }}</td>
								<td>{{ $room->status }}</td>
								<td>{{ $room->floor_level }}</td>
								<td>{{ $room->room_type->id }}</td>
								<td>{{ $room->room_type->standard_rate }}</td>
								<td>{{ $room->room_type->description }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>

			<div class="room-opt">
				<hr>
				<button onclick="location.href='/home';" class="btn waves-effect wave-light">
					Home
					<i class="material-icons right">home</i>
				</button>
				<button onclick="location.href='/rooms/create';" class="btn waves-effect wave-light">
					Create a new Room
					<i class="material-icons right">create</i>
				</button>

				<button onclick="location.href='/room-types';" class="btn waves-effect wave-light">
					Go to Room Types
					<i class="material-icons right">play_arrow</i>
				</button>
			</div>
		</div>
	</div>
@endsection	
