@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="row">
					<h5>Staff User ID: <span style="color: #ee6e73;">{{ $staff_user->id }} </span></h5>
					<ol>
						<p>Name: <span style="color: #ee6e73;">{{ $staff_user->name }}</span></p>
						<p>User Role ID: <span style="color: #ee6e73;">{{ $staff_user->user_role->id }}</span></p>
						<p>Title: <span style="color: #ee6e73;">{{ $staff_user->user_role->title }}</span>
					</ol>
				</div>

				<div class="row">
					<hr>
					<h6>Options</h6>
					<form action="/staff-users/{{ $staff_user->id }}" method='POST'>
							@csrf
							@method('DELETE')
							<button class="btn btn-primary" type="button" onclick="location.href='/staff-users';">
								Cancel
								<i class="material-icons right">cancel</i>
							</button>
							<button class="btn btn-primary" type="submit">
								Delete
								<i class="material-icons right">delete</i>
							</button>
							<button class="btn btn-primary" type="button" onclick="location.href='/staff-users/{{ $staff_user->id }}/edit';">
								Edit
								<i class="material-icons right">create</i>
							</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection


