
@include('layout.frontend.header')

    <div class="form-bg mt-5">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-5 m-auto">
                    <div class="form-container">
                        <div class="form-icon"><i class="fas fa-user"></i></div>
                        <h3 class="title">Login</h3>
                        <div class="login-social">
                            <a href="#" class="google-login-btn"> <img src="./assets/images/icons/google-logo.png"
                                    alt="g-icon"> Login with Google </a>
                        </div>
                        <div class="social-break-line">
                            <div class="social-line">
                            </div>
                            <h5><span>OR</span></h5>
                        </div>
						@if($message = Session::get('success'))

							<div class="alert alert-danger">
							{{ $message }}
							</div>

						@endif
                        <form action="{{ route('auth.validate_login') }}" method="post" class="form-horizontal">
					    @csrf
                            <div class="form-group">
                                <label>email</label>
                                <input class="form-control" type="email" name="email" placeholder="someone@example.com">
								@if($errors->has('email'))
									<span class="text-danger">{{ $errors->first('email') }}</span>
								@endif
                            </div>
                            <div class="form-group">
                                <label>password</label>
                                <input class="form-control" type="password" name="password" placeholder="rayan@trip#123">
								@if($errors->has('password'))
									<span class="text-danger">{{ $errors->first('password') }}</span>
								@endif
                            </div>
                            <span class="forgot-password"><a href="#">Forgot Password?</a></span>
                            <button type="submit" class="btn btn-default">Login</button>
                        </form>
                        <h4 class="bottom-login"> Don't have an Account? <a href="{{ route('registration') }}">Sign Up</a> </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('layout.frontend.footer')