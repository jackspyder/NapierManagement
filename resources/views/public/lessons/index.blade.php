@extends('master')

@section('title')
    Active Classes List
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
                    <i class="fa fa-align-justify"></i> List of Classes
                </div>
                <div class="card-block">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                        <tr>
                            <th>Subject Title</th>
                            <th>Venue Name</th>
                            <th>Start Date</th>
                            <th>Capacity</th>
                            <th>Spaces Left</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lessons as $lesson)
                            <tr>
                                <td>{{ $lesson->subject->title }}</td>
                                <td>{{ $lesson->venue->name }}</td>
                                <td>{{ $lesson->start_date }}</td>
                                <td>{{ $lesson->capacity }}</td>
                                <td>{{ $lesson->spaces_left }}</td>
                                <td class="text-center"><a href="/classes/{{ $lesson->id }}" class="btn-sm btn-primary">View</a></td>
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