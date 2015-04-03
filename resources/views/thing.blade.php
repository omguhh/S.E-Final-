<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Your Portfolio| Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="http://localhost/SE_Repo/S.E-Final-/public/css/custom_css.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap 3.3.2 -->
    <link href="http://localhost/SE_Repo/S.E-Final-/public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="http://localhost/SE_Repo/S.E-Final-/public/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="http://localhost/SE_Repo/S.E-Final-/public/css/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>


    <![endif]-->
    <style>
        .skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side {
            background: #ffffff;
        }
        body {
            color: black;
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif !important;
        }
        .skin-blue .main-header .logo:hover {
            background: #303F9F;
        }

        .skin-blue .main-header .logo {
            background-color: #303F9F;
            color: #fff;
            border-bottom: 0 solid transparent;
        }

        .skin-blue .main-header .navbar {
            background-color: #303F9F;
        }

    </style>
</head>
<body class="skin-blue">
<div class="wrapper">

    <header> @include('CAHeader') </header>

    <div class="container">
        @yield('content')
    </div>

    @yield('footer')

</div><!-- ./wrapper -->

<!-- jQuery 2.1.3 -->
<script src="http://localhost/SE_Repo/S.E-Final-/resources/assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
<!-- jQuery UI 1.11.2 -->
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.2 JS -->
<script src="http://localhost/SE_Repo/S.E-Final-/public/js/bootstrap.min.js" type="text/javascript"></script>
<script src="http://localhost/SE_Repo/S.E-Final-/resources/assets/plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/SE_Repo/S.E-Final-/public/js/app.min.js" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="http://localhost/SE_Repo/S.E-Final-/public/js/dashboard.js" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="http://localhost/SE_Repo/S.E-Final-/public/js/demo.js" type="text/javascript"></script>




</body>
</html>
