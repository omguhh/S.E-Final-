@extends('ADapp')
@section('content')


    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">

                {!! Form::open(array('route' => 'admin_dashboard/insert_user')) !!}
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
                    {!! Form::label('rc_address', 'Address:') !!}
                    {!! Form::text('rc_address') !!}

                </div>



                <div class="form-group">
                    {!! Form::label('cash_balance', 'Balance:') !!}
                    {!! Form::text('cash_balance') !!}

                </div>

                <div class="form-group">
                    {!! Form::label('rc_phone', 'Phone:') !!}
                    {!! Form::text('rc_phone') !!}

                </div>
                <div class="form-group">
                    {!! Form::label('fa_name_fk', 'FA_Name:') !!}
                    {!! Form::text('fa_name_fk') !!}

                </div>


                <div class="form-group">
                    {!! Form::label('user_id', 'User_ID:') !!}
                    {!! Form::text('user_id') !!}

                </div>

                <div class="form-group">
                    {!! Form::label('client_password', 'Password:') !!}
                    {!! Form::text('client_password') !!}

                </div>
                <div class="form-group">
                    {!! Form::submit('hola', ['class'=>'btn primary']) !!}
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>

@stop