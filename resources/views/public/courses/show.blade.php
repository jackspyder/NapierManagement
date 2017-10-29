@extends('public')

@section('title')
    View Course
@endsection

@section('content')


    <div class="container">
        <a href="/lessons" class="btn btn-primary fa-pull-right">View Available Classes</a>
        <div class="row">

            <div class="col-md-12">



                <div class="card">
                    <div class="card-header">
                        <b>Details</b>
                    </div>
                    <div class="card-block">
                        <blockquote class="card-blockquote">

                            <ul class="list">
                                <li><b>Course Title: </b>{{ $course->title }}</li>
                                <li><b>Price of Course: </b>£{{ $course->price }}</li>
                                <li><b>Qualification Gained: </b>{{ $course->qualification }}</li>
                                <li><b>Awarding Body: </b>{{ $course->awarded_by }}</li>
                                <li><b>Course Duration: </b>{{ $course->duration }} days</li>
                            </ul>

                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <b>Course Overview</b>
                    </div>
                    <div class="card-block">
                        <blockquote class="card-blockquote">

                            {{ $course->overview }}

                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <b>Course Description</b>
                    </div>
                    <div class="card-block">
                        <blockquote class="card-blockquote">

                            {{ $course->description }}

                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <b>Who is this course for?</b>
                    </div>
                    <div class="card-block">
                        <blockquote class="card-blockquote">

                            {{ $course->who_for }}

                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <b>Course Requirements</b>
                    </div>
                    <div class="card-block">
                        <blockquote class="card-blockquote">

                            {{ $course->requirements }}

                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <b>Career Path?</b>
                    </div>
                    <div class="card-block">
                        <blockquote class="card-blockquote">

                            {{ $course->career_path}}

                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop