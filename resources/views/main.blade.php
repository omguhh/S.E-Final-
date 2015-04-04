<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Financial Advisor| Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="http://localhost/I'mDoneWithSE/S.E-Final-/public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="http://localhost/I'mDoneWithSE/S.E-Final-/public/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="http://localhost/I'mDoneWithSE/S.E-Final-/public/css/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="http://localhost/I'mDoneWithSE/S.E-Final-/resources/assets/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="http://localhost/I'mDoneWithSE/S.E-Final-/resources/assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="http://localhost/I'mDoneWithSE/S.E-Final-/resources/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="http://localhost/I'mDoneWithSE/S.E-Final-/resources/assets/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="http://localhost/I'mDoneWithSE/S.E-Final-/resources/assets/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="http://localhost/I'mDoneWithSE/S.E-Final-/resources/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo"><b>Pi</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="http://localhost/I'mDoneWithSE/S.E-Final-/resources/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                            <span class="hidden-xs">Kevin Spacey</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="http://localhost/I'mDoneWithSE/S.E-Final-/resources/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                                <p>
                                    Kevin Spacey - Financial Advisor
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Clients</a>
                                </div>
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Ratings</a>
                                </div>
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Log Out</a>
                                </div>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="http://localhost/I'mDoneWithSE/S.E-Final-/resources/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>Kevin Spacey</p>

                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li><!--  Dashboard -->
                    <a href="#">
                        <i class="fa fa-th"></i> <span>Dashboard</span>
                    </a>
                </li>

                <li><!--  CLients -->
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>My Clients</span>
                    </a>
                </li>

                <li><!--  Calendar -->
                    <a href="#">
                        <i class="fa fa-calendar"></i> <span>Calendar</span>
                    </a>
                </li>

                <li><!--  Browse Market -->
                    <a href="#">
                        <i class="fa fa-table"></i> <span>Browse Market</span>
                    </a>
                </li>

                <li><!--  Messages -->
                    <a href="http://localhost/I'mDoneWithSE/S.E-Final-/resources/assets/mailbox.html">
                        <i class="fa fa-envelope"></i> <span>Messages</span>
                    </a>
                </li>

                <li><!--  New -->
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>New</span>
                    </a>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">

            <!-- Calendar -->
            <div class="box box-solid bg-blue-gradient">
                <div class="box-header">
                    <i class="fa fa-calendar"></i>
                    <h3 class="box-title">Calendar</h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <!-- button with a dropdown -->
                        <div class="btn-group">
                            <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="#">Add new event</a></li>
                                <li><a href="#">Clear events</a></li>
                                <li class="divider"></li>
                                <li><a href="#">View calendar</a></li>
                            </ul>
                        </div>
                        <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                    <!--The calendar -->
                    <div id="calendar" style="width: 100%">

                    </div>
                </div><!-- /.box-body -->

            </div><!-- /.box -->
            <div class="box1 text-black">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Progress bars -->
                        <div class="bs-callout bs-callout-warning" id="callout-navbar-btn-context">
                            <p class="text-blue"> <b>Meeting with Bob Sinclar</b> </p>
                            At 3:30pm
                        </div>

                        <div class="bs-callout bs-callout-warning" id="callout-navbar-btn-context">
                            <p class="text-blue"> <b>Meeting with Bob Sinclar</b> </p>
                            At 3:30pm
                        </div>

                        <div class="bs-callout bs-callout-warning" id="callout-navbar-btn-context">
                            <p class="text-blue"> <b>Meeting with Bob Sinclar</b> </p>
                            At 3:30pm
                        </div>

                        <div class="bs-callout bs-callout-warning" id="callout-navbar-btn-context">
                            <p class="text-blue"> <b>Meeting with Bob Sinclar</b> </p>
                            At 3:30pm
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
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; FOREVERR <a href="#"> Pi </a>.</strong> All rights reserved.
    </footer>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.3 -->
<script src="http://localhost/I'mDoneWithSE/S.E-Final-/resources/assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
<!-- jQuery UI 1.11.2 -->
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.2 JS -->
<script src="http://localhost/I'mDoneWithSE/S.E-Final-/public/js/bootstrap.min.js" type="text/javascript"></script>
<!-- Morris.js charts -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://localhost/I'mDoneWithSE/S.E-Final-/resources/assets/plugins/morris/morris.min.js" type="text/javascript"></script>
<!-- Sparkline -->
<script src="http://localhost/I'mDoneWithSE/S.E-Final-/resources/assets/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- jvectormap -->
<script src="http://localhost/I'mDoneWithSE/S.E-Final-/resources/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
<script src="http://localhost/I'mDoneWithSE/S.E-Final-/resources/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="http://localhost/I'mDoneWithSE/S.E-Final-/resources/assets/plugins/knob/jquery.knob.js" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="http://localhost/I'mDoneWithSE/S.E-Final-/resources/assets/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
<!-- datepicker -->
<script src="http://localhost/I'mDoneWithSE/S.E-Final-/resources/assets/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="http://localhost/I'mDoneWithSE/S.E-Final-/resources/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="http://localhost/I'mDoneWithSE/S.E-Final-/resources/assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<!-- Slimscroll -->
<script src="http://localhost/I'mDoneWithSE/S.E-Final-/resources/assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src="http://localhost/I'mDoneWithSE/S.E-Final-/resources/assets/plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/I'mDoneWithSE/S.E-Final-/public/js/app.min.js" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="http://localhost/I'mDoneWithSE/S.E-Final-/public/js/dashboard.js" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="http://localhost/I'mDoneWithSE/S.E-Final-/public/js/demo.js" type="text/javascript"></script>
</body>
</html>