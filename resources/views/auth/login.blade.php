<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Pokemon Nostalgic | Log in</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="{{ asset("adminLTE/dist/css/bootstrap.min.css") }}" rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="{{ asset("adminLTE/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("adminLTE/dist/plugins/iCheck/square/blue.css")}}" rel="stylesheet"
          type="text/css"/>
    <script src="{{ asset ("adminLTE/dist/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
    <script src="{{ asset ("adminLTE/dist/plugins/iCheck/icheck.min.js") }}"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="{{ asset ("/js/app.js") }}"></script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#" id="mindefBold">Lidl Crunch</a>
    </div>
    <div class="login-box-body">
        @if(session()->has('message'))
            <div class="alert alert-danger alert-dismissible login-alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Error!</h4>
                {{ session()->get('message') }}
            </div>
        @endif
        <p class="login-box-msg">Log in to start playing</p>
        <form action="{{ route('login') }}" role="form" method="post">
            {{  csrf_field() }}
            <div class="form-group has-feedback">
                <input id="email" name="email" value="{{ old('email') }}"
                       type="text" class="form-control" placeholder="email">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong id="errorEmail">{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" id="password" name="password" class="form-control" placeholder="Wachtwoord">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input class="rememberMeBox" type="checkbox"> Remember me
                        </label>
                    </div>
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
            </div>
        </form>
        <!-- <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
            Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
            Google+</a>
        </div> -->
        <!-- /.social-auth-links -->

        <!-- <a href="#">I forgot my password</a><br>
        <a href="register.html" class="text-center">Register a new membership</a> -->

    </div>
</div>
</body>
</html>