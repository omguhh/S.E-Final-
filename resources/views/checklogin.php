<?php


// username and password sent from form 
$myusername=$_POST['username'];

if($myusername == 'admin'){
    header('http://localhost/SE_Repo/S.E-Final-/resources/views/checklogin.php');
}

if($myusername==''){
    header('Location:dashboard.html');
}

if($myusername=='naiyarah hussain'){
    header('Location:dashboard.html');
}

?>