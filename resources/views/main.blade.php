
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM calender_meeting where fa_name='ayesha sheriff'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $RC_ID=$row["rc_id"];
        $MeetingTitle=$row["meeting_title"];
        $MeetingDate=$row["meeting_date"];
        $MeetingContent=$row["meeting_content"];
        //echo "rcID:" . $row["rc_id"]. " - MeetingTitle: " . $row["meeting_title"]. "- MeetingDate " . $row["meeting_date"]. "<br>";
    }

} else {
    echo "0 results";
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Financial Advisor| Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <script src="http://localhost/S.E-Final-/S.E-Final-/fullcalendar/lib/jquery.min.js"></script>
    <script src="http://localhost/S.E-Final-/S.E-Final-/fullcalendar/lib/jquery-ui.custom.min.js"></script>
    <script src="http://localhost/S.E-Final-/S.E-Final-/fullcalendar/fullcalendar.js"></script>
    <script src="http://localhost/I'mDoneWithSE/S.E-Final-/fullcalendar/lib/moment.js"></script>
    <script src="http://localhost/S.E-Final-/S.E-Final-/fullcalendar/fullcalendar.min.js"></script>


    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Righteous'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/S.E-Final-/S.E-Final-/fullcalendar/fullcalendar.css">
    <link rel="stylesheet" href="http://localhost/S.E-Final-/S.E-Final-/public/css/style_v1.css">{{-- //for the pop up--}}
    <link rel="stylesheet" href="http://localhost/S.E-Final-/S.E-Final-/public/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/S.E-Final-/S.E-Final-/public/css/app.css">
    <link rel="stylesheet" href="http://localhost/S.E-Final-/S.E-Final-/public/css/jquery-ui.css">
    <link rel="stylesheet" href="http://localhost/S.E-Final-/S.E-Final-/public/css/custom_css.css">

    <script>



        /*-------------------------------------------
         Dynamically load plugin scripts
         ---------------------------------------------*/
        //
        // Dynamically load Fullcalendar Plugin Script
        // homepage: http://arshaw.com/fullcalendar
        // require moment.js
        //

        function LoadCalendarScript(callback){
            function LoadFullCalendarScript(){
                if(!$.fn.fullCalendar){
                    $.getScript("http://localhost/I'mDoneWithSE/S.E-Final-/fullcalendar/lib/moment.js", callback);
                }
                else {
                    if (callback && typeof(callback) === "function") {
                        callback();
                    }
                }
            }
            if (!$.fn.moment){
                $.getScript("http://localhost/I'mDoneWithSE/S.E-Final-/fullcalendar/lib/moment.js", LoadFullCalendarScript);
            }
            else {
                LoadFullCalendarScript();
            }
        }

        function OpenModalBox(header, inner, bottom){
            var modalbox = $('#modalbox');
            modalbox.find('.modal-header-name span').html(header);
            modalbox.find('.devoops-modal-inner').html(inner);
            modalbox.find('.devoops-modal-bottom').html(bottom);
            modalbox.fadeIn('fast');
            $('body').addClass("body-expanded");
        }
        //
        //  Close modalbox
        //
        //
        function CloseModalBox(){
            var modalbox = $('#modalbox');
            modalbox.fadeOut('fast', function(){
                modalbox.find('.modal-header-name span').children().remove();
                modalbox.find('.devoops-modal-inner').children().remove();
                modalbox.find('.devoops-modal-bottom').children().remove();
                $('body').removeClass("body-expanded");
            });
        }

        $(document).ready(function () {

                // Example form validator function
                //

            /* initialize the external events
             -----------------------------------------------------------------*/
            $('#external-events div.external-event').each(function() {
                // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                var eventObject = {
                    title: $.trim($(this).text()) // use the element's text as the event title
                };
                // store the Event Object in the DOM element so we can get to it later
                $(this).data('eventObject', eventObject);
                // make the event draggable using jQuery UI
                $(this).draggable({
                    zIndex: 999,
                    revert: true,      // will cause the event to go back to its
                    revertDuration: 0  //  original position after the drag
                });
            });
            /* initialize the calendar
             -----------------------------------------------------------------*/
            var meetingTitle = "<?php echo $MeetingTitle; ?>";
            var meetingDate = "<?php echo $MeetingDate ?>";
            var meetingContent = "<?php echo $MeetingContent ?>";


            var calendar = $('#calendar').fullCalendar({
                defaultDate: meetingDate,
                eventLimit: true, // allow "more" link when too many events
                events: [
                    {
                        title: meetingTitle,
                        start: meetingDate,
                        description: meetingContent
                    }
                ],
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                selectable: true,
                selectHelper: true,
                select: function(start, end, allDay) {
                    var form = $('<form id="event_form">'+
                    '<div class="form-group has-success has-feedback">'+
                    '<label">Event name</label>'+
                    '<div>'+
                    '<input type="text" id="newevent_name" class="form-control" placeholder="Name of event">'+
                    '</div>'+
                    '<label>Description</label>'+
                    '<div>'+
                    '<textarea rows="3" id="newevent_desc" class="form-control" placeholder="Description"></textarea>'+
                    '</div>'+
                    '</div>'+
                    '</form>');
                    var buttons = $('<button class="event_cancel btn btn-default btn-label-left" type="cancel" >'+
                    '<span><i class="fa fa-clock-o txt-danger"></i></span>'+
                    'Cancel'+
                    '</button>'+
                    '<button type="submit" id="event_submit" class="btn btn-primary btn-label-left pull-right">'+
                    '<span><i class="fa fa-clock-o"></i></span>'+
                    'Add'+
                    '</button>');
                    OpenModalBox('Add event', form, buttons);
                    $('.event_cancel').on('click', function(){
                        CloseModalBox();
                    });
                    $('#event_submit').on('click', function(){

                       var date3 = new Date(start);
                        var curr_date = date3.getDate();
                        var curr_month = date3.getMonth() + 1; //Months are zero based
                        var curr_year = date3.getFullYear();
                        alert(curr_year + "-" + curr_month + "-" + curr_date);

                        var date2 = curr_year + "-" + curr_month + "-" + curr_date;

                        //noinspection JSJQueryEfficiency
                        var newaddDEsc = $('#newevent_desc').val();

                       var new_event_name = $('#newevent_name').val();
                        if (new_event_name != ''){
                            calendar.fullCalendar('renderEvent',
                                    {
                                        title: new_event_name,
                                        description:  $('#newevent_desc').val(),
                                        start: start,
                                        end: end,
                                        allDay: allDay
                                    },
                                    true // make the event "stick"
                            );
                        }
                        $.ajax({
                            url: "http://localhost/I'mDoneWithSE/S.E-Final-/resources/views/add.blade.php",
                            type: "POST",
                            data: {fname: 'ayesha sheriff' , cname: 'shamu', title: new_event_name , desc: newaddDEsc , date: date2}, //this sends the user-id to php as a post variable, in php it can be accessed as $_POST['uid']
                            success: function(data){
                                data = JSON.parse(data);

                                alert( 'data["meeting_title"];');
                                //update some fields with the updated data
                                //you can access the data like 'data["driver"]'
                            }
                        });

                        $('#reload').load(document.URL +  ' #reload');

                        CloseModalBox();
                    });
                    calendar.fullCalendar('unselect');
                },
                editable: true,
                droppable: true, // this allows things to be dropped onto the calendar !!!
                drop: function(date, allDay) { // this function is called when something is dropped
                    // retrieve the dropped element's stored Event Object
                    var originalEventObject = $(this).data('eventObject');
                    // we need to copy it, so that multiple events don't have a reference to the same object
                    var copiedEventObject = $.extend({}, originalEventObject);
                    // assign it the date that was reported
                    copiedEventObject.start = date;

                    copiedEventObject.allDay = allDay;
                    // render the event on the calendar
                    // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                    $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
                    // is the "remove after drop" checkbox checked?
                    if ($('#drop-remove').is(':checked')) {
                        // if so, remove the element from the "Draggable Events" list
                        $(this).remove();
                    }
                },
                eventRender: function (event, element, icon) {
                    if (event.description != "") {
                        element.attr('title', event.description);
                    }
                },
                eventClick: function(calEvent, jsEvent, view) {
                    var form = $('<form id="event_form">'+
                    '<div class="form-group has-success has-feedback">'+
                    '<label">Event name</label>'+
                    '<div>'+
                    '<input type="text" id="newevent_name" value="'+ calEvent.title +'" class="form-control" placeholder="Name of event">'+
                    '</div>'+
                    '<label>Description</label>'+
                    '<div>'+
                    '<textarea rows="3" id="newevent_desc" class="form-control" placeholder="Description">'+ calEvent.description +'</textarea>'+
                    '</div>'+
                    '</div>'+
                    '</form>');
                    var buttons = $('<button class="event_cancel btn btn-default btn-label-left" type="cancel" >'+
                    '<span><i class="fa fa-clock-o txt-danger"></i></span>'+
                    'Cancel'+
                    '</button>'+
                    '<button id="event_delete" type="cancel" class="btn btn-danger btn-label-left">'+
                    '<span><i class="fa fa-clock-o txt-danger"></i></span>'+
                    'Delete'+
                    '</button>'+
                    '<button type="submit" id="event_change" class="btn btn-primary btn-label-left pull-right">'+
                    '<span><i class="fa fa-clock-o"></i></span>'+
                    'Save changes'+
                    '</button>');
                    OpenModalBox('Change event', form, buttons);
                    $('.event_cancel').on('click', function(){
                        CloseModalBox();
                    });
                    $('#event_delete').on('click', function(){
                        calendar.fullCalendar('removeEvents' , function(ev){
                            return (ev._id == calEvent._id);
                        });

                        var date3 = new Date(meetingDate);
                        var curr_date = date3.getDate();
                        var curr_month = date3.getMonth() + 1; //Months are zero based
                        var curr_year = date3.getFullYear();


                        var date2 = curr_year + "-" + curr_month + "-" + curr_date;
                        alert(date2);

                        $.ajax({
                            url: "http://localhost/I'mDoneWithSE/S.E-Final-/resources/views/delete.blade.php",
                            type: "POST",
                            data: {fname: 'ayesha sheriff', cname: 'shamu', date: date2}, //this sends the user-id to php as a post variable, in php it can be accessed as $_POST['uid']
                            success: function(data){
                                data = JSON.parse(data);
                                alert( 'data["meeting_title"];');


                                //update some fields with the updated data
                                //you can access the data like 'data["driver"]'
                            }


                        });

                        $('#reload').load(document.URL +  ' #reload');

                        CloseModalBox();
                    });
                    $('#event_change').on('click', function(){

                        var date3 = new Date(meetingDate);
                        var curr_date = date3.getDate();
                        var curr_month = date3.getMonth() + 1; //Months are zero based
                        var curr_year = date3.getFullYear();


                        var date2 = curr_year + "-" + curr_month + "-" + curr_date;
                        alert(date2);
                        var newTitle = calEvent.title = $('#newevent_name').val();
                        var newDEsc = calEvent.description = $('#newevent_desc').val();
                        calendar.fullCalendar('updateEvent', calEvent);

                        $.ajax({
                            url: "http://localhost/I'mDoneWithSE/S.E-Final-/resources/views/update.blade.php",
                            type: "POST",
                            data: {name: 'ayesha sheriff', title: newTitle , desc: newDEsc , date: date2}, //this sends the user-id to php as a post variable, in php it can be accessed as $_POST['uid']
                            success: function(data){
                                data = JSON.parse(data);

                                alert( 'data["meeting_title"];');
                                //update some fields with the updated data
                                //you can access the data like 'data["driver"]'
                            }
                        });


                        $('#reload').load(document.URL +  ' #reload');

                        CloseModalBox();

                    });
                }
            });

            $('#new-event-add').on('click', function (event) {
                event.preventDefault();
                var event_name = $('#new-event-title').val();
                var event_description = $('#new-event-desc').val();
                if (event_name != '') {
                    var event_template = $('<div class="external-event" data-description="' + event_description + '">' + event_name + '</div>');
                    $('#events-templates-header').after(event_template);
                    var eventObject = {
                        title: event_name,
                        description: event_description
                    };
                    // store the Event Object in the DOM element so we can get to it later
                    event_template.data('eventObject', eventObject);
                    event_template.draggable({
                        zIndex: 999,
                        revert: true,
                        revertDuration: 0
                    });
                }
            });



// Load scripts and draw Calendar
//
            function DrawFullCalendar() {
                LoadCalendarScript(DrawCalendar);
            }

            var meetingTitle = document.getElementById('displayss').value;
            //alert(meetingTitle);
            $('#calendar').fullCalendar({
                defaultDate: meetingDate,
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [
                    {
                        title:  meetingTitle,
                        start: meetingDate
                    }
                ]
            });


        })

    </script>








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


    <link rel="stylesheet" href="http://localhost/S.E-Final-/S.E-Final-/public/css/jquery-ui.css">
</head>
<body class="skin-blue">
<div id="modalbox">
    <div class="devoops-modal">
        <div class="devoops-modal-header">
            <div class="modal-header-name">
                <span>Basic table</span>
            </div>
            <div class="box-icons">
                {{--class="close-link"--}}
                <a  class="event_cancel">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="devoops-modal-inner">
        </div>
        <div class="devoops-modal-bottom">
        </div>
    </div>
</div>
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
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; FOREVERR <a href="#"> Pi </a>.</strong> All rights reserved.
    </footer>
</div><!-- ./wrapper -->

</body>
</html>