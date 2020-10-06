@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
					<!-- return button -->
					<br>
					<button class="btn waves-effect wave-light"><a style="color: #fff;" href="/reservation_statuses">Cancel
						<i class="material-icons right">cancel</i></a>
					</button>
					<hr>
					
					<h4>Create Reservation Status</h4>
					<form action="/reservation_statuses" method="POST">
						@include('layouts.errors')
						@csrf
					     <div class="row">
					       <div class="input-field col s12">
					         <input placeholder="Reservation ID" type="number" name="reservation_id">
					         <label for="reservation_id">Reservation ID</label>
					       </div>
					     </div>
					     <div class="row">
					       <div class="input-field col s12">
					         <input placeholder="Status" type="text" name="status">
					         <label for="status">Status</label>
					       </div>
					     </div>
					     <div class="row">
					       <div class="input-field col s12">
					         <input placeholder="Description" type="text" name="description">
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