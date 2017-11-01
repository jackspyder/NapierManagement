@extends('master')

@section('title')
    View Subject
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
                    <b>Details</b>
                </div>
                <div class="card-block">
                    <blockquote class="card-blockquote">

                        <div class="row">
                            <div class="col-3 info-heading">
                                <strong>Subject Title: </strong>
                            </div>
                            <div class="col-auto info-body">{{ $subject->title }}</div>
                        </div>

                        <div class="row">
                            <div class="col-3 info-heading">
                                <strong>Price of Subject: </strong>
                            </div>
                            <div class="col-auto info-body">£{{ $subject->price / 100 }}</div>
                        </div>

                        <div class="row">
                            <div class="col-3 info-heading">
                                <strong>Qualification Gained: </strong>
                            </div>
                            <div class="col-auto info-body">{{ $subject->qualification}}</div>
                        </div>

                        <div class="row">
                            <div class="col-3 info-heading">
                                <strong>Awarding Body: </strong>
                            </div>
                            <div class="col-auto info-body">{{ $subject->awarded_by}}</div>
                        </div>

                        <div class="row">
                            <div class="col-3 info-heading">
                                <strong>Subject Duration: </strong>
                            </div>
                            <div class="col-auto info-body">{{ $subject->duration }} days</div>
                        </div>

                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                    <b>Subject Overview</b>
                </div>
                <div class="card-block">
                    <blockquote class="card-blockquote">

                        {{ $subject->summary }}

                    </blockquote>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                    <b>Subject Description</b>
                </div>
                <div class="card-block">
                    <blockquote class="card-blockquote">

                        {{ $subject->description }}

                    </blockquote>
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
                        @foreach($subject->lessons as $lesson)
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