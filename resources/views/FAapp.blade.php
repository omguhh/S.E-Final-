<!DOCTYPE html>
<html lang="en">
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

 @include('FAheader')

@include('FAsidebar')

<div >
    @include('FAcontent')

</div>

@include('FAfooter')

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
