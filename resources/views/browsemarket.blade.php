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
    $(function () {
        var seriesOptions = [],
                seriesCounter = 0,
                names = ['MSFT', 'AAPL', 'GOOG'],
        // create the chart when all data is loaded
                createChart = function () {
            chart1 = new Highcharts.StockChart({
                chart: {
                    renderTo: 'abox'
                },
                rangeSelector: {
                    selected: 4
                },

                yAxis: {
                    labels: {
                        formatter: function () {
                            return (this.value > 0 ? ' + ' : '') + this.value + '%';
                        }
                    },
                    plotLines: [{
                        value: 0,
                        width: 2,
                        color: 'silver'
                    }]
                },

                plotOptions: {
                    series: {
                        compare: 'percent'
                    }
                },

                tooltip: {
                    pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.change}%)<br/>',
                    valueDecimals: 2
                },

                series: seriesOptions
            });
        };

        $.each(names, function (i, name) {

            $.getJSON('http://www.highcharts.com/samples/data/jsonp.php?filename=' + name.toLowerCase() + '-c.json&callback=?',    function (data) {

                seriesOptions[i] = {
                    name: name,
                    data: data
                };

                // As we're loading the data asynchronously, we don't know what order it will arrive. So
                // we keep a counter and create the chart when all the data is loaded.
                seriesCounter += 1;

                if (seriesCounter === names.length) {
                    createChart();
                }
            });
        });
    });


    function getRealtimeData(symbol, callback) {
        $.ajax({
            url: "http://query.yahooapis.com/v1/public/yql?&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys",
            jsonp: "callback",
            dataType: "jsonp",
            data: {
                q: 'select * from yahoo.finance.historicaldata where symbol = "^GSPC" and startDate = "2014-09-11" and endDate = "2015-03-16',
                format: "json"
            },

            success: function (response) {
                var data = [Date.now(), parseFloat(response.query.results.quote.BidRealtime)];
                callback(data);
            }
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

