@extends('master')

@section('title')
    Payment
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col-10">
            <!-- will be used to show any messages -->
            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            @elseif(Session::has('warning'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ Session::get('warning') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
    </div>

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
                                <div class="col-3 info-body">£{{ $lesson->subject->price / 100 }}</div>
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

                                {{--<div class="col-3">--}}
                                {{--<a href="{{ asset('docs/reg_form.pdf' )}}" class="btn btn-success">PDF Booking--}}
                                {{--form</a>--}}
                                {{--</div>--}}
                                {{----}}
                                <div id="app" class="col-3">
                                    <checkout-form :user="{{ Auth::user() }}"
                                                   :lesson="{{ $lesson }}"></checkout-form>


                                </div>

                            </div>

                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://checkout.stripe.com/checkout.js"></script>


@stop

@section('scripts')

@endsection