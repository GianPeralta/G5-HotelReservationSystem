@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12">   
                <h4>Room Types</h4>
                <table>
                    <thead>
                        <tr>
                            <th style="color: #ee6e73; font-size: 20px;">ID</th>
                            <th style="color: #ee6e73; font-size: 20px;">Standard Rate</th>
                            <th style="color: #ee6e73; font-size: 20px;">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($room_types as $room_type)
                            <tr onclick="location.href='/room-types/{{$room_type -> id}}';">
                                <td>{{ $room_type->id }}</td>
                                <td>{{ $room_type->standard_rate }}</td>
                                <td>{{ $room_type->description }}</td>
                                <td><a href="/room-types/{{$room_type -> id}}">More</a></td>
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
                <button onclick="location.href='/room-types/create';" class="btn waves-effect wave-light">
                    Create a new Room Type
                    <i class="material-icons right">create</i>
                </button>
                <button onclick="location.href='/rooms';" class="btn waves-effect wave-light">
                    Go to Rooms
                    <i class="material-icons right">play_arrow</i>
                </button>
            </div>
        </div>
    </div>
@endsection 
