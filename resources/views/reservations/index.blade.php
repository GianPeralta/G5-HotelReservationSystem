@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12">   
                <h4>Reservations</h4>
                <table>
                    <thead>
                        <tr>
                            <th style="color: #ee6e73; font-size: 20px;">ID</th>
                            <th style="color: #ee6e73; font-size: 20px;">Guest ID</th>
                            <th style="color: #ee6e73; font-size: 20px;">Guest Name</th>
                            <th style="color: #ee6e73; font-size: 20px;">Room ID</th>
                            <th style="color: #ee6e73; font-size: 20px;">Room Name</th>
                            <th style="color: #ee6e73; font-size: 20px;">Room Status</th>
                            <th style="color: #ee6e73; font-size: 20px;">Room Floor Level</th>
                            <th style="color: #ee6e73; font-size: 20px;">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reservations as $reservation)
                            <tr>
                                <td><a href="/reservations/{{$reservation-> id}}">{{ $reservation->id }}</a></td>
                                <td>{{ $reservation->guest->id }}</td>
                                <td>{{ $reservation->guest->first_name }} {{ $reservation->guest->last_name }}</td>
                                <td>{{ $reservation->room->id }}</td>
                                <td>{{ $reservation->room->name }}</td>
                                <td>{{ $reservation->room->status }}</td>
                                <td>{{ $reservation->room->floor_level }}</td>
                                <td>{{ $reservation->date }}</td>
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
                <button onclick="location.href='/reservations/create';" class="btn waves-effect wave-light">
                    Create a new reservation
                    <i class="material-icons right">create</i>
                </button>
                <button onclick="location.href='/reservation_statuses';" class="btn waves-effect wave-light">
                    Go to Reservation Statuses
                    <i class="material-icons right">play_arrow</i>
                </button>
            </div>
        </div>
    </div>
@endsection 
