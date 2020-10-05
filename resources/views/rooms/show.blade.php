
	<a href="/rooms">&lt&lt All Rooms</a>
	<hr>
	
	<h5>Room: {{ $room->name }} <a href="/rooms/{{ $room->id }}/edit">EDIT</a></h5>
	<ul>
		<p><span class="black-hi">Status:</span> {{ $room->status }}</p>
		<p><span class="black-hi">Floor level:</span> {{ $room->floor_level }}</p>
		<p><span class="black-hi">Room type:</span> {{ $room->room_type_id }}</p>
	</ul>
	<form action="/rooms/{{ $room->id }}" method='POST'>
			@csrf
			@method('DELETE')
			<button class="btn btn-primary" type="submit">DELETE ROOM</button>
	</form>


