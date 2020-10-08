@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="row">
					<h5>Room Type ID: <span style="color: #ee6e73;">{{ $room_type->id }} </span></h5>
					<ol>
						<p>Standard Rate: <span style="color: #ee6e73;">{{ $room_type->standard_rate }}</span></p>
						<p>Description: <span style="color: #ee6e73;">{{ $room_type->description }}</span></p>
					</ol>
				</div>

				<!-- Rooms -->
				<div class="row">
					<table>
						<caption>Rooms with Room Type {{ $room_type->id }}</caption>
						<thead>
							<tr>
								<th style="color: #ee6e73; font-size: 20px;">ID</th>
								<th style="color: #ee6e73; font-size: 20px;">Name</th>
								<th style="color: #ee6e73; font-size: 20px;">Status</th>
								<th style="color: #ee6e73; font-size: 20px;">Floor level</th>
							</tr>
						</thead>
						<tbody>
							@foreach($room_type->rooms as $room)
								<tr>
									<td>{{ $room->id }}</td>
									<td>{{ $room->name }}</td>
									<td>{{ $room->status }}</td>
									<td>{{ $room->floor_level }}</td>
								</tr>
							@endforeach
						</tbody>
				</table>
				</div>
				
				<div class="row">
					<hr>
					<h6>Options</h6>
					<form action="/room-types/{{ $room_type->id }}" method='POST'>
							@csrf
							@method('DELETE')
							<button class="btn btn-primary" type="button" onclick="location.href='/room-types';">
								Cancel
								<i class="material-icons right">cancel</i>
							</button>
							<button class="btn btn-primary" type="submit">
								Delete
								<i class="material-icons right">delete</i>
							</button>
							<button class="btn btn-primary" type="button" onclick="location.href='/room-types/{{ $room_type->id }}/edit';">
								Edit
								<i class="material-icons right">create</i>
							</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection


