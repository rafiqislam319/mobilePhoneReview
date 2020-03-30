<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin-Login</title>

    <!-- Core CSS - Include with every page -->
    <link href="{{asset('admin')}}/css2/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('admin')}}/font-awesome2/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="{{asset('admin')}}/css2/sb-admin.css" rel="stylesheet">

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Admin Login</h3>
                </div>
                <div class="panel-body">
                    {{--<form role="form" method="POST" action="{{ route('login') }}">--}}
                      {{--@csrf --}}
                    {!!Form::open(['url'=>'/login','method'=>'POST'])!!}
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        {{Form::email('email',null,['class'=>'form-control','placeholder'=>'enter your email'])}}
                        @if ($errors->has('email'))
                            <span class="help-block" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        {{Form::password('password',['class'=>'form-control','placeholder'=>'enter your password'])}}
                        @if ($errors->has('password'))
                            <span class="help-block" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="checkbox">
                        <label>{{Form::checkbox('name', 'rememberMe')}}Remember Me</label>
                    </div>
                    <div class="form-group">
                        {{Form::submit('Login',['class'=>'btn btn-success btn-block','name'=>'btn'])}}
                    </div>
                    {!!Form::close()!!}
                    {{--</form>--}}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Core Scripts - Include with every page -->
<script src="{{asset('admin')}}/js2/jquery-1.10.2.js"></script>
<script src="{{asset('admin')}}/js2/bootstrap.min.js"></script>
<script src="{{asset('admin')}}/js2/plugins/metisMenu/jquery.metisMenu.js"></script>

<!-- SB Admin Scripts - Include with every page -->
<script src="{{asset('admin')}}/js2/sb-admin.js"></script>

</body>

</html>
