<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Admin :: Login </title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{ asset('backend') }}/assets/images/favicon.ico">

    <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend') }}/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend') }}/assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="wrapper-page">
        <div class="panel panel-color panel-primary panel-pages">

            <div class="panel-body">
                <h3 class="text-center m-t-0 m-b-15">
                    <a href="index.html" class="logo logo-admin"><img src="{{ asset('backend') }}/assets/images/logo_dark.png" height="28"
                            alt="logo"></a>
                </h3>
                <h4 class="text-muted text-center m-t-0"><b>Admin</b>Login</h4>

                <form class="form-horizontal m-t-20" action="{{ route('login') }}" Method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="col-xs-12">
                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email ID">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Your Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup">
                                    Remember me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Log
                                In</button>
                        </div>
                    </div>

                    <div class="form-group m-t-30 m-b-0">
                        {{-- <div class="col-sm-7">
                            <a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot
                                your password?</a>
                        </div> --}}
                        {{-- <div class="col-sm-5 text-right">
                            <a href="pages-register.html" class="text-muted">Create an account</a>
                        </div> --}}
                    </div>
                </form>
                
            </div>

        </div>
    </div>
 <!-- jQuery  -->
    <script src="{{ asset('backend') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/modernizr.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/detect.js"></script>
    <script src="{{ asset('backend') }}/assets/js/fastclick.js"></script>
    <script src="{{ asset('backend') }}/assets/js/jquery.slimscroll.js"></script>
    <script src="{{ asset('backend') }}/assets/js/jquery.blockUI.js"></script>
    <script src="{{ asset('backend') }}/assets/js/waves.js"></script>
    <script src="{{ asset('backend') }}/assets/js/wow.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/jquery.nicescroll.js"></script>
    <script src="{{ asset('backend') }}/assets/js/jquery.scrollTo.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/app.js"></script>

</body>

</html>
