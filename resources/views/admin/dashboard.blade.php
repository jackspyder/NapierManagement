@extends('master')

@section('title')
    Dashboard
@endsection

@section('content')


    <h3>Admin Dash</h3>

    @if (Auth::guest())
        <li><a href="login/github">Login</a></li>

    @else

        <p>{{ Auth::user() }}</p>
        <p> {{ Auth::user()->accounts }}</p>
    @endif
@stop