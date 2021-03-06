@extends('master')

@section('title')
    Login
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group mb-0">
                <div class="card p-4">
                    <div class="card-block">
                        <h1>Login</h1>
                        <p class="text-muted">Sign In to your account</p>
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Email</label>

                                <div class="col-md-6">
                                    <input id="email" class="form-control" name="email"
                                           value="{{ old('email') }}" required autofocus>

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
                                            <input type="checkbox"
                                                   name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-success">
                                        Login
                                    </button>

                                </div>
                            </div>
                        </form>


                    </div>
                </div>
                <div class="card card-inverse card-primary py-5 d-md-down-none" style="width:44%">
                    <div class="card-block text-center">
                        <div>
                            <h2>Sign up</h2>
                            <p>Don't have an account? Click the Register Now! Button below to go to our registration
                                page, or try one of the social media login options below!</p>
                            <a href="/register" type="button" class="btn btn-primary">Register Now!</a>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="row justify-content-center">
                            <h4 class="card-title text-center">Use Social Media Login!</h4>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <a href="{{ url('/login/facebook') }}" class="btn btn-block btn-facebook">
                                    <span>Facebook</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{ url('/login/google') }}" class="btn btn-block btn-google-plus">
                                    <span>Google</span>
                                </a>
                            </div>

                            <div class="col-6">
                                <a href="{{ url('/login/linkedin') }}" class="btn btn-block btn-linkedin">
                                    <span>Linkedin</span>
                                </a>
                            </div>

                            <div class="col-6">
                                <a href="{{ url('/login/github') }}" class="btn btn-block btn-github">
                                    <span>Github</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop