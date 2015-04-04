@extends('app')

@section('content')
<div class="col-lg-10 col-lg-offset-1">

    <h1><i class="fa fa-users"></i> User Administration <a href="/logout" class="btn btn-default pull-right">Logout</a></h1>

    <table class="table table-bordered table-striped">

        <thead>
        <tr>
            <th>CLIENT NAME</th>
            <th>FINANCIAL ADVISOR Name</th>
            <th>STOCK NAME</th>
            <th>DATE BROUGHT</th>
        </tr>
        </thead>
        <tbody>
        @for ($i = 0; $i < count($purch); $i++)
            <tr>

                <td>{{$purch[$i]['client_name']}}</td>
                <td>{{$purch[$i]['fa_name']}}</td>
                <td>{{$purch[$i]['stock_name']}}</td>
                <td>{{$purch[$i]['date_brought']}}</td>

            </tr>
        @endfor
        </tbody>

    </table>
    </div>
    @endsection