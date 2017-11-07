@extends('layouts.login')

@section('login')
  <div class="container">

    <div class="login-box animated fadeInUp">
      <div class="box-header">
        <h2>Iqi Tour & Travel</h2>
      </div>
      <form class="form-horizontal" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          @if ($errors->has('username') || $errors->has('password') )
            <span class="help-block">
              <strong style="color:red"><small>Username/Password salah, silahkan cek kembali!</small></strong>
            </span>
            <hr>
          @endif

          <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
              <label for="username" class="col-md-4 control-label">Username</label>

              <div class="col-md-6">
                  <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

              </div>
          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-4 control-label">Password</label>

              <div class="col-md-6">
                  <input id="password" type="password" class="form-control" name="password" required>
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-8 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                      Login
                  </button>


              </div>
          </div>
      </form>
      <a href="#"><p class="small">Forgot your password?</p></a>
    </div>
  </div>
  </body>

  <script>
  $(document).ready(function () {
      $('#logo').addClass('animated fadeInDown');
      $("input:text:visible:first").focus();
  });
  $('#username').focus(function() {
    $('label[for="username"]').addClass('selected');
  });
  $('#username').blur(function() {
    $('label[for="username"]').removeClass('selected');
  });
  $('#password').focus(function() {
    $('label[for="password"]').addClass('selected');
  });
  $('#password').blur(function() {
    $('label[for="password"]').removeClass('selected');
  });
  </script>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
