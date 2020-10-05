@extends('layouts.master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h5>Services</h5>
      <a href="/services/create">Create Services</a>
      <ol>

      @foreach($services as $service)
      <li>
        <a href="/services/{{ $service->id }}">{{ $service->name }}</a>
        </li>
      @endforeach

    </ol>
    </div>

  </div>

</div>
@endsection
