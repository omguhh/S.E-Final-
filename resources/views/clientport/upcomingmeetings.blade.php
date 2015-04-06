@extends('thing')

@section('content')

    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div class="page-header">
                    <h1>
                        Naiyarah Hussain's Portfolio
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

                    <li>
                        {!! HTML::linkRoute('clientport/display/purchasehistory', 'Purchase History') !!}
                    </li>

                    <li>
                        {!! HTML::linkRoute('browsemarket', 'Market Insights') !!}
                    </li>

                    <li>
                        {!! HTML::linkRoute('clientport/display/wallet', 'Wallet') !!}
                    </li>
                    <li class="active">
                        {!! HTML::linkRoute('clientport/display/calendar', 'Calendar') !!}
                    </li>
                </ul>

                <table class="table">
                    <thead>
                    <tr>
                        <th>
                           Financial Advisor Name
                        </th>
                        <th>
                           Your ID
                        </th>
                        <th>
                          Meeting Title
                        </th>
                        <th>
                           Side comments
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @for ($i = 0; $i < count($clients); $i++)
                            <td>{{$clients[$i]['fa_name']}}</td>
                            <td>{{$clients[$i]['rc_id']}}</td>
                            <td>{{$clients[$i]['meeting_title']}}</td>
                            <td>{{$clients[$i]['meeting_content']}}</td>

                    </tr>
                    @endfor

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop