@extends('master')

@section('title')
    User List
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
                @foreach($users as $user)
                    <tr>
                        <td class="text-center">
                            <div class="avatar">
                                <img src="{{ $user->active_avatar }}" class="img-avatar" alt="{{ $user->email }}">
                            </div>
                        </td>
                        <td>
                            <div>{{ $user->name }}</div>
                            <div class="small text-muted">
                                <span>New </span>| Registered: {{ $user->created_at }}
                            </div>
                        </td>
                        <td class="text-center">
                            @if($user->is_admin ==  1)
                                Administrator
                            @else
                                Member
                            @endif
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
@endsection