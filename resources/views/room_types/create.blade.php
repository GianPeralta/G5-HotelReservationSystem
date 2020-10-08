@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<form action="/room-types" method='POST'>
					@include('layouts.errors')
					@csrf
					<h5>Create a new Room Type</h5>
				  	<div class="form-group">
					    <label for="standard_rate">Standard Rate</label>
					    <input type="number" class="form-control" step="0.0001" name="standard_rate" required>
				  	</div>
					<div class="form-group">
					    <label for="description">Description</label>
					    <input type="text" class="form-control" name="description" required>
				  	</div>
				  	<button type="button" onclick="location.href='/room-types';" class="btn waves-effect wave-light">
							Cancel
							<i class="material-icons right">cancel</i>
					</button>
					<button type="submit" class="btn waves-effect wave-light" name="action">
							Submit
							<i class="material-icons right">send</i>
					</button>
				</form>
			</div>
		</div>
	</div>
@endsection
