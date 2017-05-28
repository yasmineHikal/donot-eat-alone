@extends('admin.layouts.layout')
@section('title')
Dashboard
@endsection
@section('content')
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <div class="display">
                <div class="number">
                    <h3 class="font-green-sharp">
                        <span data-counter="counterup" data-value="{{$userCount}}">0</span>
                        <small class="font-green-sharp"></small>
                    </h3>
                    <small>TOTAL USERS</small>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <div class="display">
                <div class="number">
                    <h3 class="font-red-haze">
                        <span data-counter="counterup" data-value="{{$restaurantCount}}">0</span>
                    </h3>
                    <small>Total Restaurants</small>
                </div>
                <div class="icon">
                    <i class="fa fa-cutlery"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <div class="display">
                <div class="number">
                    <h3 class="font-blue-sharp">
                        <span data-counter="counterup" data-value="{{$reservationCount}}"></span>
                    </h3>
                    <small>RESERVATIONS</small>
                </div>
                <div class="icon">
                    <i class="fa fa-paper-plane"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <div class="display">
                <div class="number">
                    <h3 class="font-purple-soft">
                        <span data-counter="counterup" data-value="{{$newUsersCount}}"></span>
                    </h3>
                    <small>NEW USERS</small>
                </div>
                <div class="icon">
                    <i class="icon-user"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12">
        <!-- BEGIN PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-bar-chart font-dark hide"></i>
                    <span class="caption-subject font-dark bold uppercase">Site Visits</span>
                    <span class="caption-helper">monthly stats...</span>
                </div>
            </div>
            <div class="portlet-body">
                <div id="site_statistics_loading" style="display: none;">
                    <img src="../assets/global/img/loading.gif" alt="loading">
                </div>
                <div id="site_statistics_content" class="display-none" style="display: block;">
                    <div id="site_statistics" class="chart" style="padding: 0px; position: relative;">
                        <canvas class="flot-base" width="480" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 480px; height: 300px;"></canvas>
                        <div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                            <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                <div style="position: absolute; max-width: 53px; top: 285px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: 'Open Sans', sans-serif; color: rgb(111, 123, 138); left: 11px; text-align: center;">02/2013</div>
                                <div style="position: absolute; max-width: 53px; top: 285px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: 'Open Sans', sans-serif; color: rgb(111, 123, 138); left: 64px; text-align: center;">03/2013</div>
                                <div style="position: absolute; max-width: 53px; top: 285px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: 'Open Sans', sans-serif; color: rgb(111, 123, 138); left: 118px; text-align: center;">04/2013</div>
                                <div style="position: absolute; max-width: 53px; top: 285px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: 'Open Sans', sans-serif; color: rgb(111, 123, 138); left: 172px; text-align: center;">05/2013</div>
                                <div style="position: absolute; max-width: 53px; top: 285px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: 'Open Sans', sans-serif; color: rgb(111, 123, 138); left: 226px; text-align: center;">06/2013</div>
                                <div style="position: absolute; max-width: 53px; top: 285px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: 'Open Sans', sans-serif; color: rgb(111, 123, 138); left: 279px; text-align: center;">07/2013</div>
                                <div style="position: absolute; max-width: 53px; top: 285px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: 'Open Sans', sans-serif; color: rgb(111, 123, 138); left: 333px; text-align: center;">08/2013</div>
                                <div style="position: absolute; max-width: 53px; top: 285px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: 'Open Sans', sans-serif; color: rgb(111, 123, 138); left: 387px; text-align: center;">09/2013</div>
                                <div style="position: absolute; max-width: 53px; top: 285px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: 'Open Sans', sans-serif; color: rgb(111, 123, 138); left: 441px; text-align: center;">10/2013</div>
                            </div>
                            <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                <div style="position: absolute; top: 273px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: 'Open Sans', sans-serif; color: rgb(111, 123, 138); left: 19px; text-align: right;">0</div>
                                <div style="position: absolute; top: 220px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: 'Open Sans', sans-serif; color: rgb(111, 123, 138); left: 1px; text-align: right;">1000</div>
                                <div style="position: absolute; top: 166px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: 'Open Sans', sans-serif; color: rgb(111, 123, 138); left: 1px; text-align: right;">2000</div>
                                <div style="position: absolute; top: 113px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: 'Open Sans', sans-serif; color: rgb(111, 123, 138); left: 1px; text-align: right;">3000</div>
                                <div style="position: absolute; top: 59px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: 'Open Sans', sans-serif; color: rgb(111, 123, 138); left: 1px; text-align: right;">4000</div>
                                <div style="position: absolute; top: 6px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: 'Open Sans', sans-serif; color: rgb(111, 123, 138); left: 1px; text-align: right;">5000</div>
                            </div>
                        </div>
                        <canvas class="flot-overlay" width="480" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 480px; height: 300px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>
@endsection
@section('footer')
<script>
    var visitors = [
                   ['02/2017', 1500],
                   ['03/2017', 2500],
                   ['04/2017', 1700],
                   ['05/2017', 800],
                   ['06/2017', 1500],
                   ['07/2017', 2350],
                   ['08/2017', 1500],
                   ['09/2017', 1300],
                   ['10/2017', 4600]
               ];


               if ($('#site_statistics').size() != 0) {

                   $('#site_statistics_loading').hide();
                   $('#site_statistics_content').show();

                   var plot_statistics = $.plot($("#site_statistics"), [{
                           data: visitors,
                           lines: {
                               fill: 0.6,
                               lineWidth: 0
                           },
                           color: ['#f89f9f']
                       }, {
                           data: visitors,
                           points: {
                               show: true,
                               fill: true,
                               radius: 5,
                               fillColor: "#f89f9f",
                               lineWidth: 3
                           },
                           color: '#fff',
                           shadowSize: 0
                       }],

                       {
                           xaxis: {
                               tickLength: 0,
                               tickDecimals: 0,
                               mode: "categories",
                               min: 0,
                               font: {
                                   lineHeight: 14,
                                   style: "normal",
                                   variant: "small-caps",
                                   color: "#6F7B8A"
                               }
                           },
                           yaxis: {
                               ticks: 5,
                               tickDecimals: 0,
                               tickColor: "#eee",
                               font: {
                                   lineHeight: 14,
                                   style: "normal",
                                   variant: "small-caps",
                                   color: "#6F7B8A"
                               }
                           },
                           grid: {
                               hoverable: true,
                               clickable: true,
                               tickColor: "#eee",
                               borderColor: "#eee",
                               borderWidth: 1
                           }
                       });

                   var previousPoint = null;
                   $("#site_statistics").bind("plothover", function(event, pos, item) {
                       $("#x").text(pos.x.toFixed(2));
                       $("#y").text(pos.y.toFixed(2));
                       if (item) {
                           if (previousPoint != item.dataIndex) {
                               previousPoint = item.dataIndex;

                               $("#tooltip").remove();
                               var x = item.datapoint[0].toFixed(2),
                                   y = item.datapoint[1].toFixed(2);

                               showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' visits');
                           }
                       } else {
                           $("#tooltip").remove();
                           previousPoint = null;
                       }
                   });
               }
</script>
@endsection