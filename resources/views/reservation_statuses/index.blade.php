@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
					<h4>Reservation Statuses</h4>
					<a href="/reservation_statuses/create">Create Reservation Status</a>
					<ol>
						@foreach($reservation_statuses as $reservation_status)

							<li>
								<a href="/reservation_statuses/{{ $reservation_status->id }}">ID: {{ $reservation_status->id}}</a>
							</li>
						@endforeach
					</ol>	
			</div>
			<div class="row">
                    <table>
                        <thead>
                            <tr>
                                <th>Reservation ID</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reservation_statuses as $reservation_status)
                                <tr>
                                	<td>{{ $reservation_status->reservation->id }}</td>
                                    <td>{{ $reservation_status->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
        	</div>

		</div>
	</div>
@endsection