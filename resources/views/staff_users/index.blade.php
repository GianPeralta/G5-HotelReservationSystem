
    <div class="noli">
        <h5>Staff Users</h5>
        
        <ul>
            @foreach($staff_users as $staff_user)
                <li>[{{$staff_user-> id}}] <a href="/staff-users/{{$staff_user-> id}}">{{$staff_user-> name}}</a></li>
            @endforeach 
        </ul>
        <hr>
    </div>
    <div class="room-opt">
        <a href="/staff-users/create">Create a new Staff User</a>
    </div>
