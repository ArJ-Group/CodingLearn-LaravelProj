<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/stylelogin.css') !!}">

    <title>Welcome To Coding Learn Application</title>
</head>

<body>
    <div class="container">

        <div class="forms-container">
            <div class="signin-signup">

                <form method="POST" action="{{ route('register') }}" class="sign-in-form">
                    @csrf
                    <br>
                    <img src="a/images/logo.png" width="150px"><br>
                    <h4 class="title">Sign up</h4>

                    <div class="input-field">
                        <i class="fas fa-user"></i>

                        <input id="username" placeholder="Username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="input-field">
                        <i class="fa fa-address-card-o"></i>

                        <input id="name" placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class="input-field">
                        <i class="fa fa-envelope-open"></i>

                        <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>


                        <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>


                <form method="POST" action="{{ route('login') }}" class="sign-up-form">
                    @csrf
                    <img src="a/images/logo.png" width="400px">
                    <br>
                    <h2 class="title">Sign in</h2>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="username" placeholder="Username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="input-field">
                        <i class="fas fa-lock"></i>

                        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input id="checkbox13" class="filled-in chk-col-blue" type="checkbox" name="checkbox13" {{ old('checkbox13') ? 'checked' : '' }}>

                                <label class="form-check-label" for="checkbox13">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn solid">
                        {{ __('Login') }}
                    </button>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">

                            @if (Route::has('password.request'))
                            <a style="color: grey;text-decoration: none;font-size: 13px;font-style: bold;opacity:70%;" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </div>
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>

            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>One of us ?</h3>
                        <p>
                            Start Learn Coding By Click
                        </p>
                        <button class="btn transparent" id="sign-up-btn">
                            Sign in
                        </button>
                    </div>
                    <img src="css/log.svg" class="image" alt="" />
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3>New Here ?</h3>
                        <p>
                            Start Learn Coding By Click
                        </p>
                        <button class="btn transparent" id="sign-in-btn">
                            Sign up
                        </button>
                    </div>
                    <img src="css/register.svg" class="image" alt="" />
                </div>
            </div>
        </div>


        <script src="css/app.js"></script>
</body>

</html>