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
	</div>
@endsection