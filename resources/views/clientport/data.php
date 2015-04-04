<?php
$con = mysql_connect("localhost","root","");

if (!$con) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("pi_test", $con);

$sth = mysql_query("SELECT user_score FROM user_score WHERE MONTH(time_of_score)  = 4");
$rows = array();
$rows['name'] = 'Networth';
while($r = mysql_fetch_array($sth)) {
    $rows['data'][] = $r['user_score'];
}

$sth = mysql_query("SELECT DAY(time_of_score) AS DayScore FROM user_score WHERE MONTH(time_of_score)  = 4");
$rows1 = array();
$rows1['name'] = 'Day';
while($rr = mysql_fetch_assoc($sth)) {
    $rows1['data'][] = $rr['DayScore'];
}

$result = array();
array_push($result,$rows1);
array_push($result,$rows);



print json_encode($result, JSON_NUMERIC_CHECK);

mysql_close($con);
?>
