<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pi</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://localhost/SE_Repo/S.E-Final-/public/css/bootstrap2.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://localhost/SE_Repo/S.E-Final-/public/css/homepage_css.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://localhost/SE_Repo/S.E-Final-/public/js/jquery.leanModal.min.js"></script>


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand page-scroll" href="#page-top">
                <span class="light" style="font-weight: 700;font-size: 25px;">Pi</span>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-justified navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">About</a>
                </li>
                <li>
                    {!! HTML::linkRoute('browsemarket', 'Market Insights',['class'=>'page-scroll']) !!}
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Find your Advisor</a>
                </li>


            </ul>
            <a class="login light" id="modal_trigger" href="#modal"> Login    </a>
        </div>
        <!-- /.navbar-collapse -->

    </div>
    <!-- /.container -->
</nav>
<!--Login Box Stuff-->

<div id="modal" class="popupContainer" style="display:none;">
    <header class="popupHeader">
        <span class="header_title">Login</span>
    </header>

    <section class="popupBody">
        <div class="user_login">

            {!! Form::open(['method' => 'POST', 'route' => ['validation']]) !!}

            {!! Form::text('username') !!}
            {!! Form::text('password') !!}

                <div class="action_btns">

                    <div class="one_half last">

                        {!! Form::submit('Login', ['class'=>'btn btn_red']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </form>

            <a class="forgot_password" href="#">Forgot password?</a>
        </div>
    </section>
</div>




<!-- Intro Header -->
<header class="intro">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <h1>The wealth management tool for you</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- About Section -->
<section id="about" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-12">
            <h2>We Help You Make Better Financial Decisions</h2>
            <p>See all your accounts in one place with our award-winning
                software. Our free tools let you manage your entire financial
                life from one secure place – so you can reach your goals faster.</p>
        </div>
    </div>
</section>

<!-- Motto Section -->
<section id="about" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-3" id="efficient_box">
                <h3>Efficient</h3>
                <p>Our state-of-the-art infrastructure
                    wrings efficiencies out of trading,
                    so it costs less.</p>
            </div>
            <div class="col-lg-3" id="automated_box">
                <h3>Automated</h3>
                <p>Our state-of-the-art infrastructure
                    wrings efficiencies out of trading,
                    so it costs less.</p>
            </div>
            <div class="col-lg-3" id="down_to_earth_box">
                <h3>Down-To-Earth</h3>
                <p>Our state-of-the-art infrastructure
                    wrings efficiencies out of trading,
                    so it costs less.</p>
            </div>
        </div>
    </div>
</section>

<!-- Client Section -->
<section id="about" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-12">
            <p class="testimonial_header">Our Clients</p>
            <div class="col-lg-6">
                <p class="testimonial_texties">

                    “I had an idea for an app icon, and a sketch, but it was't much.
                    Ramotion took it so much further than I could have imagined –
                    they breathed life into it as if it were their own. I couldn't be happier.”

                </p>
            </div>

            <div class="col-lg-6">
                <div class="client-img"><img src="Images/rat.jpg"></div>

            </div>

        </div>
    </div>
</section>



<!-- Footer -->
<footer>

    <p> © 2014- 2015 , Pi Corporation</p>

</footer>

<script type="text/javascript">
    $("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });
    $(function(){          $(".user_login").show();      })

</script>

</body>

</html>