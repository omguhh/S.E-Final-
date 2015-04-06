@extends('ADapp')
@section('content')


    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">

                <div class="page-header">
                    <h1>
                        ADD NEW CLIENT
                    </h1>
                </div>

                {!! Form::open(array('route' => 'admin_dashboard/insert_user','class' => 'form-horizontal')) !!}
                <!-- /resources/views/projects/partials/_form.blade.php -->
                <div class="form-group">

                    {!! Form::label('rc_id', 'ID:',['class' => 'col-md-1 control-label']) !!}
                    <div class="col-md-4">
                    {!! Form::text('rc_id',null,['class' => 'form-control input-md']) !!}
                        </div>
                </div>
                <div class="form-group">

                    {!! Form::label('rc_name', 'Name:',['class' => 'col-md-1 control-label']) !!}
                    <div class="col-md-4">
                    {!! Form::text('rc_name',null,['class' => 'form-control input-md']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('rc_email', 'Email:',['class' => 'col-md-1 control-label']) !!}
                    <div class="col-md-4">
                    {!! Form::text('rc_email',null,['class' => 'form-control input-md']) !!}
</div>
                </div>


                <div class="form-group">
                    {!! Form::label('rc_address', 'Address:',['class' => 'col-md-1 control-label']) !!}
                    <div class="col-md-4">
                    {!! Form::text('rc_address',null,['class' => 'form-control input-md']) !!}
                    </div>
                </div>



                <div class="form-group">
                    {!! Form::label('cash_balance', 'Balance:',['class' => 'col-md-1 control-label']) !!}
                    <div class="col-md-4">
                    {!! Form::text('cash_balance',null,['class' => 'form-control input-md']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('rc_phone', 'Phone:',['class' => 'col-md-1 control-label']) !!}
                    <div class="col-md-4">
                    {!! Form::text('rc_phone',null,['class' => 'form-control input-md']) !!}
                                </div>

                </div>
                <div class="form-group">
                    {!! Form::label('fa_name_fk', 'FA_Name:',['class' => 'col-md-1 control-label']) !!}
                    <div class="col-md-4">
                    {!! Form::text('fa_name_fk',null,['class' => 'form-control input-md']) !!}
                    </div>
                </div>


                <div class="form-group">
                    {!! Form::label('user_id', 'User_ID:',['class' => 'col-md-1 control-label']) !!}
                    <div class="col-md-4">
                    {!! Form::text('user_id',null,['class' => 'form-control input-md']) !!}
                        </div>
                </div>

                <div class="form-group">
                    {!! Form::label('client_password', 'Password:',['class' => 'col-md-1 control-label']) !!}
                    <div class="col-md-4">
                    {!! Form::text('client_password',null,['class' => 'form-control input-md']) !!}
                  </div>

                </div>
                <div class="form-group">
                    <div class="col-md-4">
                    {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}

                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>

@stop