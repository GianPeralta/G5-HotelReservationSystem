
    <div class="noli">
        <h5>Room Types</h5>
        
        <ul>
            @foreach($room_types as $room_type)
                <li>[{{$room_type-> id}}] <a href="/room-types/{{$room_type-> id}}">{{$room_type-> description}}</a></li>
            @endforeach 
        </ul>
        <hr>
    </div>
    <div class="room-opt">
        <a href="/room-types/create">Create a new Room Type</a>
    </div>
