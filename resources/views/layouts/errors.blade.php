@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red; list-style-type: disc;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif