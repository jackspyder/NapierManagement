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

                            <div class="col-3">
                                {{ Form::open(['route' => ['venues.destroy', $venue->id],'class' => 'pull-left']) }}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Delete this Venue!',['class' => 'btn btn-danger'])}}
                                {{ Form::close() }}
                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Classes at this venue
                </div>
                <div class="card-block">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                        <tr>
                            <th>Subject Title</th>
                            <th>Start Date</th>
                            <th>Capacity</th>
                            <th>Spaces Left</th>
                            <th>Members Enrolled</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($venue->lessons as $lesson)
                            <tr>
                                <td>{{ $lesson->subject->title }}</td>
                                <td>{{ $lesson->start_date }}</td>
                                <td>{{ $lesson->capacity }}</td>
                                <td>{{ $lesson->spaces_left }}</td>
                                <td>{{ $lesson->users->count() }}</td>
                                <td><a href="/admin/lessons/{{ $lesson->id }}" class="btn-sm btn-success">View</a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/.col-->
    </div>
    <!--/.row-->

@stop