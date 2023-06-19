@include('layout.frontend.header')
    <div class="form-bg mt-5">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-5 m-auto">
                    <div class="form-container">
                        <div class="form-icon"><i class="fas fa-user"></i></div>
                        <h3 class="title">Sign Up</h3>
                        <p>Create an account to easily use makerayantrip.com services.</p>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label>email</label>
                                <input class="form-control" type="email" placeholder="someone@example.com">
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input class="form-control" type="text" placeholder="+880 1xxxxxxxxx">
                            </div>
                            <div class="form-group">
                                <label>password</label>
                                <input class="form-control" type="password" placeholder="Make@trip#123">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    By creating an account you agree to our <a href="#">Terms & Conditions</a>
                                </label>
                            </div>
                            <button type="button" class="btn btn-default">Sign Up</button>
                        </form>
                        <h4 class="bottom-login"> Don't have an Account? <a href="{{ route('signin') }}">Sign In</a> </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('layout.frontend.footer')