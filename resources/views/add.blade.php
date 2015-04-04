
<?php


//connect to database
$a=mysql_connect("localhost","root","");
$b=mysql_select_db("pi",$a);

// UPDATE `calender_meeting` SET `meeting_title` = 'ASSDDFGGH', `meeting_content` = 'AASDFGHJJKKL' WHERE `calender_meeting`.`fa_name` = 'ayesha sheriff' AND `calender_meeting`.`rc_id` = 'shamu' AND `calender_meeting`.`meeting_date` = '2015-04-08';

//INSERT INTO `pi`.`calender_meeting` (`fa_name`, `rc_id`, `meeting_title`, `meeting_date`, `meeting_content`) VALUES ('ayesha sheriff', 'shamu', 'qwertyui', '2015-04-16', 'qwertyuio');

$fname = $_POST['fname'];
$cname = $_POST['cname'];

$title = $_POST['title'];
        echo $title;
$desc = $_POST['desc'];
        echo $desc;
$date = $_POST['date'];
        echo $date;

mysql_query("INSERT INTO `pi`.`calender_meeting` (`fa_name`, `rc_id`, `meeting_title`, `meeting_date`, `meeting_content`) VALUES ('".$fname."', '".$cname."', '".$title."', '".$date."', '".$desc."');") or die(mysql_error());




?>