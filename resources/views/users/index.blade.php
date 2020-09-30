

    <div class="row">
        <div class="col-sm-12">
            <h5>Doctors</h5>
            <a href="/users/create">Create User</a>
                <ol>
                    @foreach($users as $userr)
                    <li>
                        <a href="/users/{{$userr->id}}">{{$user->name}}</a>
                    </li>
                    @endforeach

                </ol>
            
        </div>
    </div>
</div>

