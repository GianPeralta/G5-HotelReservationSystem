@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
					<h4>Payments</h4>
					<a href="/payments/create">Create Payment</a>
					<ol>
						@foreach($payments as $payment)
							<li><a href="/payments/{{ $payment->id }}">Payment ID[{{ $payment->id }}]</a>
							</li>
						@endforeach					
					</ol>

			</div>
		</div>
		<div class="row">
					<table>
						<thead>
							<tr>
								<th>ID</th>
								<th>Guest ID</th>
								<th>Guest Name</th>
								<th>Guest Contact Number</th>
								<th>Guest Email</th>
								<th>Status</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							@foreach($payments as $payment)
								<tr>
									<td>{{ $payment->id }}</td>
									<td>{{ $payment->guest->id }}</td>
									<td>{{ $payment->guest->first_name }} {{ $payment->guest->last_name }}</td>
									<td>{{ $payment->guest->contact_number }}</td>
									<td>{{ $payment->guest->email }}</td>
									<td>{{ $payment->status }}</td>
									<td>{{ $payment->description }}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
		</div>
	</div>
@endsection