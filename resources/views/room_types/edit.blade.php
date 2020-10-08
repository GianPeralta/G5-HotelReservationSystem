@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<form action="/room-types/{{ $room_type->id }}" method='POST'>
					@method('PUT')
					@include('layouts.errors')
					@csrf
					<h5>Edit Room Type</h5>
				  	<div class="form-group">
					    <label for="standard_rate">Standard Rate</label>
					    <input type="number" class="form-control" name="standard_rate" step="0.0001" value="{{ $room_type->standard_rate }}" >
				  	</div>
					<div class="form-group">
					    <label for="description">Room type</label>
					    <input type="text" class="form-control" name="description" value="{{ $room_type->description }}" >
					</div>
				  	<button type="button" onclick="location.href='/room-types/{{ $room_type->id }}';" class="btn btn-primary">
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
