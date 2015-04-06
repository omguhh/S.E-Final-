@extends('thing')
@section('content')


    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div class="page-header">
                    <h1>
                        Bob Burger's Portfolio
                    </h1>
                </div>
                <ul class="nav nav-pills">
                    <li>
                        {!! HTML::linkRoute('clientport/display/', 'Home') !!}
                    </li>
                    <li>
                        {!! HTML::linkRoute('clientport/display/holdings', 'Holdings') !!}
                    </li>
                    <li>
                        {!! HTML::linkRoute('clientport/display/watchlist', 'Watchlist') !!}
                    </li>
                    <li>
                        {!! HTML::linkRoute('clientport/display/mydetails', 'Personal Data') !!}
                    </li>

                    <li class="active">
                        {!! HTML::linkRoute('clientport/display/purchasehistory', 'Purchase History') !!}
                    </li>

                    <li>
                        {!! HTML::linkRoute('browsemarket', 'Market Insights') !!}
                    </li>

                    <li>
                        {!! HTML::linkRoute('clientport/display/wallet', 'Wallet') !!}
                    </li>
                </ul>
    <table class="table table-bordered table-striped">

        <thead>
        <tr>
            <th>Client Name</th>
            <th>Financial Advisor Name</th>
            <th>Stock Name</th>
            <th>Date Brought</th>
        </tr>
        </thead>
        <tbody>
        @for ($i = 0; $i < count($purch); $i++)
            <tr>

                <td>{{$purch[$i]['client_name']}}</td>
                <td>{{$purch[$i]['fa_name']}}</td>
                <td>{{$purch[$i]['stock_name']}}</td>
                <td>{{$purch[$i]['time_purchased']}}</td>

            </tr>
        @endfor
        </tbody>

    </table>
    </div>
    </div>
    </div>
    @endsection