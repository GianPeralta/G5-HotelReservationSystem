@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12">   
                <h4>Reservation Statuses</h4>
                <table>
                    <thead>
                        <tr>
                            <th style="color: #ee6e73; font-size: 20px;">ID</th>
                            <th style="color: #ee6e73; font-size: 20px;">Status</th>
                            <th style="color: #ee6e73; font-size: 20px;">Description</th>
                            <th style="color: #ee6e73; font-size: 20px;">Reservation ID</th>
                            <th style="color: #ee6e73; font-size: 20px;">Guest ID</th>
                            <th style="color: #ee6e73; font-size: 20px;">Room ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reservation_statuses as $reservation_status)
                            <tr>
                                <td><a href="/reservation_statuses/{{$reservation_status-> id}}">{{ $reservation_status->id }}</a></td>
                                <td>{{ $reservation_status->status }}</td>
                                <td>{{ $reservation_status->description }}</td>
                                <td>{{ $reservation_status->reservation->id }}</td>
                                <td>{{ $reservation_status->reservation->guest_id }}</td>
                                <td>{{ $reservation_status->reservation->room_id }}</td>
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
                <button onclick="location.href='/reservation_statuses/create';" class="btn waves-effect wave-light">
                    Create a new Reservation Status
                    <i class="material-icons right">create</i>
                </button>
                <button onclick="location.href='/reservations';" class="btn waves-effect wave-light">
                    Go to Reservations
                    <i class="material-icons right">play_arrow</i>
                </button>
            </div>
        </div>
    </div>
@endsection 
