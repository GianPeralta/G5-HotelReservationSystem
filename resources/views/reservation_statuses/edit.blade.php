@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<form action="/reservation_statuses/{{ $reservation_status->id }}" method='POST'>
					@method('PUT')
					@include('layouts.errors')
					@csrf
					<h5>Edit Reservation Status</h5>
					<div class="form-group">
					    <label for="reservation_id">Reservation ID</label>
					    <input type="number" class="form-control" name="reservation_id" value="{{ $reservation_status->reservation_id }}" required>
				  	</div>
				  	<div class="form-group">
					    <label for="status">Status</label>
					    <input type="text" class="form-control" name="status" value="{{ $reservation_status->status }}" required>
				  	</div>
				  	<div class="form-group">
					    <label for="description">Description</label>
					    <input type="text" class="form-control" name="description" value="{{ $reservation_status->description }}" required>
				  	</div>
				  	
				  	<button type="button" onclick="location.href='/reservation_statuses/{{ $reservation_status->id }}';" class="btn btn-primary">
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