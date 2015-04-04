@extends('ADapp')
@section('content')

    <div class="container">
        <div class="col-lg-12" style="width: 100% !important;">

            {!! Form::open(array('route' => 'admin_dashboard/add')) !!}
            <!-- /resources/views/projects/partials/_form.blade.php -->
            <div class="form-group">
                {!! Form::label('rc_id', 'ID:') !!}
                {!! Form::text('rc_id') !!}
            </div>
            <div class="form-group">
                {!! Form::label('rc_name', 'Name:') !!}
                {!! Form::text('rc_name') !!}
            </div>
            <div class="form-group">
                {!! Form::label('rc_email', 'Email:') !!}
                {!! Form::text('rc_email') !!}

            </div>

            <div class="form-group">
                {!! Form::submit('hola', ['class'=>'btn primary']) !!}
            </div>
            {!! Form::close() !!}


        </div>
    </div>

@stop