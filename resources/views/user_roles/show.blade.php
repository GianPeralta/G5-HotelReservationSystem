
	<a href="/user-roles">&lt&lt All User Roles</a>
	<hr>
	
	<h5>User Role ID: {{ $user_role->id }} <a href="/user-roles/{{ $user_role->id }}/edit">EDIT</a></h5>
	<ul>
		<p><span class="black-hi">Name:</span> {{ $user_role->name }}</p>
	</ul>

	<div class="row">
					<table>
						<thead>
							<tr>
								<th>Name</th>
							</tr>
						</thead>
						<tbody>
							@foreach($user_role->staff_users as $staff_user)
								<tr>
									<td>{{ $staff_user->name }}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
	</div>
	<form action="/user-roles/{{ $user_role->id }}" method='POST'>
			@csrf
			@method('DELETE')
			<button class="btn btn-primary" type="submit">DELETE USER ROLE</button>
	</form>


