<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PI| TRANSACTION</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="http://localhost/htdocs/SE_Repo-/S.E-Final-/resources/assets/Plugins/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="http://localhost/SE_Repo-/S.E-Final-/resources/assets/Plugins/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://localhost/SE_Repo-/S.E-Final-/resources/assets/Plugins/ionicons.min.cs" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="http://localhost/SE_Repo-/S.E-Final-/resources/assets/Plugins/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="http://localhost/SE_Repo-/S.E-Final-/resources/assets/Plugins/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="http://localhost/htdocs/SE_Repo-/S.E-Final-/resources/assets/Plugins/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="http://localhost/htdocs/SE_Repo-/S.E-Final-/resources/assets/Plugins/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="http://localhost/SE_Repo-/S.E-Final-/resources/assets/Plugins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

</head>
<body class="skin-blue">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="main.blade.php" class="logo"><b>PI</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
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
                    <img src="http://localhost/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>Alexander Pierce</p>

                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <a href="#">
                </a>
                <ul class="treeview-menu">
                </ul>

                <li class="treeview">
                    <a href="#">
                    </a>
                    <ul class="treeview-menu">
                    </ul>
                </li>
                <li>

                </li>
                <li class="treeview">


                    <ul class="treeview-menu">
                    </ul>
                </li>
                <li class="treeview">

                    <ul class="treeview-menu">
                    </ul>
                </li>
                <li class="treeview">
                    <ul class="treeview-menu">
            </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Tables</span>
                </a>
                <ul class="treeview-menu">
                </ul>
            </li>
            <li>

            </li>
            <li>

            </li>
            <li class="treeview">
                <a href="#">

                </a>
                <ul class="treeview-menu">

                </ul>
            </li>
            </ul>
            </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                TRANSACTION HISTORY

                <!-- TABLE: TRANSACTION-->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">PURCHASE HISTORY</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                     <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>CLIENT NAME</th>
                                    <th>F.A NAME</th>
                                    <th>STOCKNAME</th>
                                    <th>DATE BROUGHT</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="http://localhost/htdocs/SE_Repo-/S.E-Final-/examples/invoice.html">Clientdude</a></td>
                                    <td>SONIA SANTA</td>
                                    <td><span class="label label-success">MFST</span></td>
                                    <td><div class="sparkbar" data-color="#00a65a" data-height="20">01-03-2015</div></td>
                                </tr>
                                <tr>
                                    <td><a href="http://localhost/htdocs/SE_Repo-/S.E-Final-pages/examples/invoice.html">Naiyarah hussain</a></td>
                                    <td>SONIA SANTA</td>
                                    <td><span class="label label-warning">TOYOTA</span></td>
                                    <td><div class="sparkbar" data-color="#f39c12" data-height="20">26-02-2015</div></td>
                                </tr>
                                <tr>
                                    <td><a href="http://localhost/htdocs/SE_Repo-/S.E-Final-pages/examples/invoice.html">Shoaib mawani</a></td>
                                    <td>HAKIM MOTI</td>
                                    <td><span class="label label-danger">FUTTAIM</span></td>
                                    <td><div class="sparkbar" data-color="#f56954" data-height="20">27-02-2015</div></td>
                                </tr>
                                <tr>
                                </tr>
                                </tbody>
                            </table>

                        </div><!-- /.box-footer -->

                    </div><!-- /.box -->
                </div><!-- /.col -->
            </h1>




<!-- /.content-wrapper -->

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b></b>
    </div>
    <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">PI</a>.</strong> All rights reserved.
</footer>

<!-- ./wrapper -->

</section>
        </div>
    </div>

    <!-- jQuery 2.1.3 -->
    <script src="http://localhost/SE_Repo-/S.E-Final-/plugins/jQuery/jQuery-2.1.3.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="http://localhost/SE_Repo-/S.E-Final-/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="http://localhost/SE_Repo-/S.E-Final-/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="http://localhost/SE_Repo-/S.E-Final-/dist/js/app.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="http://localhost/SE_Repo-/S.E-Final-/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="http://localhost/SE_Repo-/S.E-Final-/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="http://localhost/SE_Repo-/S.E-Final-/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="http://localhost/SE_Repo-/S.E-Final-/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="http://localhost/SE_Repo-/S.E-Final-/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="http://localhost/SE_Repo-/S.E-Final-/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="http://localhost/SE_Repo-/S.E-Final-/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="http://localhost/SE_Repo-/S.E-Final-/plugins/chartjs/Chart.min.js" type="text/javascript"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="http://localhost/SE_Repo-/S.E-Final-/dist/js/pages/dashboard2.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="http://localhost/SE_Repo-/S.E-Final-/dist/js/demo.js" type="text/javascript"></script>
    <![endif]-->
</body>
</html>
