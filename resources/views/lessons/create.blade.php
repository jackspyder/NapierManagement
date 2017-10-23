@extends('master')

@section('title')
    Add Lesson
@endsection

@section('content')
    <div class="container">
    <h3>Add New Lesson</h3>


    {{ Form::open(['url' => '/admin/lessons', 'method' => 'POST']) }}

    <!-- if there are creation errors, they will show here -->
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{--Main Panel content--}}

            <div class="row col-md-8">

                <!--column left-->
                <div class="form-group">
                    <div class="form-group">
                        {{ Form::label('course_id', 'Course') }}
                        {!! Form::select('course_id', $courses) !!}

                    </div>

                    <div class="form-group">
                        {{ Form::label('venue_id', 'Venue') }}
                        {!! Form::select('venue_id', $venues) !!}

                    </div>

                    <div class="form-group">
                        {{ Form::label('start_date', 'Start Date') }}
                        {{ Form::date('start_date', null, array('class' => 'form-control')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('capacity', 'Capacity') }}
                        {{ Form::number('capacity', null, array('class' => 'form-control')) }}
                    </div>

                    {{ Form::submit('Submit Item', array('class' => 'btn btn-primary')) }}

                </div>



            </div>






        {{ Form::close() }}
    </div>

@stop