@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<form action="/rooms/{{ $room->id }}" method='POST'>
					@method('PUT')
					@include('layouts.errors')
					@csrf
					<h5>Edit Room</h5>
				  	<div class="form-group">
					    <label for="name">Name</label>
					    <input type="text" class="form-control" name="name" value="{{ $room->name }}" required>
				  	</div>
				  	<div class="form-group">
					    <label for="status">Status</label>
					    <input type="text" class="form-control" name="status" value="{{ $room->status }}" required>
				  	</div>
				  	<div class="form-group">
					    <label for="floor_level">Floor level</label>
					    <input type="number" class="form-control" min="1" max="11" name="floor_level" value="{{ $room->floor_level }}" required>
				  	</div>
					<div class="form-group">
					    <label for="room_type">Room type</label>
					    <input type="number" class="form-control" name="room_type_id" value="{{ $room->room_type_id }}" required>
				  	</div>
				  	<button type="button" onclick="location.href='/rooms/{{ $room->id }}';" class="btn btn-primary">
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
