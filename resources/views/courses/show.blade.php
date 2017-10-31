@extends('master')

@section('title')
    View Course
@endsection

@section('content')

    <h3>Course View Page</h3>

    <div class="container">
        <a href="/admin/courses/{{ $course->id }}/edit" class="btn btn-primary fa-pull-right">Edit Course</a>
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
        <div class="col-12">
            {{ Form::open(['route' => ['courses.destroy', $course->id],'class' => 'pull-left']) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete this Event!',['class' => 'btn btn-danger pull-right'])}}
            {{ Form::close() }}
        </div>
    </div>

@stop