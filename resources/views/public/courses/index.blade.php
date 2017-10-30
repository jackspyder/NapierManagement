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

                                <hr>

                                <h4>Course Overview: </h4>

                                <p>{!! $course->overview !!}</p>

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