@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="row">
					<h5>User Role ID: <span style="color: #ee6e73;">{{ $user_role->id }} </span></h5>
					<ol>
						<p>Title: <span style="color: #ee6e73;">{{ $user_role->title }}</span></p>
					</ol>
				</div>

				<!-- Rooms -->
				<div class="row">
					<table>
						<caption>Staff users with User role {{ $user_role->id }}</caption>
						<thead>
							<tr>
								<th style="color: #ee6e73; font-size: 20px;">ID</th>
								<th style="color: #ee6e73; font-size: 20px;">Name</th>
							</tr>
						</thead>
						<tbody>
							@foreach($user_role->staff_users as $staff_user)
								<tr>
									<td>{{ $staff_user->id }}</td>
									<td>{{ $staff_user->name }}</td>
								</tr>
							@endforeach
						</tbody>
				</table>
				</div>
				
				<div class="row">
					<hr>
					<h6>Options</h6>
					<form action="/user-roles/{{ $user_role->id }}" method='POST'>
							@csrf
							@method('DELETE')
							<button class="btn btn-primary" type="button" onclick="location.href='/user-roles';">
								Cancel
								<i class="material-icons right">cancel</i>
							</button>
							<button class="btn btn-primary" type="submit">
								Delete
								<i class="material-icons right">delete</i>
							</button>
							<button class="btn btn-primary" type="button" onclick="location.href='/user-roles/{{ $user_role->id }}/edit';">
								Edit
								<i class="material-icons right">create</i>
							</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection


