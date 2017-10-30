@extends('public')

@section('title')
    View Course
@endsection

@section('content')


    <div class="container">
        <a href="/classes" class="btn btn-primary fa-pull-right">View Available Classes</a>
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
                                    <strong>Course Title: </strong>
                                </div>
                                <div class="col-3 info-body">{{ $course->title }}</div>
                            </div>

                            <div class="row">
                                <div class="col-3 info-heading">
                                    <strong>Price of Course: </strong>
                                </div>
                                <div class="col-3 info-body">£{{ $course->price }}</div>
                            </div>

                            <div class="row">
                                <div class="col-3 info-heading">
                                    <strong>Qualification Gained: </strong>
                                </div>
                                <div class="col-3 info-body">{{ $course->qualification}}</div>
                            </div>

                            <div class="row">
                                <div class="col-3 info-heading">
                                    <strong>Awarding Body: </strong>
                                </div>
                                <div class="col-3 info-body">{{ $course->awarded_by}}</div>
                            </div>

                            <div class="row">
                                <div class="col-3 info-heading">
                                    <strong>Course Duration: </strong>
                                </div>
                                <div class="col-3 info-body">{{ $course->duration }} days</div>
                            </div>

                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <b>Course Overview</b>
                    </div>
                    <div class="card-block">
                        <blockquote class="card-blockquote">

                            {!! $course->overview !!}

                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <b>Course Description</b>
                    </div>
                    <div class="card-block">
                        <blockquote class="card-blockquote">

                            {!! $course->description !!}

                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <b>Who is this course for?</b>
                    </div>
                    <div class="card-block">
                        <blockquote class="card-blockquote">

                            {!! $course->who_for !!}

                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <b>Course Requirements</b>
                    </div>
                    <div class="card-block">
                        <blockquote class="card-blockquote">

                            {!! $course->requirements !!}

                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <b>Career Path?</b>
                    </div>
                    <div class="card-block">
                        <blockquote class="card-blockquote">

                            {!! $course->career_path !!}

                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop