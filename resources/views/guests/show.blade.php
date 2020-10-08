@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="row">
					<h5>Guest ID: <span style="color: #ee6e73;">{{ $guest->id }} </span></h5>
					<ol>
						<p>Name: <span style="color: #ee6e73;">{{ $guest->first_name }} {{ $guest->last_name }}</span></p>
						<p>Contact Number: <span style="color: #ee6e73;">{{ $guest->contact_number }}</span></p>
						<p>Email: <span style="color: #ee6e73;">{{ $guest->email }}</span></p>
					</ol>
				</div>

				<div class="row">
					<h6>Options</h6>
					<form action="/guests/{{ $guest->id }}" method='POST'>
							@csrf
							@method('DELETE')
							<button class="btn btn-primary" type="button" onclick="location.href='/guests';">
								Cancel
								<i class="material-icons right">cancel</i>
							</button>
							<button class="btn btn-primary" type="submit">
								Delete
								<i class="material-icons right">delete</i>
							</button>
							<button class="btn btn-primary" type="button" onclick="location.href='/guests/{{ $guest->id }}/edit';">
								Edit
								<i class="material-icons right">create</i>
							</button>
							<hr>
					</form>
				</div>

				<div class="row">
					<table>
						<caption>Reservations</caption>
						<thead>
							<tr>
								<th style="color: #ee6e73; font-size: 20px;">ID</th>
								<th style="color: #ee6e73; font-size: 20px;">Room ID</th>
								<th style="color: #ee6e73; font-size: 20px;">Date</th>
							</tr>
						</thead>
						<tbody>
							@foreach($guest->reservations as $reservation)
								<tr>
									<td>{{ $reservation->id }}</td>
									<td>{{ $reservation->room_id }}</td>
									<td>{{ $reservation->date }}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					<hr>
				</div>
				
				<div class="row">
					<table>
						<caption>Payments</caption>
						<thead>
							<tr>
								<th style="color: #ee6e73; font-size: 20px;">ID</th>
								<th style="color: #ee6e73; font-size: 20px;">Status</th>
								<th style="color: #ee6e73; font-size: 20px;">Description</th>
							</tr>
						</thead>
						<tbody>
							@foreach($guest->payments as $payment)
								<tr>
									<td>{{ $payment->id }}</td>
									<td>{{ $payment->status }}</td>
									<td>{{ $payment->description }}</td>
								</tr>	
							@endforeach
						</tbody>
					</table>
					<hr>
				</div>
				<div class="row">
					<table>
						<caption>Services</caption>
						<thead>
							<tr>
								<th style="color: #ee6e73; font-size: 20px;">ID</th>
								<th style="color: #ee6e73; font-size: 20px;">Name</th>
								<th style="color: #ee6e73; font-size: 20px;">Description</th>
							</tr>
						</thead>
						<tbody>
							@foreach($guest->services as $service)
								<tr>
									<td>{{ $service->id }}</td>
									<td>{{ $service->name }}</td>
									<td>{{ $service->description }}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection


