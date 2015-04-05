@extends('thing')
@section('content')

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'containerz',
                    type: 'line',
                    marginRight: 130,
                    marginBottom: 25
                },
                title: {
                    text: 'Your Networth This Month',
                    x: -20 //center
                },
                subtitle: {
                    text: '',
                    x: -20
                },
                xAxis: {
                    categories: [],
                    title: {
                        text: 'Days'
                    }
                },
                yAxis: {
                    title: {
                        text: 'Networth'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    formatter: function() {
                        return '<b>'+ this.series.name +'</b><br/>'+
                                this.x +': '+ this.y;
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 100,
                    borderWidth: 0
                },
                series: []
            }

            $.getJSON("http://localhost/SE_Repo/S.E-Final-/resources/views/clientport/data.php", function(json) {
                options.xAxis.categories = json[0]['data'];
                options.series[0] = json[1];
                //options.series[1] = json[2];
                chart = new Highcharts.Chart(options);
            });
        });
    </script>

<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="page-header">
                @for ($i = 0; $i < count($deets); $i++)
                <h1>
                    {{$deets[$i]['rc_name']}}'s Portfolio
                </h1>
            </div>
            <ul class="nav nav-pills">
                <li class="active">
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
                    {!! HTML::linkRoute('browsemarket', 'Market Insights') !!}
                </li>

                <li>
                    {!! HTML::linkRoute('clientport/display/wallet', 'Wallet') !!}
                </li>

            </ul>

            <div id="containerz" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

            <div class="row clearfix">
                <div class="col-md-6 column">
                    <div class="networth">
                        <h3>Average Networth</h3>

                        <h1>124,123,100</h1>

                    </div>
                </div>
                <div class="col-md-6 column">
                    <div class="balance">
                        <h3>Your Total Balance</h3>

                        <h1>${{$deets[$i]['cash_balance']}}</h1>
                        @endfor
                    </div>
                </div>
<script>
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'container_pi',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                },
                title: {
                    text: 'Your Assets'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            color: '#000000',
                            connectorColor: '#000000',
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }
                    }
                },
                series: [{
                    type: 'pie',
                    name: 'Your Assets',
                    data: []
                }]
            }
            $.getJSON("http://localhost/SE_Repo/S.E-Final-/resources/views/clientport/data_assets.php", function(json) {
            options.series[0].data = json;
            chart = new Highcharts.Chart(options);
        });



    });
</script>
                <div class="col-md-12 column">
                    <div class="row clearfix" style="padding-top: 30px;">
            <div id="container_pi" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto;"></div>
                    </div>

            </div>
            </div>

        </div>
    </div>
</div>
@stop