@extends('master')

@section('title')
    Add Venue
@endsection

@section('content')

    <h3>Add New Venue</h3>


    <div class="form-group">
    {{--{{ Form::open(['url' => '/admin/venues', 'method' => 'POST']) }}--}}


    {{ Form::model($venue, array('route' => array('venues.update', $venue->id), 'method' => 'PATCH')) }}

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
        <div class="container-fluid">

            <div class="row">

                <!--column left-->
                <div class="form-group">
                    <div class="form-group">
                        {{ Form::label('name', 'Venue Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('address', 'Address') }}
                        {{ Form::text('address', null, array('class' => 'form-control')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('city', 'City') }}
                        {{ Form::text('city', null, array('class' => 'form-control')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('post_code', 'Post Code') }}
                        {{ Form::text('post_code', null, array('class' => 'form-control')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('location', 'Google Map Location') }}
                        {{ Form::text('location', null, array('class' => 'form-control')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('image', 'Venue Image') }}
                        {{ Form::file('image') }}
                    </div>

                </div>

                <!--column right-->
                {{--<div class="form-group">--}}

                {{--</div>--}}

            </div>


            {{--outside the columns--}}
            {{--<div class="form-group col-sm-12">--}}
            {{--{{ Form::label('notes', 'Notes') }}--}}
            {{--{{ Form::textarea('notes', null, array('class' => 'form-control')) }}--}}
            {{--</div>--}}


        </div>

        {{ Form::submit('Edit Venue', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}
    </div>

@stop