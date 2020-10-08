@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<form action="/payments/{{ $payment->id }}" method='POST'>
					@method('PUT')
					@include('layouts.errors')
					@csrf
					<h5>Edit Payment</h5>
				  	<div class="form-group">
					    <label for="status">Status</label>
					    <input type="text" class="form-control" name="status" value="{{ $payment->status }}" required>
				  	</div>
				  	<div class="form-group">
					    <label for="description">Description</label>
					    <input type="text" class="form-control" name="description" value="{{ $payment->description }}" required>
				  	</div>
				  	<div class="form-group">
					    <label for="guest_id">Guest ID</label>
					    <input type="number" class="form-control" name="guest_id" value="{{ $payment->guest_id }}" required>
				  	</div>
				  	
				  	<button type="button" onclick="location.href='/payments/{{ $payment->id }}';" class="btn btn-primary">
				  		Cancel
				  		<i class="material-icons right">cancel</i>
				  	</button>
				  	<button type="submit" class="btn btn-primary" name="action">
				  		Save
				  		<i class="material-icons right">save</i>
				  	</button>
				</form>
			</div>
		</div>
	</div>
@endsection
