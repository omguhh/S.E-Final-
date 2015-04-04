@extends('app')


@section('content')
<h1>Market Insights</h1>


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
                text : 'Market Trends'
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
                    @if(($test[1]['Change'])<1)   <p style="color:red;">  {{  $test[0]['Change']  }}  </p>

                @else  <p style="color:#1acf43;">{{  $test[1]['Change']  }} </p>
            @endif
        </span>
        <br>
        <div class="tiny-things"><p>High:{{ $test[2]['DaysHigh']}} </p> <span>Low: {{ $test[2]['DaysLow']}} </span></div>

    </div>

    <div class="col-md-3" style="background-color: #303f9f;padding: 10px;">

            {{--<div class="form-group">--}}
                {{--<div class="input-group">--}}
               {{--</div>--}}

        {!! Form::open(array('route' => 'browsemarket/search')) !!}
        {!! Form::text('stockname'); !!}
        {!! Form::close() !!}

        <p style="text-align: left;font-size: 18px;color:#fff;">
            <b> Recommended Symbols: </b> <br>
            AAPL (US) | BABA (US) |
            EURCHF (CUR) | FB (US)
        </p>
    </div>


</div>


@stop

