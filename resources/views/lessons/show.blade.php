@extends('master')

@section('title')
    Lesson View
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

    <div class="row justify-content-center">
        <div class="col-10">
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
                            <div class="col-auto info-body">{{ $lesson->subject->title }}</div>
                        </div>

                        <div class="row">
                            <div class="col-3 info-heading">
                                <strong>Price of subject: </strong>
                            </div>
                            <div class="col-auto info-body">£{{ $lesson->subject->price }}</div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-3 info-heading">
                                <strong>Qualification Gained: </strong>
                            </div>
                            <div class="col-auto info-body">{{ $lesson->subject->qualification}}</div>
                        </div>

                        <div class="row">
                            <div class="col-3 info-heading">
                                <strong>Awarding Body: </strong>
                            </div>
                            <div class="col-auto info-body">{{ $lesson->subject->awarded_by}}</div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-3 info-heading">
                                <strong>Subject Duration: </strong>
                            </div>
                            <div class="col-auto info-body">{{ $lesson->subject->duration }} days</div>
                        </div>

                        <div class="row">
                            <div class="col-3 info-heading">
                                <strong>Start Date: </strong>
                            </div>
                            <div class="col-auto info-body">{{ $lesson->start_date }}</div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-3 info-heading">
                                <strong>Spaces Left: </strong>
                            </div>
                            <div class="col-auto info-body">{{ $lesson->spaces_left }}</div>
                        </div>

                        <div class="row">
                            <div class="col-3 info-heading">
                                <strong>Venue Name: </strong>
                            </div>
                            <div class="col-auto info-body">{{ $lesson->venue->name }}</div>

                        </div>

                        <hr>
                        <div class="row justify-content-around">


                            <div class="col-3">
                                <a href="/admin/venues/{{ $lesson->venue->id }}" class="btn btn-primary">View
                                    Venue</a>
                            </div>

                            <div class="col-3">
                                <a href="/admin/subjects/{{ $lesson->subject->id }}" class="btn btn-primary">Subject
                                    Overview</a>
                            </div>
                            <div class="col-3">

                                <a href="/admin/lessons/{{ $lesson->id }}/edit" class="btn btn-success pull-right">Edit
                                    Lesson</a>
                            </div>
                            <div class="col-3">
                                {{ Form::open(['route' => ['lessons.destroy', $lesson->id],'class' => 'pull-right']) }}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Delete this Event!',['class' => 'btn btn-danger'])}}
                                {{ Form::close() }}
                            </div>
                        </div>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-10">
            <table class="table table-hover table-outline">
                <thead class="thead-default">
                <tr>
                    <th class="text-center"><i class="icon-people"></i>
                    </th>
                    <th>User</th>
                    <th class="text-center">Role</th>
                    <th>E-Mail</th>
                    <th class="text-center">Linked via</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lesson->users as $user)
                    <tr>
                        <td class="text-center">
                            <div class="avatar">
                                <img src="{{ $user->active_avatar }}" class="img-avatar"
                                     alt="{{ $user->email }}">
                            </div>
                        </td>
                        <td>
                            <div>{{ $user->name }}</div>
                            <div class="small text-muted">
                                <span>New </span>| Registered: {{ $user->created_at }}
                            </div>
                        </td>
                        <td class="text-center">
                            Administrator
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td class="text-center">
                            @foreach($user->accounts as $account)
                                <i class="fa fa-{{ $account->provider_name }}"></i>
                            @endforeach
                        </td>
                        <td>
                            <a href="/admin/users/{{ $user->id }}" class="btn-sm btn-primary">View</a>
                        </td>
                    </tr><!--/tr-->
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop