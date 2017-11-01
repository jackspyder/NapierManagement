@extends('master')

@section('title')
    Venue List
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
            <h3>Venues List</h3>
            <table class="table table-hover table-outline table-striped table-bordered">
                <thead class="thead-default">
                <tr>
                    <th>Name</th>
                    <th>City</th>
                    <th>Post Code</th>
                    <th>Classes Running</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($venues as $venue)
                    <tr>
                        <td>{{ $venue->name }}</td>
                        <td>{{ $venue->city }}</td>
                        <td>{{ $venue->post_code }}</td>
                        <td>{{ $venue->lessons->count() }}</td>
                        <td class="text-center"><a href="/admin/venues/{{ $venue->id }}"
                                                   class="btn-sm btn-primary">View</a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <div class="row justify-content-center">

        <div class="col-10">
            <a class="btn btn-primary pull-right" href="{{ url('/admin/venues/create') }}">Add New Venue</a>

        </div>

    </div>
    <!--/.row-->
@stop