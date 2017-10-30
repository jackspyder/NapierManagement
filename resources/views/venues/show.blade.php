@extends('master')

@section('title')
    Venue Entry
@endsection

@section('content')
    <div class="container">
        <a href="/admin/venues/{{ $venue->id }}/edit" class="btn btn-primary fa-pull-right">Edit Venue</a>
        <div class="row">

            <div class="col-md-12">


                <div class="card">
                    <div class="card-header">
                        <b>Details</b>
                    </div>
                    <div class="card-block">
                        <blockquote class="card-blockquote">

                            <div class="row">
                                <div class="col-3 info-heading">
                                    <strong>Venue Name: </strong>
                                </div>
                                <div class="col-3 info-body">{{ $venue->name }}</div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-3 info-heading">
                                    <strong>Venue Address: </strong>
                                </div>
                                <div class="col-3 info-body">{{ $venue->address }}</div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-3 info-heading">
                                    <strong>Venue City: </strong>
                                </div>
                                <div class="col-3 info-body">{{ $venue->city }}</div>
                            </div>


                            <div class="row">
                                <div class="col-3 info-heading">
                                    <strong>Venue Post-Code: </strong>
                                </div>
                                <div class="col-3 info-body">{{ $venue->post_code }}</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-3 info-heading">
                                    <strong>Google Map Location: </strong>
                                </div>
                            </div>
                            <br>
                            {!! $venue->location !!}


                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop