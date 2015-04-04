@extends('ADapp')
@section('content')


    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">

                {!! Form::open(array('route' => 'admin_dashboard/insertFA')) !!}
                <!-- /resources/views/projects/partials/_form.blade.php -->
                <div class="form-group">
                    {!! Form::label('fa_id', 'ID:') !!}
                    {!! Form::text('fa_id') !!}
                </div>
                <div class="form-group">
                    {!! Form::label('fa_name', 'Name:') !!}
                    {!! Form::text('fa_name') !!}
                </div>
                <div class="form-group">
                    {!! Form::label('fa_email', 'Email:') !!}
                    {!! Form::text('fa_email') !!}

                </div>

                <div class="form-group">
                    {!! Form::label('fa_address', 'Address:') !!}
                    {!! Form::text('fa_address') !!}

                </div>

                <div class="form-group">
                    {!! Form::label('fa_phone', 'Phone:') !!}
                    {!! Form::text('fa_phone') !!}

                </div>

                <div class="form-group">
                    {!! Form::label('fa_rating', 'Rating:') !!}
                    {!! Form::text('fa_rating') !!}

                </div>
                <div class="form-group">
                    {!! Form::label('years_experience', 'Experience:') !!}
                    {!! Form::text('years_experience') !!}

                </div>

                <div class="form-group">
                    {!! Form::label('certificate', 'Certificate:') !!}
                    {!! Form::text('certificate') !!}

                </div>

                <div class="form-group">
                    {!! Form::label('user_id', 'ID:') !!}
                    {!! Form::text('user_id') !!}

                </div>

                <div class="form-group">
                    {!! Form::label('fa_password', 'Password:') !!}
                    {!! Form::text('fa_password') !!}

                </div>
                <div class="form-group">
                    {!! Form::submit('hola', ['class'=>'btn primary']) !!}
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>

@stop