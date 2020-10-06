@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
					<!-- return button -->
					<br>
					<button class="btn waves-effect wave-light"><a style="color: #fff;" href="/reservation_statuses">Cancel
						<i class="material-icons right">cancel</i></a>
					</button>
					<hr>
					<!-- /return button -->

					<h5>
						Reservation Status ID: 
						<span style="color: #ee6e73; font-family: Times New Roman, Times, serif; font-weight: bold;">
							{{ $reservation_status->id }}
						</span> | 
						<a href="/reservation_statuses/{{ $reservation_status->id }}/edit">
							Edit
						</a>
					</h5>


					<p style="text-indent: 50px;">Reservation ID: <span style="color: #ee6e73; font-family: Times New Roman, Times, serif; font-weight: bold;">{{ $reservation_status->reservation_id }}</span></p>

					<p style="text-indent: 50px;">Status: <span style="color: #ee6e73; font-family: Times New Roman, Times, serif; font-weight: bold;">{{ $reservation_status->status }}</span></p>

					<p style="text-indent: 50px;">Description: <span style="color: #ee6e73; font-family: Times New Roman, Times, serif; font-weight: bold;">{{ $reservation_status->description }}</span></p>

					<!-- delete button -->
					<hr>
					<form action="/reservation_statuses/{{ $reservation_status->id }}" method='POST'>
							@csrf
							@method('DELETE')	
							<button class="btn" type='submit'>
							Delete
								<i class="material-icons right">delete</i></a>
							</button>
					</form>
					<!-- end delete button -->
			</div>
		</div>
	</div>
@endsection