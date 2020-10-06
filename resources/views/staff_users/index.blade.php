
    <div class="noli">
        <h5>Staff Users</h5>
        
        <ul>
            @foreach($staff_users as $staff_user)
                <li>[{{$staff_user-> id}}] <a href="/staff-users/{{$staff_user-> id}}">{{$staff_user-> name}}</a></li>
            @endforeach 
        </ul>
        <hr>

        <div class="row">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>User Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($staff_users as $staff_user)
                                <tr>
                                    <td>{{ $staff_user->name }}</td>
                                    <td>{{ $staff_user->user_role->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
        </div>

    </div>
    <div class="room-opt">
        <a href="/staff-users/create">Create a new Staff User</a>
    </div>
