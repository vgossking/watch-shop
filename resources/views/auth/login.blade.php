@extends('layouts.watchlayout')

@section('content')
    <div class="account-in">
        <div class="container">

            <div class="col-md-7 account-top">
                <h3>Account</h3>
                <form role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div>
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6 ">
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div >
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6 {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox-password">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>

                            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <a class="btn btn-link" href="{{ url('/register') }}">
                                Do not have an account? Register
                            </a>
                        </div>
                    </div>
                </form>
            </div>

            <div class="clearfix"> </div>
        </div>
    </div>

@endsection
