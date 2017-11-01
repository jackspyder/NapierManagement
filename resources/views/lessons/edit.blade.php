@extends('master')

@section('title')
    Edit Lesson
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-10">
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
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-4">

            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Edit Class
                </div>
                <div class="card-block">
                    {{ Form::model($lesson, array('route' => array('lessons.update', $lesson->id), 'method' => 'PATCH')) }}
                    <div class="form-group">
                        <div class="form-group">
                            {{ Form::label('subject_id', 'Subject') }}
                            {!! Form::select('subject_id', $subjects) !!}

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

                        {{ Form::submit('Edit Lesson', array('class' => 'btn btn-success pull-right')) }}

                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@stop