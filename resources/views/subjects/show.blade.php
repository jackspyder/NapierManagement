@extends('master')

@section('title')
    View Subject
@endsection

@section('content')

    <h3>subject View Page</h3>

    <div class="container">
        <a href="/admin/subjects/{{ $subject->id }}/edit" class="btn btn-primary fa-pull-right">Edit Subject</a>
        <div class="row">

            <div class="col-md-12">


                <div class="card">
                    <div class="card-header">
                        <b>Details</b>
                    </div>
                    <div class="card-block">
                        <blockquote class="card-blockquote">

                            <ul class="list">
                                <li><b>Subject Title: </b>{{ $subject->title }}</li>
                                <li><b>Price of Subject: </b>£{{ $subject->price }}</li>
                                <li><b>Qualification Gained: </b>{{ $subject->qualification }}</li>
                                <li><b>Awarding Body: </b>{{ $subject->awarded_by }}</li>
                                <li><b>Subject Duration: </b>{{ $subject->duration }} days</li>
                            </ul>

                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <b>Subject Overview</b>
                    </div>
                    <div class="card-block">
                        <blockquote class="card-blockquote">

                            {{ $subject->overview }}

                        </blockquote>
                    </div>
                </div>

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

                <div class="card">
                    <div class="card-header">
                        <b>Who is this Subject for?</b>
                    </div>
                    <div class="card-block">
                        <blockquote class="card-blockquote">

                            {{ $subject->who_for }}

                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <b>Subject Requirements</b>
                    </div>
                    <div class="card-block">
                        <blockquote class="card-blockquote">

                            {{ $subject->requirements }}

                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <b>Career Path?</b>
                    </div>
                    <div class="card-block">
                        <blockquote class="card-blockquote">

                            {{ $subject->career_path}}

                        </blockquote>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12">
            {{ Form::open(['route' => ['subjects.destroy', $subject->id],'class' => 'pull-left']) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete this Event!',['class' => 'btn btn-danger pull-right'])}}
            {{ Form::close() }}
        </div>
    </div>

@stop