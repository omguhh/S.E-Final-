@extends('app')


@section('content')

   <script type="text/javascript">
       @for ($i = 0; $i < count($test); $i++)
        var quoteData = [];
      // alert("melanieeee");

       var symb= ' {{$test[0]['Symbol'] }}  ' ;
       var stkname= ' {{ $test[0]['Name']}}  ' ;

        $(function() {


            var url = "https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.historicaldata%20where%20symbol%20%3D%20%22"+symb+"%22%20and%20startDate%20%3D%20%222014-09-11%22%20and%20endDate%20%3D%20%222015-03-10%22&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=&";
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
                    text : symb+ ' Stock Trends'
                },

                series : [{
                    name : symb,
                    data : data,
                    tooltip: {
                        valueDecimals: 2
                    }
                }]
            });

        }
       @endfor
    </script>

    @for ($i = 0; $i < count($test); $i++)
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div class="page-header">
                    <h1>
                        {{ $test[$i]['Name']}}  {{ $test[$i]['Symbol']}} <small> - {{ $test[$i]['StockExchange']}} As of {{ $test[$i]['LastTradeWithTime']}}</small> <span><button class="btn btn-success" style="float:right" value="Buy">Buy</button></span>
                    </h1>
                </div>
                <h3>
                    <strong style="font-size: 30px;">{{ $test[$i]['LastTradePriceOnly']}}</strong>
                        @if(($test[0]['Change'])<0)   <span style="color:red;font-size: 20px;">  {{  $test[0]['Change']  }}  @else {{  $test[0]['Change']  }}       @endif
                    </span>
                </h3>

                <div id="abox" style="height: 400px; min-width: 310px"></div>

                <table class="table table-striped" >
                    <tr>
                        <td>
                            <b>Prev Close</b>
                            <b style="float:right;">{{ $test[$i]['PreviousClose']}}</b>
                        </td>
                        <td>
                            <b>High</b>
                            <b style="float:right;">{{ $test[$i]['DaysHigh']}}</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Open</b>
                            <b style="float:right;">{{ $test[$i]['Open']}}</b>
                        </td>
                        <td>
                            <b>Low</b>
                            <b style="float:right;">{{ $test[$i]['DaysLow']}}</b>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <b>Volume</b>
                            <b style="float:right;">{{ $test[$i]['Volume']}}</b>
                        </td>
                        <td>
                            <b>52 Wk High</b>
                            <b style="float:right;">{{ $test[$i]['FiftydayMovingAverage']}}</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Mkt Cap</b>
                            <b style="float:right;">{{ $test[$i]['MarketCapitalization']}}</b>
                        </td>
                        <td>
                            <b>Days Range</b>
                            <b style="float:right;">{{ $test[$i]['DaysRange']}}</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Avg Vol</b>
                            <b style="float:right;">{{ $test[$i]['AverageDailyVolume']}}</b>
                        </td>
                        <td>
                            <b>Ask</b>
                            <b style="float:right;">{{ $test[$i]['Ask']}}</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>1Y Target Est</b>
                            <b style="float:right;">{{ $test[$i]['OneyrTargetPrice']}}</b>
                        </td>
                        <td>
                            <b>Bid</b>
                            <b style="float:right;">{{ $test[$i]['Bid']}}</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Earnings Share</b>
                            <b style="float:right;">{{ $test[$i]['EarningsShare']}}</b>
                        </td>
                        <td>
                            <b>Div &amp; Yield</b>
                            <b style="float:right;">N/A</b>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    @endfor
@stop