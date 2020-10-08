@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<form action="/user-roles/{{ $user_role->id }}" method='POST'>
					@method('PUT')
					@include('layouts.errors')
					@csrf
					<h5>Edit Room</h5>
				  	<div class="form-group">
					    <label for="title">Title</label>
					    <input type="text" class="form-control" name="title" value="{{ $user_role->title }}" required>
				  	</div>
				  	<button type="button" onclick="location.href='/user-roles/{{ $user_role->id }}';" class="btn btn-primary">
				  		Cancel
				  		<i class="material-icons right">cancel</i>
				  	</button>
				  	<button type="submit" class="btn btn-primary" name="action">
				  		Save
				  		<i class="material-icons right">save</i>
				  	</button>
				</form>
			</div>
		</div>
	</div>
@endsection
