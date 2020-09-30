   <div class="row">
        <div class="col-sm-12">
            <h1><a href="/users/{{ $userr->id}}/edit">EDIT </a></h1>
     
            <h1>{{ $userr->userid }}</h1>
            <h2>{{ $user->name }}</h2>
         
            <form action="/users/{{ $user->id}}" method="POST">
                @csrf
                @method('DELETE')
                    <button class="btn" type='submit'>DELETE</button>
            </form>


            
        </div>
    </div>
</div>

