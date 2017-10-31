@extends('master')

@section('title')
    User View
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card card-inverse" style="background-color: #333; border-color: #333;">
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <h2 class="card-title">Name: {{ $user->name }}</h2>

                            <div class="row">
                                <div class="col-2 info-heading">
                                    <p><strong>Email: </strong></p>
                                </div>
                                <div class="col-auto card-text">{{ $user->email}}</div>
                            </div>

                            <div class="row">
                                <div class="col-2 info-heading">
                                    <p><strong>Member Since: </strong></p>
                                </div>
                                <div class="col-auto card-text">{{ $user->created_at}}</div>
                            </div>

                            <div class="row">
                                <div class="col-2 info-heading">
                                    <p><strong>Access Level: </strong></p>
                                </div>
                                <div class="col-auto card-text">@if($user->is_admin ==  1)
                                        Administrator
                                    @else
                                        Member
                                    @endif</div>
                            </div>

                            <div class="row">
                                <div class="col-2 info-heading">
                                    <p><strong>Address: </strong></p>
                                </div>
                                <div class="col-auto card-text">{{ $user->profile->address }}</div>
                            </div>

                            <div class="row">
                                <div class="col-2 info-heading">
                                    <p><strong>Post Code: </strong></p>
                                </div>
                                <div class="col-auto card-text">{{ $user->profile->post_code}}</div>
                            </div>

                            <div class="row">
                                <div class="col-2 info-heading">
                                    <p><strong>Date of Birth: </strong></p>
                                </div>
                                <div class="col-auto card-text">{{ $user->profile->dob }}</div>
                            </div>

                            <div class="row">
                                <div class="col-2 info-heading">
                                    <p><strong>Occupation: </strong></p>
                                </div>
                                <div class="col-auto card-text">{{ $user->profile->occupation}}</div>
                            </div>

                            <div class="row">
                                <div class="col-2 info-heading">
                                    <p><strong>Company: </strong></p>
                                </div>
                                <div class="col-auto card-text">{{ $user->profile->company }}</div>
                            </div>

                        </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <img src="{{ $user->active_avatar }}" height="180" width="180" alt=""
                                 style="border-radius:50%;">

                            <p class="card-text"><p><strong>Linked via:</strong></p>
                                @foreach($user->accounts as $account)
                                    <br>
                                    <i class="fa fa-2x fa-{{ $account->provider_name }}" style=""> {{ $account->provider_name }} </i>
                                @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



@stop