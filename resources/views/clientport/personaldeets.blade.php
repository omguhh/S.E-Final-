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
                <li class="active">
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

                <li>
                    {!! HTML::linkRoute('clientport/display/calendar', 'Calendar') !!}
                </li>
            </ul>

            <div class="container " >
                <div class="row text-center" >
                    <div class="col-md-12">
                        <h1>  USER PROFILE</h1>
                        <br />
                    </div>
                </div>
                <div class="row " style="padding-bottom:50px; ">
                    <div class="col-md-3">
                        <img src="http://o.aolcdn.com/dims-global/dims3/GLOB/resize/510x600/http://www.blogcdn.com/slideshows/images/slides/281/377/7/S2813777/slug/l/screen-shot-2014-07-31-at-9-55-01-pm-1.jpg" class="img-responsive img-thumbnail" />

                    </div>
                        <br /><br />
                        <hr />
                        <div >
                            <h3><strong> Name:</strong> {{$deets[0]['rc_name']}}</h3>

                            <h3> <strong> Email Address:</strong>{{$deets[0]['rc_email']}}</h3>
                            <h3> <strong> Phone Number:</strong> {{$deets[0]['rc_phone']}}</h3>
                            <h3> <strong> Balance:</strong> {{$deets[0]['cash_balance']}}</h3>
                            <h3>  <strong> Your Financial Advisor: </strong>{{$deets[0]['fa_name_fk']}}</h3>

                        </div>

                    </div>
                </div>
                <div class="row " >
                    <div class="col-md-6">
                        <h3>Small Biography :</h3>
                        <hr />
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Mauris ac nisl tempus, sollicitudin elit vel, pellentesque lorem.
                            Maecenas hendrerit laoreet lectus a feugiat. Nunc sodales id ipsum ut maximus.
                            Morbi pellentesque quis diam nec ullamcorper. Nulla facilisi. Donec non nunc augue.
                            Integer tincidunt consequat porta.
                        </p>

                    </div>
                    <div class="col-md-6" style="padding-bottom:80px;">
                        <h3>Registered Address  :</h3>
                        <hr />
                        <h5>{{$deets[0]['rc_address']}} </h5>
                    </div>
                </div>

            </div>

        </div>
    </div>

@stop