@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="row">
					<h5>Payment ID: <span style="color: #ee6e73;">{{ $payment->id }} </span></h5>
					<ol>
						<p>Status: <span style="color: #ee6e73;">{{ $payment->status }}</span></p>
						<p>Description: <span style="color: #ee6e73;">{{ $payment->description }}</span></p>
						<p>Guest ID: <span style="color: #ee6e73;">{{ $payment->guest->id }}</span></p>
						<p>Guest Name: <span style="color: #ee6e73;">{{ $payment->guest->first_name }} {{ $payment->guest->last_name }}</span></p>
						<p>Guest Contact Number: <span style="color: #ee6e73;">{{ $payment->guest->contact_number }}</span></p>
						<p>Guest Email: <span style="color: #ee6e73;">{{ $payment->guest->email }}</span></p>
					</ol>
				</div>

				<div class="row">
					<hr>
					<h6>Options</h6>
					<form action="/payments/{{ $payment->id }}" method='POST'>
							@csrf
							@method('DELETE')
							<button class="btn btn-primary" type="button" onclick="location.href='/payments';">
								Cancel
								<i class="material-icons right">cancel</i>
							</button>
							<button class="btn btn-primary" type="submit">
								Delete
								<i class="material-icons right">delete</i>
							</button>
							<button class="btn btn-primary" type="button" onclick="location.href='/payments/{{ $payment->id }}/edit';">
								Edit
								<i class="material-icons right">create</i>
							</button>
							
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection


