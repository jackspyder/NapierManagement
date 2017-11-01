@extends('master')

@section('title')
    Add Subject
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
        <div class="col-8">

            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Edit Subject
                </div>
                <div class="card-block">
                    {{ Form::open(['url' => '/admin/subjects', 'method' => 'POST']) }}
                    <div class="form-group">
                        <div class="form-group">
                            {{ Form::label('title', 'Subject Title') }}
                            {{ Form::text('title', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('price', 'Subject Price (IN PENCE!)') }}
                            {{ Form::number('price', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('duration', 'Subject Duration (Days)') }}
                            {{ Form::number('duration', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('qualification', 'Qualification') }}
                            {{ Form::text('qualification', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('awarded_by', 'Awarding Body') }}
                            {{ Form::text('awarded_by', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('summary', 'Short Subject Summary') }}
                            {{ Form::textarea('summary', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('description', 'Subject Description') }}
                            {{ Form::textarea('description', null, array('class' => 'form-control')) }}
                        </div>

                        {{ Form::submit('Add Subject', array('class' => 'btn btn-success pull-right')) }}

                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@stop