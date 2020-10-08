@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12">   
                <h4>Guests</h4>
                <table>
                    <thead>
                        <tr>
                            <th style="color: #ee6e73; font-size: 20px;">ID</th>
                            <th style="color: #ee6e73; font-size: 20px;">Name</th>
                            <th style="color: #ee6e73; font-size: 20px;">Contact Number</th>
                            <th style="color: #ee6e73; font-size: 20px;">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($guests as $guest)
                            <tr>
                                <td><a href="/guests/{{$guest-> id}}">{{ $guest->id }}</a></td>
                                <td>{{ $guest->first_name }} {{ $guest->last_name }}</td>
                                <td>{{ $guest->contact_number }}</td>
                                <td>{{ $guest->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="room-opt">
                <div class="row">
                    <hr>
                    <button onclick="location.href='/home';" class="btn waves-effect wave-light">
                        Home
                        <i class="material-icons right">home</i>
                    </button>
                    <button onclick="location.href='/guests/create';" class="btn waves-effect wave-light">
                        Create a new Guest
                        <i class="material-icons right">create</i>
                    </button>
                </div>
                <div class="row">
                    <button onclick="location.href='/payments';" class="btn waves-effect wave-light">
                        Go to Payments
                        <i class="material-icons right">play_arrow</i>
                    </button>
                    <button onclick="location.href='/services';" class="btn waves-effect wave-light">
                        Go to Services
                        <i class="material-icons right">play_arrow</i>
                    </button>
                    <button onclick="location.href='/reservations';" class="btn waves-effect wave-light">
                        Go to Reservations
                        <i class="material-icons right">play_arrow</i>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection 
