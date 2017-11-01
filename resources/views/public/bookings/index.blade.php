@extends('master')
@section('title')
    My Bookings
@endsection
@section('content')

    <div class="row justify-content-center">
        <div class="col-10">
            <h3>My Booked Classes</h3>
            <table class="table table-hover table-outline table-striped table-bordered">
                <thead class="thead-default">
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
                        <td class="text-center"><a href="/classes/{{ $lesson->id }}" class="btn-sm btn-primary">View</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection