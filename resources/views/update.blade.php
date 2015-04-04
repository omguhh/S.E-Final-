// file myAjax.php
<?php
echo 'hello world!';


//connect to database
    $a=mysql_connect("localhost","root","");
    $b=mysql_select_db("pi",$a);

// UPDATE `calender_meeting` SET `meeting_title` = 'ASSDDFGGH', `meeting_content` = 'AASDFGHJJKKL' WHERE `calender_meeting`.`fa_name` = 'ayesha sheriff' AND `calender_meeting`.`rc_id` = 'shamu' AND `calender_meeting`.`meeting_date` = '2015-04-08';

    $date = $_POST['date'];
    $desc = $_POST['desc'];
    $title = $_POST['title'];
    $name = $_POST['name'];
mysql_query("UPDATE  `calender_meeting` SET  `meeting_title` =  '" .$title. "', `meeting_content` = '" .$desc. "' WHERE `fa_name`='".$name."' AND `meeting_date` = '".$date."'") or die(mysql_error());

//this'll send the new statistics to the jquery code
$query = mysql_query("SELECT FROM `calendar_meeting` WHERE `fa_name`='".$name."'")or die(mysql_error());
$results = mysql_fetch_assoc($query);
echo json_encode($results);



?>