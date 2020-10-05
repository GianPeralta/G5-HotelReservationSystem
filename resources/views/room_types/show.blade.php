
	<a href="/room-types">&lt&lt All Room Types</a>
	<hr>
	
	<h5>Room Type ID: {{ $room_type->id }} <a href="/room-types/{{ $room_type->id }}/edit">EDIT</a></h5>
	<ul>
		<p><span class="black-hi">Standard rate:</span> {{ $room_type->standard_rate }}</p>
		<p><span class="black-hi">Description:</span> {{ $room_type->description }}</p>
	</ul>
	<form action="/room-types/{{ $room_type->id }}" method='POST'>
			@csrf
			@method('DELETE')
			<button class="btn btn-primary" type="submit">DELETE ROOM TYPE</button>
	</form>


