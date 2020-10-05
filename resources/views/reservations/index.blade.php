@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
					<h5>Reservation Statuses</h5>
					<a href="/reservations/create">Create Reservation</a>
					<ol>
						@foreach($reservations as $reservation)

							<li>
								<a href="/reservations/{{ $reservation->id }}">Reservation {{ $reservation->id}}</a>
							</li>
						@endforeach
					</ol>	
			</div>
		</div>
	</div>
@endsection