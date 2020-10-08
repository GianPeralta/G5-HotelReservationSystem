@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12">   
                <h4>Payments</h4>
                <table>
                    <thead>
                        <tr>
                            <th style="color: #ee6e73; font-size: 20px;">ID</th>
                            <th style="color: #ee6e73; font-size: 20px;">Status</th>
                            <th style="color: #ee6e73; font-size: 20px;">Description</th>
                            <th style="color: #ee6e73; font-size: 20px;">Guest ID</th>
                            <th style="color: #ee6e73; font-size: 20px;">Guest Name</th>
                            <th style="color: #ee6e73; font-size: 20px;">Guest Contact Number</th>
                            <th style="color: #ee6e73; font-size: 20px;">Guest Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($payments as $payment)
                            <tr>
                                <td><a href="/payments/{{$payment-> id}}">{{ $payment->id }}</a></td>
                                <td>{{ $payment->status }}</td>
                                <td>{{ $payment->description }}</td>
                                <td>{{ $payment->guest->id }}</td>
                                <td>{{ $payment->guest->first_name }} {{ $payment->guest->last_name }}</td>
                                <td>{{ $payment->guest->contact_number }}</td>
                                <td>{{ $payment->guest->email }}</td>
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
                <button onclick="location.href='/payments/create';" class="btn waves-effect wave-light">
                    Create a new Payment
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
