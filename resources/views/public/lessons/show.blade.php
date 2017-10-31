@extends('master')

@section('title')
    View Class
@endsection

@section('content')

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="container">
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
                                    <strong>Subject Title: </strong>
                                </div>
                                <div class="col-3 info-body">{{ $lesson->subject->title }}</div>
                            </div>

                            <div class="row">
                                <div class="col-3 info-heading">
                                    <strong>Price of Subject: </strong>
                                </div>
                                <div class="col-3 info-body">£{{ $lesson->subject->price }}</div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-3 info-heading">
                                    <strong>Qualification Gained: </strong>
                                </div>
                                <div class="col-3 info-body">{{ $lesson->subject->qualification}}</div>
                            </div>

                            <div class="row">
                                <div class="col-3 info-heading">
                                    <strong>Awarding Body: </strong>
                                </div>
                                <div class="col-3 info-body">{{ $lesson->subject->awarded_by}}</div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-3 info-heading">
                                    <strong>Subject Duration: </strong>
                                </div>
                                <div class="col-3 info-body">{{ $lesson->subject->duration }} days</div>
                            </div>

                            <div class="row">
                                <div class="col-3 info-heading">
                                    <strong>Start Date: </strong>
                                </div>
                                <div class="col-3 info-body">{{ $lesson->start_date }}</div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-3 info-heading">
                                    <strong>Spaces Left: </strong>
                                </div>
                                <div class="col-3 info-body">{{ $lesson->spaces_left }}</div>
                            </div>

                            <div class="row">
                                <div class="col-3 info-heading">
                                    <strong>Venue Name: </strong>
                                </div>
                                <div class="col-3 info-body">{{ $lesson->venue->name }}</div>

                            </div>

                            <hr>
                            <div class="row justify-content-around">


                                <div class="col-3">
                                    <a href="/venues/{{ $lesson->venue->id }}" class="btn btn-primary">View Venue</a>
                                </div>


                                <div class="col-3">
                                    <a href="/subjects/{{ $lesson->subject->id }}" class="btn btn-primary">Subject
                                        Overview</a>
                                </div>

                                <div class="col-3">
                                    <a href="{{ asset('docs/reg_form.pdf' )}}" class="btn btn-success">PDF Booking
                                        form</a>
                                </div>

                                <div class="col-3">
                                    @if(Auth::guest())
                                        <a href="/login" class="btn btn-primary">Login to Book</a>
                                    @else
                                        {{ Form::model($lesson, array('action' => array('BookingsController@update', $lesson->id), 'method' => 'PATCH')) }}
                                        {{--{{ Form::open(['url' => '/bookings/update', 'method' => 'PATCH']) }}--}}
                                        {{ Form::hidden('id', Auth::user()->id)}}
                                        {{ Form::submit('Book Online!', array('class' => 'btn btn-success')) }}

                                        {{ Form::close() }}
                                    @endif
                                </div>
                            </div>

                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop