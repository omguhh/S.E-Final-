

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
<script src="http://localhost/SE_Repo/S.E-Final-/fullcalendar/lib/jquery.min.js"></script>
<script src="http://localhost/SE_Repo/S.E-Final-/fullcalendar/lib/jquery-ui.custom.min.js"></script>
<script src="http://localhost/SE_Repo/S.E-Final-/fullcalendar/fullcalendar.js"></script>
<script src="http://localhost/SE_Repo/S.E-Final-/fullcalendar/lib/moment.min.js"></script>
<script src="http://localhost/SE_Repo/S.E-Final-/fullcalendar/fullcalendar.min.js"></script>
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Righteous'>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel='stylesheet' href='http://localhost/SE_Repo/S.E-Final-/fullcalendar/fullcalendar.css'>
<link rel="stylesheet" href="http://localhost/SE_Repo/S.E-Final-/public/css/style_v1.css">
<link rel="stylesheet" href="http://localhost/SE_Repo/S.E-Final-/public/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/SE_Repo/S.E-Final-/public/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/SE_Repo/S.E-Final-/public/css/app.css">
<link rel="stylesheet" href="http://localhost/SE_Repo/S.E-Final-/public/css/jquery-ui.css">
    <link rel="stylesheet" href="http://localhost/SE_Repo/S.E-Final-/public/css/custom_css.css">


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
                    $.getScript('/fullcalendar/lib/fullcalendar.js', callback);
                }
                else {
                    if (callback && typeof(callback) === "function") {
                        callback();
                    }
                }
            }
            if (!$.fn.moment){
                $.getScript('/fullcalendar/lib/moment.min.js', LoadFullCalendarScript);
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


//
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
            {{--var meetingDate = "{{ $clients[$i]['meeting_date'] }}";--}}
            {{--var meetingTitle = "{{ $clients[$i]['meeting_title'] }}";--}}
            {{--var meetingContent = "{{ $clients[$i]['meeting_content'] }}";--}}


            var calendar = $('#calendar').fullCalendar({
                defaultDate: "2015-04-04",
                eventLimit: true, // allow "more" link when too many events
                events:[
                    @for ($i = 0; $i < count($clients); $i++)

                    {
                        title: "{{ $clients[$i]['meeting_title'] }}",
                        start: "{{ $clients[$i]['meeting_date'] }}",
                        description: "{{ $clients[$i]['meeting_content'] }}"
                    },
                    @endfor
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

                        var date2 = curr_year + "-" + curr_month + "-" + curr_date;
                        alert("Event will be added on"+date2);

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
                            url: "http://localhost/SE_Repo/S.E-Final-/resources/views/add.blade.php",
                            type: "POST",
                            data: {fname: 'ayesha sheriff' , cname: 'shamu', title: new_event_name , desc: newaddDEsc , date: date2}, //this sends the user-id to php as a post variable, in php it can be accessed as $_POST['uid']
                            success: function(data){
                                data = JSON.parse(data);

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


                        @for ($i = 0; $i < count($clients); $i++)

                        var align = "{{ $clients[$i]['meeting_date'] }}";
                        @endfor
                        var date3 = new Date(align);
                        var curr_date = date3.getDate();
                        var curr_month = date3.getMonth() + 1; //Months are zero based
                        var curr_year = date3.getFullYear();
                        var date2 = curr_year + "-" + curr_month + "-" + curr_date;
                        alert("Event will be deleted for "+date2);

                        $.ajax({
                            url: "http://localhost/SE_Repo/S.E-Final-/resources/views/delete.blade.php",
                            type: "POST",
                            data: {fname: 'ayesha sheriff', cname: 'shamu', date: date2}, //this sends the user-id to php as a post variable, in php it can be accessed as $_POST['uid']
                            success: function(data){
                                data = JSON.parse(data);


                                //update some fields with the updated data
                                //you can access the data like 'data["driver"]'
                            }


                        });

                        $('#reload').load(document.URL +  ' #reload');

                        CloseModalBox();
                    });
                    $('#event_change').on('click', function(){

                        @for ($i = 0; $i < count($clients); $i++)

                        var align = "{{ $clients[$i]['meeting_date'] }}";
                                @endfor
                                var date3 = new Date(align);
                        var curr_date = date3.getDate();
                        var curr_month = date3.getMonth() + 1; //Months are zero based
                        var curr_year = date3.getFullYear();
                        var date2 = curr_year + "-" + curr_month + "-" + curr_date;
                        alert("Event will be added on "+date2);

                        var newTitle = calEvent.title = $('#newevent_name').val();
                        var newDEsc = calEvent.description = $('#newevent_desc').val();
                        calendar.fullCalendar('updateEvent', calEvent);

                        $.ajax({
                            url: "http://localhost/SE_Repo/S.E-Final-/resources/views/update.blade.php",
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

//
// Load scripts and draw Calendar
//
            function DrawFullCalendar() {
                LoadCalendarScript(DrawCalendar);
            }

        })

</script>

<style>
    @import url(//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic);

    .skin-blue .main-header .navbar {
        background-color: #3c8dbc;
    }
    /* Fixed layout */
    .fixed .main-header{
        position: fixed;
    }
    .fixed .main-header {
        top: 0;
        right: 0;
        left: 0;
    }

    /*
 * Component: Main Header
 * ----------------------
 */
    .main-header {
        position: relative;
        max-height: 100px;
        z-index: 1030;
    }
    .main-header > .navbar {
        margin-bottom: 0;
        margin-left: 230px;
        border: none;
        min-height: 50px;
        border-radius: 0;
    }
    .layout-top-nav .main-header > .navbar {
        margin-left: 0!important;
    }
    .main-header #navbar-search-input {
        background: rgba(255, 255, 255, 0.2);
        border-color: transparent;
    }
    .main-header #navbar-search-input:focus,
    .main-header #navbar-search-input:active {
        border-color: rgba(0, 0, 0, 0.1) !important;
        background: rgba(255, 255, 255, 0.9);
    }
    .main-header #navbar-search-input::-moz-placeholder {
        color: #ccc;
        opacity: 1;
    }
    .main-header #navbar-search-input:-ms-input-placeholder {
        color: #ccc;
    }
    .main-header #navbar-search-input::-webkit-input-placeholder {
        color: #ccc;
    }
    .main-header .navbar-custom-menu,
    .main-header .navbar-right {
        margin-right: 5px;
        float: right;
    }
    @media (max-width: 991px) {
        .main-header .navbar-custom-menu a,
        .main-header .navbar-right a {
            color: inherit;
            background: transparent;
        }
    }
    @media (max-width: 767px) {
        .main-header .navbar-right {
            float: none;
        }
        .navbar-collapse .main-header .navbar-right {
            margin: 7.5px -15px;
        }
        .main-header .navbar-right > li {
            color: inherit;
            border: 0;
        }
    }
    .main-header .sidebar-toggle {
        float: left;
        background-color: transparent;
        background-image: none;
        padding: 15px 15px;
        font-family: fontAwesome;
    }
    .main-header .sidebar-toggle:before {
        content: "\f0c9";
    }
    .main-header .sidebar-toggle:hover {
        color: #fff;
    }
    .main-header .sidebar-toggle .icon-bar {
        display: none;
    }
    .main-header .navbar .nav > li.user > a > .fa,
    .main-header .navbar .nav > li.user > a > .glyphicon,
    .main-header .navbar .nav > li.user > a > .ion {
        margin-right: 5px;
    }
    .main-header .navbar .nav > li > a > .label {
        position: absolute;
        top: 9px;
        right: 7px;
        text-align: center;
        font-size: 9px;
        padding: 2px 3px;
        line-height: .9;
    }
    .main-header .logo {
        display: block;
        float: left;
        height: 50px;
        font-size: 20px;
        line-height: 50px;
        text-align: center;
        width: 230px;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        padding: 0 15px;
        font-weight: 300;
    }
    .main-header .navbar-brand {
        color: #fff;
    }

    @media (max-width: 767px) {
        .main-header {
            position: relative;
        }
        .main-header .logo,
        .main-header .navbar {
            width: 100%;
            float: none;
            position: relative!important;
        }
        .main-header .navbar {
            margin: 0;
        }
        .main-header .navbar-custom-menu {
            float: right;
        }
        .main-sidebar,
        .left-side {
            padding-top: 100px!important;
        }
    }



    </style>

<body>

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
                            <img src="http://localhost/SE_Repo/S.E-Final-/resources/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">Kevin Spacey</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="http://localhost/SE_Repo/S.E-Final-/resources/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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

    </div>


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

</body>
<div class="row full-calendar">
    <div class="col-sm-3">
        <div id="add-new-event">
            <h4 class="page-header">Add new event</h4>
            <div class="form-group">
                <label>Event title</label>
                <input type="text" id="new-event-title" class="form-control">
            </div>
            <div class="form-group">
                <label>Event description</label>
                <textarea class="form-control" id="new-event-desc" rows="3"></textarea>
            </div>
            <a href="#" id="new-event-add" class="btn btn-primary pull-right">Add event</a>
            <div class="clearfix"></div>
        </div>
        <div id='wrap'>
            <div id="external-events">
                <h4 class="page-header" id="events-templates-header">Draggable Events</h4>
                <div class="external-event">Work time</div>
                <div class="external-event">Conference</div>
                <div class="external-event">Meeting</div>
                <div class="external-event">Restaurants</div>
                <div class="external-event">Launch</div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="drop-remove"> remove after drop
                        <i class="fa fa-square-o small"></i>
                    </label>
                </div>
            </div>
        </div>
        </div>
    <div class="col-sm-9">
        <div id="calendar"></div>
    </div>
</div>
</html>