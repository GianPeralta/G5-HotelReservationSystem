@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
					<h1>Welcome {{ auth()->user()->name }}</h1>
					<br>

					<a href="/guests">
						<h5>Go To Guests</h5>
					</a>

					<br>
					<a href="/reservation_statuses">
						<h5>Go To Reservation Statuses</h5>
					</a>

					<br>
					<a href="/logout">
						<button class="btn waves-effect wave-light" type="logout">Logout
								<i class="material-icons right">send</i>
						</button>
					</a>
			</div>
		</div>
	</div>
@endsection