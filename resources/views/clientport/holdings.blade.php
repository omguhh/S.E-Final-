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
                                <li class="active">
                                    {!! HTML::linkRoute('clientport/display/holdings', 'Holdings') !!}
                                </li>
                                <li>
                                    <a href="#">Stock Watchlist</a>
                                </li>
                                <li>
                                    <a href="#">Personal Details</a>
                                </li>

                                <li>
                                    {!! HTML::linkRoute('browsemarket', 'Market Insights') !!}
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
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @for ($i = 0; $i < count($clients); $i++)
                                    <td>{{$clients[$i]['stock_name']}}</td>
                                    <td>{{$clients[$i]['fa_name']}}</td>
                                    <td>{{$clients[$i]['time_purchased']}}</td>
                                    <td>{{$clients[$i]['quantity']}}</td>

                                </tr>
                                @endfor

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
@stop

