@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
					<h2>Welcome to the register page</h2>
					<br>
					<h5>Please Register below</h5>
					<form action='/register' method= 'POST'>
						@include('layouts.errors')
						@csrf
						<input type="text" name='name' required placeholder="Name">
						<input type="email" name='email' required placeholder="Email ">
						<input type="password" name='password' required placeholder="Password">

						<button class="btn waves-effect wave-light" type="submit">Submit
							<i class="material-icons right">send</i>
						</button>
					</form>
			</div>
		</div>
	</div>
@endsection