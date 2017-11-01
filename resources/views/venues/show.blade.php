@extends('master')

@section('title')
    Venue Entry
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col-10">
            <!-- will be used to show any messages -->
            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            @elseif(Session::has('warning'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ Session::get('warning') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                    <b>Venue Details</b>
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

    <div class="row justify-content-center">
        <div class="col-6">
            {{ Form::open(['route' => ['venues.destroy', $venue->id],'class' => 'pull-left']) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete this Venue!',['class' => 'btn btn-danger'])}}
            {{ Form::close() }}
        </div>
        <div class="col-4">
            <a href="/admin/venues/{{ $venue->id }}/edit" class="btn btn-primary fa-pull-right">Edit Venue</a>
        </div>
    </div>
    <br>

    <div class="row justify-content-center">
        <div class="col-10">
            <h3>Active Classes List</h3>
            <table class="table table-hover table-outline table-striped table-bordered">
                <thead class="thead-default">
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
@stop