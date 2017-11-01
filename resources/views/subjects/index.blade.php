@extends('master')

@section('title')
    Subject List
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
            <h3>Subjects List</h3>
            <table class="table table-hover table-outline table-striped table-bordered">
                <thead class="thead-default">
                <tr>
                    <th>Title</th>
                    <th>price</th>
                    <th>duration</th>
                    <th>Active Classes</th>
                    <th>Enrolled Members</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($subjects as $subject)
                    <tr>
                        <td>{{ $subject->title }}</td>
                        <td>£{{ $subject->price / 100 }}</td>
                        <td>{{ $subject->duration }}</td>
                        <td>{{ $subject->lessons->count() }}</td>
                        <td>

                            @foreach($subject->lessons as $lesson )

                                @continue($users = $users + $lesson->users->count())

                            @endforeach
                            {{ $users }}
                            <?php $users = 0; ?>

                        </td>
                        <td class="text-center"><a href="/admin/subjects/{{ $subject->id }}" class="btn-sm btn-primary">View</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <div class="row justify-content-center">

        <div class="col-10">
            <a class="btn btn-primary pull-right" href="{{ url('/admin/subjects/create') }}">Add New Subject</a>

        </div>

    </div>


    <!--/.row-->
@stop