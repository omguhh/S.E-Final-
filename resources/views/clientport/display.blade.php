@extends('thing')
@section('content')

    <script type="text/javascript">
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'containerz',
                    type: 'area',
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
                    categories: []
                },
                yAxis: {
                    title: {
                        text: 'Day'
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

            $.getJSON("http://localhost/SE_Repo/S.E-Final-/public/views/clientport/data.php", function(json) {
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
                <h1>
                    Bob Burger's Portfolio
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
                    <a href="#">Stock Watchlist</a>
                </li>
                <li>
                    {!! HTML::linkRoute('clientport/display/mydetails', 'Personal Data') !!}
                </li>

                <li>
                    {!! HTML::linkRoute('browsemarket', 'Market Insights') !!}
                </li>

                <li>
                    <a href="#">Wallet</a>
                </li>

            </ul>

            <div id="containerz" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

            <div class="row clearfix">
                <div class="col-md-6 column">
                    <div class="networth">
                        <h3>Your Total Networth</h3>
                        <h1>124,123,100</h1>
                    </div>
                </div>
                <div class="col-md-6 column">
                    <div class="balance">
                        <h3>Your Total Balance</h3>
                        <h1>124,123,100</h1>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@stop