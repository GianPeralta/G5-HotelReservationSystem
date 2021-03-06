@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<form action="/rooms" method='POST'>
					@include('layouts.errors')
					@csrf
					<h5>Create a new Room</h5>
				  	<div class="form-group">
					    <label for="name">Name</label>
					    <input type="text" class="form-control" name="name" required>
				  	</div>
				  	<div class="form-group">
					    <label for="status">Status</label>
					    <input type="text" class="form-control" name="status" required>
				  	</div>
				  	<div class="form-group">
					    <label for="floor_level">Floor level</label>
					    <input type="number" class="form-control" min="1" max="10" name="floor_level" required>
				  	</div>
					<div class="form-group">
					    <label for="room_type_id">Room type</label>
					    <select name="room_type_id" class="browser-default">
					    	@foreach($room_types as $room_type)
					    			<option value="{{ $room_type->id }}">{{ $room_type->description }}</option>
					    	@endforeach
					    </select>
				  	</div>

				  	<button type="button" onclick="location.href='/rooms';" class="btn waves-effect wave-light">
							Cancel
							<i class="material-icons right">cancel</i>
					</button>
					<button type="submit" class="btn waves-effect wave-light" name="action">
							Submit
							<i class="material-icons right">send</i>
					</button>
				</form>
			</div>
		</div>
	</div>
@endsection