@extends('master')

@section('title')
    {{ $venue->name }}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
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
                            <div class="col-auto info-body">{{ $venue->name }}</div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-3 info-heading">
                                <strong>Venue Address: </strong>
                            </div>
                            <div class="col-auto info-body">{{ $venue->address }}</div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-3 info-heading">
                                <strong>Venue City: </strong>
                            </div>
                            <div class="col-auto info-body">{{ $venue->city }}</div>
                        </div>


                        <div class="row">
                            <div class="col-3 info-heading">
                                <strong>Venue Post-Code: </strong>
                            </div>
                            <div class="col-auto info-body">{{ $venue->post_code }}</div>
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

    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Currently Available Classes
                </div>
                <div class="card-block">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                        <tr>
                            <th>Subject Title</th>
                            <th>Venue Name</th>
                            <th>City</th>
                            <th>Start Date</th>
                            <th>Duration (Days)</th>
                            <th>Capacity</th>
                            <th>Spaces Left</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($venue->lessons as $lesson)
                            <tr>
                                <td>{{ $lesson->subject->title }}</td>
                                <td>{{ $lesson->venue->name }}</td>
                                <td>{{ $lesson->venue->city }}</td>
                                <td>{{ $lesson->start_date }}</td>
                                <td>{{ $lesson->subject->duration }}</td>
                                <td>{{ $lesson->capacity }}</td>
                                <td>{{ $lesson->spaces_left }}</td>
                                <td><a href="/classes/{{ $lesson->id }}" class="btn-sm btn-success">View</a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop