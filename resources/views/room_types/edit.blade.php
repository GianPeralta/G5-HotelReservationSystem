
	<form action="/room-types/{{ $room_type->id }}" method='POST'>
		@method('PUT')
		@include('layouts.errors')
		@csrf
		<h5>Edit Room Type</h5>
	  	<div class="form-group">
		    <label for="standard_rate">Standard Rate</label>
		    <input type="number" class="form-control" name="standard_rate" value="{{ $room_type->standard_rate }}" >
	  	</div>
		<div class="form-group">
		    <label for="description">Room type</label>
		    <input type="text" class="form-control" name="description" value="{{ $room_type->description }}" >
		</div>
	  	<button type="submit" class="btn btn-primary" name="action">Submit</button>
	</form>
