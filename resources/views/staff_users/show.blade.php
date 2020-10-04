
	<a href="/staff-users">&lt&lt All Staff Users</a>
	<hr>
	
	<h5>Staff User ID: {{ $staff_user->id }} <a href="/staff-users/{{ $staff_user->id }}/edit">EDIT</a></h5>
	<ul>
		<p><span class="black-hi">Name:</span> {{ $staff_user->name }}</p>
		<p><span class="black-hi">User Role ID:</span> {{ $staff_user->user_role_id }}</p>
	</ul>
	<form action="/staff-users/{{ $staff_user->id }}" method='POST'>
			@csrf
			@method('DELETE')
			<button class="btn btn-primary" type="submit">DELETE STAFF USER</button>
	</form>


