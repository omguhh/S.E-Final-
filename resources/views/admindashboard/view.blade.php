@extends('ADapp')
@section('content')

<div class="container">
    <div class="col-lg-12" style="width: 100% !important;">

    <h1> User Administration</h1>

        {!! Form::open(array('route' => 'admin_dashboard/add')) !!}
        {!! Form::submit('Add Client', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}

    {{--<a href={{route("admin_dashboard/addclient")}} class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span> Add New Client</a>--}}
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
            <tr>
                <th>Registered Client ID</th>
                <th>Registered Client Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @for ($i = 0; $i < count($clients); $i++)
                <tr>
                    <td>{{$clients[$i]['rc_id']}}</td>
                    <td>{{$clients[$i]['rc_name']}}</td>
                    <td>

                        {!! Form::open(['method' => 'DELETE', 'route' => ['user/delete',$clients[$i]['rc_id']]]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}

                        {{--<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Delete</a></td>--}}
                </tr>
            @endfor
            </tbody>

        </table>
    </div>

</div>
</div>
@stop
