@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
					<h5>Guests</h5>
					<a href="/guests/create">Create Guest</a>
					<ol>
						@foreach($guests as $guest)

							<li>
								<a href="/guests/{{ $guest->id }}">{{ $guest->first_name }} {{ $guest->last_name }}</a>
							</li>
						@endforeach
					</ol>	
			</div>
		</div>
	</div>
@endsection