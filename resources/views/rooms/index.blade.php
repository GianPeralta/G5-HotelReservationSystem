
	<h5>Rooms</h5>
 	
	<ul>
		@foreach($rooms as $room)
			<li><a href="/rooms/{{$room-> id}}">{{$room-> name}}</a></li>
		@endforeach	
	</ul>
	<hr>
	<div class="room-opt">
		<a href="/rooms/create">Create a new Room</a>
	</div>	
