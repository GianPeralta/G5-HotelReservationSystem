@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
					<h5>Guest</h5>
					<a href="/guests/{{ $guest->id }}/edit">Edit</a>
					<form action="/guests/{{ $guest->id }}" method='POST'>
						@csrf
						@method('DELETE')
						<button class="btn" type='submit'>Delete</button>
					</form>
					<br>

					<p>ID = {{ $guest->id }}</p>
					<p>Guests Name = {{ $guest->first_name }} {{ $guest->last_name }}</p>
					<p>Contact Number = {{ $guest->contact_number }}</p>
					<p>Email = {{ $guest->email }}</p>
			</div>
		</div>
	</div>
@endsection