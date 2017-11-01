@extends('master')

@section('title')
    Public Test
@endsection

@section('content')
    <div class="row justify-content-center">

        @foreach($subjects as $subject)
            <div class="col-5">

                <div class="card">
                    <div class="card-header">
                        <b>{{ $subject->title }}</b>
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

                            <hr>

                            <h4>Subject Overview: </h4>

                            <p>{!! $subject->summary !!}</p>

                            <a href="/subjects/{{ $subject->id }}" class="btn btn-primary pull-right">View
                                Subject</a>

                        </blockquote>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>
@stop