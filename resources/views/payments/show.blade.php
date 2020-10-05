@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h5>{{ $payment->status }}</h5>
				<a href="/payments/{{ $payment->id }}/edit">Edit</a>
				<form action="/events/{{ $payment->id }}" method='POST'>
					@csrf
					@method('DELETE')	
					<button class="btn" type='submit'>Delete</button>
				</form>
				<p>{{ $payment->description }}</p>
			</div>
		</div>
	</div>
@endsection