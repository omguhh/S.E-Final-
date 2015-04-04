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
    <script src="/S.E-Final-/fullcalendar/lib/jquery.min.js"></script>
    <script src="/S.E-Final-/fullcalendar/lib/jquery-ui.custom.min.js"></script>
    <script src="/S.E-Final-/fullcalendar/lib/jquery-ui.min.js"></script>
    <script src="/S.E-Final-/fullcalendar/fullcalendar.js"></script>
    <script src="/S.E-Final-/fullcalendar/lib/moment.min.js"></script>
    <script src="/S.E-Final-/fullcalendar/fullcalendar.min.js"></script>
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Righteous'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='http://localhost/S.E-Final-/S.E-Final-/fullcalendar/fullcalendar.css'>
    <link rel="stylesheet" href="http://localhost/S.E-Final-/S.E-Final-/public/css/style_v1.css">
    <link rel="stylesheet" href="http://localhost/I'mDoneWithSE/S.E-Final-/public/css/bootstrap.css">
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
            var calendar = $('#calendar').fullCalendar({
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
                        var new_event_name = $('#newevent_name').val();
                        if (new_event_name != ''){
                            calendar.fullCalendar('renderEvent',
                                    {
                                        title: new_event_name,
                                        description: $('#newevent_desc').val(),
                                        start: start,
                                        end: end,
                                        allDay: allDay
                                    },
                                    true // make the event "stick"
                            );
                        }
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
                        CloseModalBox();
                    });
                    $('#event_change').on('click', function(){
                        calEvent.title = $('#newevent_name').val();
                        calEvent.description = $('#newevent_desc').val();
                        calendar.fullCalendar('updateEvent', calEvent);
                        CloseModalBox()
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

    @yield('content')

</div>

@include('FAfooter')

</div><!-- ./wrapper -->





</body>
</html>


