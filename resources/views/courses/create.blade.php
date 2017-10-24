@extends('master')

@section('stylesheet')
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
@endsection

@section('title')
    Add Course
@endsection

@section('content')
    <div class="container">
        <h3>Add New Course</h3>


    {{ Form::open(['url' => '/admin/courses', 'method' => 'POST']) }}

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
                    {{ Form::label('price', 'Course Price (Pounds)') }}
                    {{ Form::number('price', null, array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('duration', 'Course Duration (Days)') }}
                    {{ Form::number('duration', null, array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('title', 'Course Title') }}
                    {{ Form::text('title', null, array('class' => 'form-control')) }}
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
                    {{ Form::label('overview', 'Course Overview') }}
                    {{ Form::textarea('overview', null, array('class' => 'form-control', 'id' => 'overview')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('description', 'Course Description') }}
                    {{ Form::textarea('description', null, array('class' => 'form-control', 'id' => 'description')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('who_for', 'Who is this course for?') }}
                    {{ Form::textarea('who_for', null, array('class' => 'form-control', 'id' => 'who_for')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('requirements', 'Requirements') }}
                    {{ Form::textarea('requirements', null, array('class' => 'form-control','id' => 'requirements')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('career_path', 'Career Path') }}
                    {{ Form::text('career_path', null, array('class' => 'form-control')) }}
                </div>

                {{ Form::submit('Submit Item', array('class' => 'btn btn-primary')) }}

            </div>

        </div>


        {{ Form::close() }}
    </div>
@stop