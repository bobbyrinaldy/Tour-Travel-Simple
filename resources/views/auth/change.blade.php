@extends('layouts.app')

@section('content')
<center>
  @if (\Session::get('success'))
  <pre>{{\Session::get('success')}}</pre>
  @elseif (\Session::get('fail'))
  <pre>{{\Session::get('fail')}}</pre>
  @endif
</center>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Change Password</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/setting/change/{{auth::user()->id}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('oldPass') ? ' has-error' : '' }}">
                            <label for="oldPass" class="col-md-4 control-label">Old Password</label>

                            <div class="col-md-6">
                                <input id="oldPass" type="password" class="form-control" name="oldPass" required>

                                @if ($errors->has('oldPass'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('oldPass') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">New Password</label>

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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-warning">
                                    Update Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
