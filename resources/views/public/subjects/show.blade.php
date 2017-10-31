@extends('public')

@section('title')
    View Subject
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
                                    <strong>Subject Title: </strong>
                                </div>
                                <div class="col-3 info-body">{{ $subject->title }}</div>
                            </div>

                            <div class="row">
                                <div class="col-3 info-heading">
                                    <strong>Price of Subject: </strong>
                                </div>
                                <div class="col-3 info-body">£{{ $subject->price }}</div>
                            </div>

                            <div class="row">
                                <div class="col-3 info-heading">
                                    <strong>Qualification Gained: </strong>
                                </div>
                                <div class="col-3 info-body">{{ $subject->qualification}}</div>
                            </div>

                            <div class="row">
                                <div class="col-3 info-heading">
                                    <strong>Awarding Body: </strong>
                                </div>
                                <div class="col-3 info-body">{{ $subject->awarded_by}}</div>
                            </div>

                            <div class="row">
                                <div class="col-3 info-heading">
                                    <strong>Subject Duration: </strong>
                                </div>
                                <div class="col-3 info-body">{{ $subject->duration }} days</div>
                            </div>

                        </blockquote>
                    </div>
                </div>

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
    </div>

@stop