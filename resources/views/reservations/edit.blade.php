@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
					<h5>Update Reservation</h5>
					<form action="/reservations/{{ $reservation->id }}" method="POST">
						@method('PUT')
						@include('layouts.errors')
						@csrf
					     <div class="row">
					       <div class="input-field col s12">
					         <input placeholder="Status" id="status" type="text" name="status" value='{{ $reservation-> status }}'>
					         <label for="status">Status</label>
					       </div>
					     </div>
					     <div class="row">
					       <div class="input-field col s12">
					         <input placeholder="Description" id="description" type="text" name="description" value='{{ $reservation-> description }}'>
					         <label for="description">Description</label>
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