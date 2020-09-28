@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
					<h1>WELCOME TO THE LOGIN PAGE</h1>
					<br>
					<h5>Please Sign-in below</h5>
					<form action='/' method= 'POST'>
						@include('layouts.errors')
						@csrf
						<input type="email" name='email' required placeholder="Email Address">
						<input type="password" name='password' required placeholder="Password">
						<button class="btn waves-effect wave-light" type="submit">Submit
							<i class="material-icons right">send</i>
						</button>
					</form>

			</div>
		</div>
	</div>
@endsection