@extends('master')

@section('stylesheet')
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
@endsection

@section('title')
    Edit Subject
@endsection

@section('content')
    <div class="container">
        <h3>Edit this subject</h3>

    {{ Form::model($subject, array('route' => array('subjects.update', $subject->id), 'method' => 'PATCH')) }}

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
            <div class="form-group col-md-8">
                <div class="form-group">
                    {{ Form::label('title', 'Subject Title') }}
                    {{ Form::text('title', null, array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('price', 'Subject Price (Pounds)') }}
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
                    {{ Form::textarea('summary', null, array('class' => 'form-control', 'id' => 'summary')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('description', 'Subject Description') }}
                    {{ Form::textarea('description', null, array('class' => 'form-control', 'id' => 'description')) }}
                </div>

                {{ Form::submit('Edit Subject', array('class' => 'btn btn-primary')) }}

            </div>

        </div>


        {{ Form::close() }}
    </div>
@stop