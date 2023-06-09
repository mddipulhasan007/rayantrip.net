@extends('main')

@section('content')

<div class="card">
	<div class="card-header">Dashboard <a href="{{ route('editprofile') }}" class=" text-right btn btn-info">Edit Profile</a> </div>
	<div class="card-body">
		<h3>Current User ID</h3>
		ID: {{$user_id}} <br>
		Name: {{$user_name}} <br>
		Email,: {{$user_email}} <br>
		Password: {{$user_password}}
	</div>
</div>

@endsection('content')
