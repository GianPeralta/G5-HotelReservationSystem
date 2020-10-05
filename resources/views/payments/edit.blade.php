@extends('layouts.master')

@section('content')
	<form action="/payments/{{ $payment->id }}" method='POST'>
		@method('PUT')
		@csrf
		<h5>Update Payments</h5>
	  	<div class="form-group">
		    <label for="status">Status</label>
		    <input type="text" class="form-control" name="status" value='{{ $payment->status }}'>
	  	</div>
	  	<div class="form-group">
		    <label for="description">Description</label>
		    <input type="text" class="form-control" name="description" value='{{ $payment->description }}'>
	  	</div>
	  	<button type="submit" class="btn btn-primary" name="action">Submit</button>
	</form>
@endsection