@extends('ADapp')
@section('content')


    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">

                <div class="page-header">
                    <h1>
                        ADD NEW FINANCIAL ADVISOR
                    </h1>
                </div>
                {!! Form::open(array('route' => 'admin_dashboard/insertFA','class' => 'form-horizontal')) !!}
                <!-- /resources/views/projects/partials/_form.blade.php -->
                <div class="form-group">
                    {!! Form::label('fa_id', 'ID:',['class' => 'col-md-1 control-label']) !!}
                    <div class="col-md-4">
                    {!! Form::text('fa_id',null,['class' => 'form-control input-md']) !!}
                            </div>
                </div>
                <div class="form-group">
                    {!! Form::label('fa_name', 'Name:',['class' => 'col-md-1 control-label']) !!}
                    <div class="col-md-4">
                    {!! Form::text('fa_name',null,['class' => 'form-control input-md']) !!}
                        </div>
                </div>
                <div class="form-group">
                    {!! Form::label('fa_email', 'Email:',['class' => 'col-md-1 control-label']) !!}
                    <div class="col-md-4">
                    {!! Form::text('fa_email',null,['class' => 'form-control input-md']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('fa_address', 'Address:',['class' => 'col-md-1 control-label']) !!}
                    <div class="col-md-4">
                    {!! Form::text('fa_address',null,['class' => 'form-control input-md']) !!}
                        </div>

                </div>

                <div class="form-group">
                    {!! Form::label('fa_phone', 'Phone:',['class' => 'col-md-1 control-label']) !!}
                    <div class="col-md-4">
                    {!! Form::text('fa_phone',null,['class' => 'form-control input-md']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('fa_rating', 'Rating:',['class' => 'col-md-1 control-label']) !!}
                    <div class="col-md-4">
                    {!! Form::text('fa_rating',null,['class' => 'form-control input-md']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('years_experience', 'Experience:',['class' => 'col-md-1 control-label']) !!}
                    <div class="col-md-4">
                    {!! Form::text('years_experience',null,['class' => 'form-control input-md']) !!}
                        </div>

                </div>

                <div class="form-group">
                    {!! Form::label('certificate', 'Certificate:',['class' => 'col-md-1 control-label']) !!}
                    <div class="col-md-4">
                    {!! Form::text('certificate',null,['class' => 'form-control input-md']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('user_id', 'ID:',['class' => 'col-md-1 control-label']) !!}
                    <div class="col-md-4">
                    {!! Form::text('user_id',null,['class' => 'form-control input-md']) !!}
                            </div>

                </div>

                <div class="form-group">
                    {!! Form::label('fa_password', 'Password:',['class' => 'col-md-1 control-label']) !!}
                    <div class="col-md-4">
                    {!! Form::text('fa_password',null,['class' => 'form-control input-md']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
                    </div>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>

@stop