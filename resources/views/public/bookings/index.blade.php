@extends('master')
@section('title')
    My Bookings
@endsection
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> My Bookings
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
                        @foreach($user->lessons as $lesson)
                            <tr>
                                <td>{{ $lesson->subject->title }}</td>
                                <td>{{ $lesson->venue->name }}</td>
                                <td>{{ $lesson->start_date }}</td>
                                <td>{{ $lesson->capacity }}</td>
                                <td>{{ $lesson->spaces_left }}</td>
                                <td><a href="/classes/{{ $lesson->id }}" class="btn-sm btn-success">View</a></td>
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
@endsection