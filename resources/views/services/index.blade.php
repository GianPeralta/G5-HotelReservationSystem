@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12">   
                <h4>Services</h4>
                <table>
                    <thead>
                        <tr>
                            <th style="color: #ee6e73; font-size: 20px;">ID</th>
                            <th style="color: #ee6e73; font-size: 20px;">Name</th>
                            <th style="color: #ee6e73; font-size: 20px;">Description</th>
                            <th style="color: #ee6e73; font-size: 20px;">Guest ID</th>
                            <th style="color: #ee6e73; font-size: 20px;">Guest Name</th>
                            <th style="color: #ee6e73; font-size: 20px;">Guest Contact Number</th>
                            <th style="color: #ee6e73; font-size: 20px;">Guest Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $service)
                            <tr>
                                <td><a href="/services/{{$service-> id}}">{{ $service->id }}</a></td>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->description }}</td>
                                <td>{{ $service->guest->id }}</td>
                                <td>{{ $service->guest->first_name }} {{ $service->guest->last_name }}</td>
                                <td>{{ $service->guest->contact_number }}</td>
                                <td>{{ $service->guest->email }}</td>
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
                <button onclick="location.href='/services/create';" class="btn waves-effect wave-light">
                    Create a new Service
                    <i class="material-icons right">create</i>
                </button>
                <button onclick="location.href='/guests';" class="btn waves-effect wave-light">
                    Go to Guests
                    <i class="material-icons right">play_arrow</i>
                </button>
            </div>
        </div>
    </div>
@endsection 
