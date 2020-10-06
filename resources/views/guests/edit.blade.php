@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<!-- return button -->
					<br>
					<button class="btn waves-effect wave-light"><a style="color: #fff;" href="/guests/{{ $guest->id }}">Cancel
						<i class="material-icons right">cancel</i></a>
					</button>
					<hr>


					<h5>Update Guest</h5>
					<form action="/guests/{{ $guest->id }}" method="POST">
						@method('PUT')
						@include('layouts.errors')
						@csrf
					     <div class="row">
					       <div class="input-field col s6">
					         <input placeholder="First Name" id="first_name" type="text" name="first_name" value='{{ $guest->first_name }}'>
					         <label for="first_name">First Name</label>
					       </div>
					       <div class="input-field col s6">
					         <input placeholder="Last Name" id="last_name" type="text" name="last_name" value='{{ $guest->last_name }}'>
					         <label for="last_name">Last Name</label>
					       </div>
					     </div>
					     <div class="row">
					       <div class="input-field col s12">
					         <input placeholder="Contact Number" id="contact_number" type="text" name="contact_number" value='{{ $guest->contact_number }}'>
					         <label for="first_name">Contact Number</label>
					       </div>
					     </div>
					     <div class="row">
					       <div class="input-field col s12">
					         <input placeholder="Email" id="email" type="email" name="email" value='{{ $guest->email }}'>
					         <label for="email">Email</label>
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