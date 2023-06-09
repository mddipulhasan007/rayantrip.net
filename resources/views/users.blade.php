@extends('main')

@section('content')

<div class="card">
	<div class="card-header">All User List</div>
	<div class="card-body">
	<table class="table">
		<thead>
			<tr>
			<th scope="col">#ID</th>
			<th scope="col">Name</th>
			<th scope="col">Email</th>
			<th scope="col">Password</th>
			</tr>
		</thead>
		<tbody>
            @foreach ($users as $row)
			<tr>
				<th scope="row"> {{ $row->id}} </th>
				<td>{{ $row->name}}</td>
				<td>{{ $row->email}}</td>
				<td>{{ $row->password}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
</div>

@endsection('content')
