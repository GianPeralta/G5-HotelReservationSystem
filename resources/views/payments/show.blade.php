@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<!-- return button -->
				<br>
				<button class="btn waves-effect wave-light"><a style="color: #fff;" href="/payments">Cancel
					<i class="material-icons right">cancel</i></a>
				</button>
				<hr>
				<!-- end return button -->

				<h5>Payment ID: <span style="color: #ee6e73; font-family: Times New Roman, Times, serif; font-weight: bold;">{{ $payment->id }}</span> | <a href="/payments/{{ $payment->id }}/edit">Edit</a></h5>

				<p style="text-indent: 50px;">Status: <span style="color: #ee6e73; font-family: Times New Roman, Times, serif; font-weight: bold;">{{ $payment->status }}</span></p>

				<p style="text-indent: 50px;">Description: <span style="color: #ee6e73; font-family: Times New Roman, Times, serif; font-weight: bold;">{{ $payment->description }}</span></p>

				<p style="text-indent: 50px;">Guest ID: <span style="color: #ee6e73; font-family: Times New Roman, Times, serif; font-weight: bold;">{{ $payment->guest_id }}</span></p>
			</div>
			
			<!-- delete button -->
			<hr>
			<form action="/payments/{{ $payment->id }}" method='POST'>
					@csrf
					@method('DELETE')	
					<button class="btn" type='submit'>
					Delete
						<i class="material-icons right">delete</i></a>
					</button>
			</form>
			<!-- end delete button -->
		</div>
	</div>
@endsection