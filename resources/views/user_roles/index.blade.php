
    <div>
        <h5>User Roles</h5>
        
        <ul>
            @foreach($user_roles as $user_role)
                <li>[{{$user_role-> id}}] <a href="/user-roles/{{$user_role-> id}}">{{$user_role-> name}}</a></li>
            @endforeach 
        </ul>
        <hr>
    </div>
    <div class="room-opt">
        <a href="/user-roles/create">Create a new User Role</a>
    </div>
