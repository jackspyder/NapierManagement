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
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Subject List
                </div>
                <div class="card-block">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
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
                                <td><a href="/admin/subjects/{{ $subject->id }}" class="btn-sm btn-success">View</a>
                                </td>
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