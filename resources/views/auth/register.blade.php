<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IUTCMS - Register</title>

    <!-- Custom fonts for this template-->
    <link href="LoginAssets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="LoginAssets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i"
        rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">
    <div class="container d-flex align-items-center" style="padding-top: 20px;">


        <!-- Uncomment below if you prefer to use text as a logo -->
        <h1 class="logo mr-auto" ><a href="http://127.0.0.1:8000" style="color: black">
            <img src="{{asset('images/Logo.png')}}" style="width: 100px; height: 100px; border-radius: 50%;" /> IUTCMS</a></h1>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="http://127.0.0.1:8000" style="color: black">Home</a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form method="POST" class="user" action="{{ route('register') }}">
                            @csrf<div class="col-sm-6">Name</div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input id="name" type="text"
                                           class="form-control form-control-user @error('name') is-invalid @enderror"
                                           name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                           placeholder="Name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div><div class="col-sm-6">Email</div></div>
                            <div class="form-group">
                                <input id="email" type="email"
                                       class="form-control form-control-user @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email""
                                placeholder="Email Address">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">Password</div>
                                <div class="col-sm-6">Repeat Password</div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input id="password" type="password"
                                           class="form-control form-control-user @error('password') is-invalid @enderror"
                                           name="password" required autocomplete="new-password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password"placeholder="Repeat Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn-user">
                                {{ __('Register') }}
                            </button>
                            <hr>
                            
                                <a class="btn btn-primary btn-block btn-user" href="{{ url('/auth/redirect') }}" class="btn btn-primary">
                                Or Sign in with <img src="https://img.icons8.com/officexs/16/000000/google-logo.png"/>oogle</a>
                            <hr>
                        </form>
                        <hr>
{{--                        <div class="text-center">--}}
{{--                            <a class="small" href="forgot-password.html">Forgot Password?</a>--}}
{{--                        </div>--}}
                        <div class="text-center">
                            <a href="{{ route('login') }}">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
</body>
</html>