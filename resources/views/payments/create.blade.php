@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
					<!-- return button -->
					<br>
					<button class="btn waves-effect wave-light"><a style="color: #fff;" href="/payments">Cancel
						<i class="material-icons right">cancel</i></a>
					</button>
					<hr>

					<h4>Create Payment</h4>
					<form action="/payments" method="POST">
						@include('layouts.errors')
						@csrf
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
					       <div class="input-field col s12">
					         <input placeholder="Guest ID" type="number" name="guest_id" required>
					         <label for="guest_id">Guest ID</label>
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