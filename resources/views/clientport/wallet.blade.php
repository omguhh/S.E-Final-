@extends('thing')
@section('content')


    <link rel="stylesheet" href="http://localhost/SE_Repo/S.E-Final-/public/css/custom_css.css">
    <link rel="stylesheet" href="http://localhost/SE_Repo/S.E-Final-/public/css/bootstrap.css">

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

                <li class="active">
                    {!! HTML::linkRoute('clientport/display/wallet', 'Wallet') !!}
                </li>
            </ul>

            <div class="container " >

                <div id="walletz">
                    <!-- <h2> Wallet </h2> -->
                    <br>

                    {!! Form::open(array('route' => 'clientport/display/addbalance')) !!}
                        <div class="form-group">
                            <label for="">Current balance:</label>
                            <div class="input-group">
                                {{--<div class="input-group-addon">$</div>--}}
                                {{--<input type="decimal" class="form-control" id="cur_bal" value={{$moneys[0]['cash_balance']}}>--}}
                                <h2>$ {{$moneys[0]['cash_balance']}}</h2>

                            </div>
                        </div>

                        <div id="sprtr">
                            <br>
                            <div class="form-group">
                                <label for="">Add more balance:</label>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
                                    {!! Form::text('transfer_bal',null,['class' => 'form-control','placeholder'=>'enter amount..']) !!}
                                    {{--//<input type="decimal" class="form-control" id="transfer_bal" placeholder="enter amount...">--}}
                                </div>
                            </div>

                            {!! Form::submit('Transfer cash', ['class'=>'btn btn-primary']) !!}
                            {!! Form::close() !!}

                        </div>
                        <br>

                </div>

            </div>

        </div>
    </div>

@stop