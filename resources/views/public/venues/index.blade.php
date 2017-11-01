@extends('master')

@section('title')
    Venue List
@endsection

@section('content')

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
                        <td class="text-center"><a href="/venues/{{ $venue->id }}" class="btn-sm btn-primary">View</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@stop