@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
					<!-- return button -->
					<br>
					<button class="btn waves-effect wave-light"><a style="color: #fff;" href="/payments/{{ $payment->id }}">Cancel
						<i class="material-icons right">cancel</i></a>
					</button>
					<hr>

					<h4>Update Payment</h4>
					<form action="/payments/{{ $payment->id }}" method="POST">
						@method('PUT')
						@include('layouts.errors')
						@csrf
					     <div class="row">
					       <div class="input-field col s12">
					         <input placeholder="Status" type="text" name="status" value='{{ $payment->status }}' required>
					         <label for="status">Status</label>
					       </div>
					   	 </div>
					   	 <div class="row">
					       <div class="input-field col s12">
					         <input placeholder="Description" type="text" name="description" value='{{ $payment->description }}' required>
					         <label for="description">Description</label>
					       </div>
					     </div>
					     <div class="row">
					       <div class="input-field col s12">
					         <input placeholder="Guest ID" type="number" name="guest_id" value='{{ $payment->id }}' required>
					         <label for="guest_id">Guest ID</label>
					       </div>
					     </div>
					     <div class="row">
					     	<div class="col s12">
					     		<button class="btn waves-effect wave-light" type="submit" name="action">Submit
					     			<i class="material-icons right">send</i>
					     		</button>
					     	</div>
					     </div>
					</form>
			</div>
		</div>
	</div>
@endsection