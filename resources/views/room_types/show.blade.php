@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">

				<div class="row">
					<h5>Room Type ID: {{ $room_type->id }} <a href="/room-types/{{ $room_type->id }}/edit">EDIT</a></h5>
					<ul>
						<p><span class="black-hi">Standard rate:</span> {{ $room_type->standard_rate }}</p>
						<p><span class="black-hi">Description:</span> {{ $room_type->description }}</p>
					</ul>
				</div>
				<div class="row">
					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Status</th>
								<th>Floor level</th>
							</tr>
						</thead>
						<tbody>
							@foreach($room_type->rooms as $room)
								<tr>
									<td>{{ $room->name }}</td>
									<td>{{ $room->status }}</td>
									<td>{{ $room->floor_level }}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<form action="/room-types/{{ $room_type->id }}" method='POST'>
						@csrf
						@method('DELETE')
						<button class="btn btn-primary" type="submit">DELETE ROOM TYPE</button>
				</form>
			</div>
		</div>
	</div>
@endsection


