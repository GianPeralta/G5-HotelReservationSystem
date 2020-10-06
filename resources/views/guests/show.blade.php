@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<!-- return button -->
				<br>
				<button class="btn waves-effect wave-light"><a style="color: #fff;" href="/guests">
					Cancel
					<i class="material-icons right">cancel</i></a>
				</button>
				<hr>
				<!-- return button -->

				<h5>
					Guest ID: <span class="hi">{{ $guest->id }}</span> | 
					<a href="/guests/{{ $guest->id }}/edit">Edit</a>
				</h5>

				<p style="text-indent: 50px;">
					Name: 
					<span style="color: #ee6e73; font-family: Times New Roman, Times, serif; font-weight: bold;">
						{{ $guest->first_name }} {{ $guest->last_name }}
					</span>
				</p>

				<p style="text-indent: 50px;">
					Contact Number: <span style="color: #ee6e73; font-family: Times New Roman, Times, serif; font-weight: bold;">
						{{ $guest->contact_number }}
					</span>
				</p>

				<p style="text-indent: 50px;">
					Email: <span style="color: #ee6e73; font-family: Times New Roman, Times, serif; font-weight: bold;">
						{{ $guest->email }}
					</span>
				</p>
			</div>
			<hr>

			<div class="row">
				<caption>Payments</caption>
					<table>
						<thead>
							<tr>
								<th>Status</th>
								<th>Description</th>
								<th>Payment ID</th>
							</tr>
						</thead>
						<tbody>
							@foreach($guest->payments as $payment)
								<tr>
									<td>{{ $payment->status }}</td>
									<td>{{ $payment->description }}</td>
									<td>{{ $payment->id }}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
			</div>

			<!-- delete button -->
			<form action="/guests/{{ $guest->id }}" method='POST'>
					@csrf
					@method('DELETE')	
					<button class="btn" type='submit'>
					Delete
						<i class="material-icons right">delete</i></a>
					</button>
			</form>
			<!-- delete button -->
		</div>
	</div>
@endsection