@extends('master')

@section('title')
    Venue Entry
@endsection

@section('content')
    <div class="container">

        <div class="row">

            <div class="col-md-10">

                <a href="/admin/venues/{{ $venue->id }}/edit" class="btn btn-primary fa-pull-right">Edit Venue</a>

                <div class="card">
                    <div class="card-header">
                        <b>Details</b>
                    </div>
                    <div class="card-block">
                        <blockquote class="card-blockquote">

                            <ul class="list">
                                <li><b>Venue Name: </b>{{ $venue->name }}</li>
                                <li><b>Address: </b>£{{ $venue->address }}</li>
                                <li><b>City: </b>{{ $venue->city}}</li>
                                <li><b>Post Code: </b>{{ $venue->post_code}}</li>
                                <li><b>Google Map Location: </b></li>
                                <li>{!! $venue->location !!}</li>
                            </ul>

                        </blockquote>
                    </div>
                </div>


@stop