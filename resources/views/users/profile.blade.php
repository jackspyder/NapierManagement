@extends('master')

@section('title')
    Dashboard
@endsection

@section('content')
    <style>
        .btn {
            border-radius: 0;
        }

        .btn-md {
            border-width: 0;
            outline: none;
            border-radius: 0;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, .6);
            cursor: pointer;
        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-inverse" style="background-color: #333; border-color: #333;">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-8 col-sm-8">
                                <h2 class="card-title">Name: {{ $user->name }}</h2>
                                <p class="card-text"><strong>Email: </strong> {{ $user->email }}</p>
                                <p class="card-text"><strong>Member Since: </strong> {{ $user->created_at }}</p>
                                <p class="card-text"><strong>Access Level: </strong> @if($user->is_admin ==  1)
                                        Administrator
                                    @else
                                        Member
                                    @endif</p>
                                <p class="card-text"><strong>Address: </strong> {{ $user->profile->address }}</p>
                                <p class="card-text"><strong>Post Code: </strong> {{ $user->profile->post_code}}</p>
                                <p class="card-text"><strong>Date of Birth: </strong> {{ $user->profile->dob }}</p>
                                <p class="card-text"><strong>Occupation: </strong> {{ $user->profile->occupation}}</p>
                                <p class="card-text"><strong>Company: </strong> {{ $user->profile->company }}</p>
                                <p class="card-text"><strong>Linked via:</strong>
                                    @foreach($user->accounts as $account)
                                        <br>
                                        <i class="fa fa-{{ $account->provider_name }}"> {{ $account->provider_name }} </i>
                                    @endforeach
                                </p>

                            </div>
                            <div class="col-md-4 col-sm-4 text-center">
                                <img src="{{ $user->active_avatar }}" height="180" width="180" alt=""
                                     style="border-radius:50%;">
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@stop