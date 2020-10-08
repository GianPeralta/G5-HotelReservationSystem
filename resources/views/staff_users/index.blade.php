@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12">   
                <h4>Staff Users</h4>
                <table>
                    <thead>
                        <tr>
                            <th style="color: #ee6e73; font-size: 20px;">ID</th>
                            <th style="color: #ee6e73; font-size: 20px;">Name</th>
                            <th style="color: #ee6e73; font-size: 20px;">User Role ID</th>
                            <th style="color: #ee6e73; font-size: 20px;">Title</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($staff_users as $staff_user)
                            <tr onclick="location.href='/staff-users/{{$staff_user-> id}}';">
                                <td>{{ $staff_user->id }}</td>
                                <td>{{ $staff_user->name }}</td>
                                <td>{{ $staff_user->user_role->id }}</td>
                                <td>{{ $staff_user->user_role->title }}</td>
                                <td><a href="/staff-users/{{$staff_user-> id}}">More</a></td>
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
                <button onclick="location.href='/staff-users/create';" class="btn waves-effect wave-light">
                    Create a new Staff User
                    <i class="material-icons right">create</i>
                </button>

                <button onclick="location.href='/user-roles';" class="btn waves-effect wave-light">
                    Go to User Roles
                    <i class="material-icons right">play_arrow</i>
                </button>
            </div>
        </div>
    </div>
@endsection 
