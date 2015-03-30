@extends('app')


@section('content')
<h1>Browse Market Page</h1>

{{--@for ($i = 0; $i < count($test); $i++)--}}

    {{--{{'Symbol ' . $test[$i]['Symbol']}}--}}
    {{--<br>--}}
    {{--{{'Open ' . $test[$i]['Open']}}--}}
    {{--<br>--}}

{{--@endfor--}}

<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>

<script src="http://code.highcharts.com/stock/highstock.js"></script>
<script src="http://code.highcharts.com/stock/modules/exporting.js"></script>



<script type="text/javascript">
    var quoteData = [];

    $(function() {

        var url = "https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.historicaldata%20where%20symbol%20%3D%20%22YHOO%22%20and%20startDate%20%3D%20%222014-09-11%22%20and%20endDate%20%3D%20%222015-03-10%22&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=&";


        $.getJSON(url, function(data){

            $.each(data.query.results.quote, function(index, value) {
                var theTime = value.Date;
                var milliTime = new Date(theTime);
                milliTime = milliTime.getTime();
                var results = [milliTime, parseFloat(value.Low),parseFloat(value.High)];
                quoteData.push(results);

            })

            createChart(quoteData);

        });

        //setTimeout("createChart()", 1000);

    });

    function createChart(data) {
        quoteData = quoteData.reverse();
        console.log('quoteData', quoteData);

        // Create the chart
        window.chart = new Highcharts.StockChart({
            chart : {
                renderTo : 'abox'
            },

            rangeSelector : {
                selected : 1
            },

            title : {
                text : 'YAHOO Stock Price'
            },

            series : [{
                name : 'YHOO',
                data : data,
                tooltip: {
                    valueDecimals: 2
                }
            }]
        });

    }
</script>

<div id="abox" style="height: 400px; min-width: 310px"></div>

<div class="header">Market Performance</div>

<div class="col-md-12">
    <div class="col-md-3"  id="SP_market">
        <span class="legend_line"></span>
        <span><p style="font-weight: 500;color:blue">S&P 500</p></span>
        <br>
        <p class="main-ticker"> {{ $test[0]['LastTradePriceOnly']}}</p> <span class="ticker-lows">
            @if(($test[0]['Change'])<0)   <p style="color:red;">  {{  $test[0]['Change']  }}

                @else {{  $test[0]['Change']  }}
                @endif

       </p>
        </span>
        <br>
        <div class="tiny-things"><p>High:{{ $test[0]['DaysHigh']}} </p> <span>Low: {{ $test[0]['DaysLow']}} </span></div>

    </div>
    <div class="col-md-3" id="SP_market">
        <span class="legend_line"></span>
        <span><p style="font-weight: 500;color:blue">Dow</p></span>
        <br>
        <p class="main-ticker"> {{ $test[1]['LastTradePriceOnly']}}</p> <span class="ticker-lows">

            @if(($test[1]['Change'])<0)   <p style="color:red;">  {{  $test[1]['Change']  }}

                @else {{  $test[1]['Change']  }}
            @endif </span>
        <br>
        <div class="tiny-things"><p>High:{{ $test[1]['DaysHigh']}} </p> <span>Low: {{ $test[1]['DaysLow']}} </span></div>
    </div>
    <div class="col-md-3" id="SP_market">
        <span class="legend_line"></span>
        <span><p style="font-weight: 500;color:blue">NYSE</p></span>
        <br>
        <p class="main-ticker"> {{ $test[2]['LastTradePriceOnly']}}</p> <span class="ticker-lows">
                    @if(($test[1]['Change'])<1)   <p style="color:red;">  {{  $test[0]['Change']  }}

                @else {{  $test[1]['Change']  }}
            @endif
        </span>
        <br>
        <div class="tiny-things"><p>High:{{ $test[2]['DaysHigh']}} </p> <span>Low: {{ $test[2]['DaysLow']}} </span></div>

    </div>

    <div class="col-md-3" style="background-color: #303f9f;padding: 10px;">
            {{--{!! Form::open(['method' => 'POST', 'route' => ['BrowseMarket/search']]) !!}--}}

            <div class="form-group">
                <div class="input-group">
                    {{--{!! Form::text(['class' => 'form-control','title' => 'search', 'placeholder' => 'Search Stock Ticker']) !!}--}}
                </div>
            {{--{!! Form::close() !!}--}}

        <p style="text-align: left;font-size: 18px;color:#fff;">
            <b> Recommended Symbols: </b> <br>
            AAPL (US) | BABA (US) |
            EURCHF (CUR) | FB (US)
        </p>
    </div>


</div>


@stop

