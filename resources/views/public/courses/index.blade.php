@extends('public')

@section('title')
    Public Test
@endsection

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                @foreach($courses as $course)
                    <div class="card">
                        <div class="card-header">
                            <b>{{ $course->title }}</b>
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

                                <p>{{ $course->overview }}</p>

                                <a href="/courses/{{ $course->id }}" class="btn btn-primary fa-pull-right">View
                                    Course</a>

                            </blockquote>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@stop