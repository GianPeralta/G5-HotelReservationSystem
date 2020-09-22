@extends('layouts.master')

@section('content')
	<form action="/rooms/{{ $room->id }}" method='POST'>
		@method('PUT')
		@csrf
		<h5>Edit Room</h5>
	  	<div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" name="name" value="{{ $room->name }}">
	  	</div>
	  	<div class="form-group">
		    <label for="status">Status</label>
		    <br>
		    <select class="form-control" name="status">
			    <option value="Available">Available</option>
			    <option value="Occupied">Occupied</option>
			    <option value="Under Maintenance">Under Maintenance</option>
  			</select>
	  	</div>
	  	<div class="form-group">
		    <label for="floor_level">Floor level</label>
		    <input type="number" class="form-control" min="1" max="11" name="floor_level" value="{{ $room->floor_level }}">
	  	</div>
		<div class="form-group">
		    <label for="room_type">Room type</label>
		    <input type="number" class="form-control" name="room_type" value="{{ $room->room_type_id }}">
	  	</div>
	  	<button type="submit" class="btn btn-primary" name="action">Submit</button>
	</form>
@endsection