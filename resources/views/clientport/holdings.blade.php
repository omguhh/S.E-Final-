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
                                <li class="active">
                                    {!! HTML::linkRoute('clientport/display/holdings', 'Holdings') !!}
                                </li>
                                <li>
                                    {!! HTML::linkRoute('clientport/display/watchlist', 'Watchlist') !!}
                                </li>
                                <li>
                                    {!! HTML::linkRoute('clientport/display/mydetails', 'Personal Data') !!}
                                </li>

                                <li>
                                    {!! HTML::linkRoute('browsemarket', 'Market Insights') !!}
                                </li>

                                <li>
                                    {!! HTML::linkRoute('clientport/display/wallet', 'Wallet') !!}
                                </li>

                                <li>
                                    {!! HTML::linkRoute('clientport/display/calendar', 'Calendar') !!}
                                </li>

                            </ul>


                            <table class="table">
                                <thead>
                                <tr>
                                    <th>
                                        Stock Name
                                    </th>
                                    <th>
                                        Financial Advisor Name
                                    </th>
                                    <th>
                                        Time Purchased
                                    </th>
                                    <th>
                                        Quantity
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @for ($i = 0; $i < count($clients); $i++)
                                    <td>{{$clients[$i]['stock_name']}}</td>
                                    <td>{{$clients[$i]['fa_name']}}</td>
                                    <td>{{$clients[$i]['time_purchased']}}</td>
                                    <td>{{$clients[$i]['quantity']}}</td>

                                     {!! Form::open(['method' => 'POST', 'route' => ['browsemarket/sell_stocks',$clients[$i]['stock_name']]]) !!}
                                     <td> {!! Form::submit('Sell', ['class'=>'btn btn-danger btn-lg']) !!} </td>
                                     {!! Form::close() !!}
                                </tr>
                                @endfor

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
@stop

