@extends('master')

@section('title')
    Lesson View
@endsection

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-10">

                <a href="/admin/lessons/{{ $lesson->id }}/edit" class="btn btn-primary fa-pull-right">Edit Lesson</a>

                <div class="card">
                    <div class="card-header">
                        <b>Details</b>
                    </div>
                    <div class="card-block">
                        <blockquote class="card-blockquote">

                            <ul class="list">
                                <li><b>Course Title: </b>{{ $lesson->course->title }} <a
                                            href="/admin/courses/{{ $lesson->course->id }}"
                                            class="btn btn-primary">View</a></li>
                                <li><b>Venue Name: </b>{{ $lesson->venue->name }} <a
                                            href="/admin/venues/{{ $lesson->venue->id }}"
                                            class="btn btn-primary">View</a></li>
                                <li><b>Start Date: </b>{{ $lesson->start_date }}</li>
                                <li><b>Capacity: </b>{{ $lesson->capacity }}</li>
                                <li><b>Spaces left: </b> {{ $lesson->spaces_left }}</li>
                                <li><b>Location: </b></li>
                                <li>{!! $lesson->venue->location !!}</li>
                            </ul>

                        </blockquote>
                    </div>
                </div>

@stop