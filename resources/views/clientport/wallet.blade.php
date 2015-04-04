@extends('thing')
@section('content')


    <link rel="stylesheet" href="http://localhost/I'mDoneWithSE/S.E-Final-/public/css/custom_css.css">
    <link rel="stylesheet" href="http://localhost/I'mDoneWithSE/S.E-Final-/public/css/bootstrap.css">

<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="page-header">
                <h1>
                    Wallet
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
                    <a href="#">Stock Watchlist</a>
                </li>
                <li>
                    <a href="#">Personal Details</a>
                </li>

                <li>
                    {!! HTML::linkRoute('browsemarket', 'Market Insights') !!}
                </li>

                <li class="active">
                    <a href="#">Wallet</a>
                </li>

            </ul>

            <dsiv class="container " >

                <div id="walletz">
                    <!-- <h2> Wallet </h2> -->
                    <br>
                    <form action="clientport/display/addbalance" method="POST">
                        <div class="form-group">
                            <label for="">Current balance:</label>
                            <div class="input-group">
                                {{--<div class="input-group-addon">$</div>--}}
                                {{--<input type="decimal" class="form-control" id="cur_bal" value={{$moneys[0]['cash_balance']}}>--}}
                                <h3>$ {{$moneys[0]['cash_balance']}}</h3>

                            </div>
                        </div>

                        <div id="sprtr">
                            <br>
                            <div class="form-group">
                                <label for="">Add more balance:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
                                    <input type="decimal" class="form-control" id="transfer_bal" placeholder="enter amount...">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                <span class="glyphicon glyphicon-piggy-bank"></span> Transfer cash
                            </button>
                        </div>
                        <br>
                    </form>
                </div>

            </div>

        </div>
    </div>

@stop