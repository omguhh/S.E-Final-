@extends('FAapp')
@section('content')




    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">

            <!-- Calendar -->
            <div class="box box-solid bg-blue-gradient">

                <div class="row full-calendar">
                    <div class="col-sm-3">

                    </div>
                    <div class="col-sm-9">
                        <div id="calendar"></div>
                    </div>
                </div>

            </div><!-- /.box -->
            <div class="box1 text-black">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Progress bars -->
                        <div id="reload">
                            @for ($i = 0; $i < count($clients); $i++)
                                <div class="bs-callout bs-callout-warning" id="callout-navbar-btn-context">

                                    <p class="text-blue" id="displayss"> <b>{{ $clients[$i]['meeting_title'] }}</b> </p>
                                    {{--Meeting Date: {{ $clients[$i]['meeting_date'] }}--}}
                                    {{ $clients[$i]['meeting_content'] }} <br>
                                    {{ $clients[$i]['rc_id'] }}
                                </div>
                            @endfor
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>

            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-purple">
                        <div class="inner">
                            <h4>DIJA</h4>
                            <p>Some share values</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-arrow-down-c"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h4>DIJA</h4>
                            <p>Some share values</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-arrow-up-c"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h4>DIJA</h4>
                            <p>Some share values</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-arrow-down-c"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->

            </div><!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-7 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->


                </section><!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-5 connectedSortable">


                </section><!-- right col -->
            </div><!-- /.row (main row) -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @stop