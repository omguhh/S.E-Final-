<?php



//connect to database
$a=mysql_connect("localhost","root","");
$b=mysql_select_db("pi",$a);

// UPDATE `calender_meeting` SET `meeting_title` = 'ASSDDFGGH', `meeting_content` = 'AASDFGHJJKKL' WHERE `calender_meeting`.`fa_name` = 'ayesha sheriff' AND `calender_meeting`.`rc_id` = 'shamu' AND `calender_meeting`.`meeting_date` = '2015-04-08';

$date = $_POST['date'];
$fname = $_POST['fname'];
$cname = $_POST['cname'];

mysql_query("DELETE FROM `calender_meeting` WHERE `calender_meeting`.`fa_name` = '".$fname."' AND `calender_meeting`.`rc_id` = '".$cname."' AND `calender_meeting`.`meeting_date` = '".$date."'") or die(mysql_error());





?>