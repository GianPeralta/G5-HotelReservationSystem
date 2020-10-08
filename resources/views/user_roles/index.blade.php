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
                            <th style="color: #ee6e73; font-size: 20px;">Title</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user_roles as $user_role)
                            <tr>
                                <td><a href="/user-roles/{{$user_role-> id}}">{{ $user_role->id }}</a></td>
                                <td>{{ $user_role->title }}</a></td>
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
                <button onclick="location.href='/user-roles/create';" class="btn waves-effect wave-light">
                    Create a new User Role
                    <i class="material-icons right">create</i>
                </button>
                <button onclick="location.href='/staff-users';" class="btn waves-effect wave-light">
                    Go to Staff Users
                    <i class="material-icons right">play_arrow</i>
                </button>
            </div>
        </div>
    </div>
@endsection 
