@extends('master')

@section('title')
    Venue List
@endsection

@section('content')

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

    <h3>Venues Page</h3>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Venue List
                </div>
                <div class="card-block">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
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
                                <td><a href="/admin/venues/{{ $venue->id }}" class="btn-sm btn-success">View</a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/.col-->
    </div>
    <!--/.row-->
@stop