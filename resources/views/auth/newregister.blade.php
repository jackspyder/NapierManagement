@extends('master')

@section('title')
    View Subject
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col-10">
            <!-- if there are creation errors, they will show here -->
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-8">

            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Register
                </div>
                <div class="card-block">
                    {{ Form::open(['url' => '/register', 'method' => 'POST']) }}
                    <div class="form-group">

                        <div class="form-group">
                            {{ Form::label('forename', 'Forename') }}
                            {{ Form::text('forename', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('surname', 'Surname') }}
                            {{ Form::text('surname', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('dob', 'Date of Birth') }}
                            {{ Form::date('dob', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::text('email', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('address', 'Address') }}
                            {{ Form::text('address', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('post_code', 'Post Code') }}
                            {{ Form::text('post_code', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('occupation', 'Occupation') }}
                            {{ Form::text('occupation', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('company', 'Company') }}
                            {{ Form::text('company', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('password', 'Password') }}
                            {{ Form::password('password', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('password_confirmation', 'Confirm Password') }}
                            {{ Form::password('password_confirmation', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    {{ Form::submit('Register', array('class' => 'btn btn-success pull-right')) }}

                </div>
                {{ Form::close() }}

            </div>

            <div class="card-footer p-4">
                <div class="row">
                    <h4 class="card-title text-center">Use Social Media Login!</h4>
                </div>
                <div class="row">
                    <div class="col-6">
                        <a href="{{ url('/login/facebook') }}"
                           class="btn btn-block btn-facebook">
                            <span>Facebook</span>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="{{ url('/login/google') }}"
                           class="btn btn-block btn-google-plus">
                            <span>Google</span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <a href="{{ url('/login/linkedin') }}"
                           class="btn btn-block btn-linkedin">
                            <span>Linkedin</span>
                        </a>
                    </div>

                    <div class="col-6">
                        <a href="{{ url('/login/github') }}"
                           class="btn btn-block btn-github">
                            <span>Github</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop