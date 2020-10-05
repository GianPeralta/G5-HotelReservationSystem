@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
					<h5>Reservation Statuses</h5>
					<a href="/reservation_statuses/create">Create Reservation Status</a>
					<ol>
						@foreach($reservation_statuses as $reservation_status)

							<li>
								<a href="/reservation_statuses/{{ $reservation_status->id }}">Guest ID = {{ $reservation_status->guest_id}}</a>
							</li>
						@endforeach
					</ol>	
			</div>
		</div>
	</div>
@endsection