@include('layout.frontend.header')

<div class="row justify-content-center mt-5">
	<div class="col-md-4 mt-5">
		<div class="card mt-5">
		<div class="card-header">Edit Profile</div>
		<div class="card-body">
			<form action="{{ route('auth.validate_editprofile') }}" method="POST">
				@csrf
				<div class="form-group mb-3">
					<input type="text" name="name" value="{{$user_name}}" class="form-control" placeholder="Name" />
					@if($errors->has('name'))
						<span class="text-danger">{{ $errors->first('name') }}</span>
					@endif
				</div>
				<div class="form-group mb-3">
					<input type="text" name="email" value="{{$user_email}}" class="form-control" placeholder="Email Address" />
					@if($errors->has('email'))
						<span class="text-danger">{{ $errors->first('email') }}</span>
					@endif
				</div>
				<div class="form-group mb-3">
					<input type="password" name="password" value="" class="form-control" placeholder="Enter new password" />
					@if($errors->has('password'))
						<span class="text-danger">{{ $errors->first('password') }}</span>
					@endif
				</div>
				<div class="d-grid mx-auto">
					<button type="submit" class="btn btn-dark btn-block">Update</button>
				</div>
			</form>
		</div>
	</div>
</div>

@include('layout.frontend.footer')
