@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
					<h2>Welcome to the Login Page</h2>
					<br>
					<h5>Please Login below</h5>
					<form action='/' method= 'POST'>
						@include('layouts.errors')
						@csrf
						<input type="email" name='email' required placeholder="Email Address">
						<input type="password" name='password' required placeholder="Password">
						<button class="btn waves-effect wave-light" type="login">Login
							<i class="material-icons right">send</i>
						</button>
					</form>
					<br>
					<hr>
					<h5>Don't have an Account?</h5>
					<a href="/register">
						<button class="btn waves-effect wave-light" type="register">Register
								<i class="material-icons right">send</i>
						</button>
					</a>

			</div>
		</div>
	</div>
@endsection