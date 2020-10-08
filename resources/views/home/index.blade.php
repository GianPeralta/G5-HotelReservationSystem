@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
					<h1 style="color: #ee6e73; text-align: center;">Welcome {{ auth()->user()->name }}</h1>
					<h5>Where would you like to go?</h5>

					<a href="/guests">
						<h6>Guests &#x3e;&#x3e;</h6>
					</a>
					<hr>	
					
					<a href="/rooms">
						<h6>Rooms &#x3e;&#x3e;</h6>
					</a>
					<hr>

					<a href="/room-types">
						<h6>Room Types &#x3e;&#x3e;</h6>
					</a>
					<hr>

					<a href="/reservations">
						<h6>Reservations &#x3e;&#x3e;</h6>
					</a>
					<hr>

					<a href="/reservation_statuses">
						<h6>Reservation Statuses &#x3e;&#x3e;</h6>
					</a>
					<hr>

					<a href="/payments">
						<h6>Payments &#x3e;&#x3e;</h6>
					</a>
					<hr>

					<a href="/services">
						<h6>Services &#x3e;&#x3e;</h6>
					</a>
					<hr>

					<h5 style="padding-top: 10px;">Hotel Staff</h5>
					<a href="/staff-users">
						<h6>Staff Users &#x3e;&#x3e;</h6>
					</a>
					<hr>
					<a href="/user-roles">
						<h6>User Roles &#x3e;&#x3e;</h6>
					</a>
					<hr>
					<div style="padding-top: 50px;">
						<a href="/logout">
							<button class="btn waves-effect wave-light" type="logout">Logout
									<i class="material-icons right">directions_run</i>
							</button>
						</a>
						</div>
			</div>
		</div>
	</div>
@endsection