@extends('layouts.master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h5>{{ $service->name }}</h5>
      <p>{{ $service->description }}</p>
      <p>{{ $service->guest_id }}</p>
    </div>
  </div>

</div>
<form action="/services/{{ $service->id }}" method='POST'>
			@csrf
			@method('DELETE')
			<button class="btn btn-primary" type="submit">Delete Service</button>
	</form>
@endsection
