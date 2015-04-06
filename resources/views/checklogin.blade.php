

// username and password sent from form
$myusername=$_POST['username'];

echo $myusername;

if($myusername == 'admin'){
    header('http://localhost/SE_Repo/S.E-Final-/resources/views/checklogin.php');
    return redirect()->route('admin_dashboard/');
    {!! HTML::linkRoute('browsemarket', 'Market Insights',['class'=>'page-scroll']) !!}
}

if($myusername==''){
    header('Location:dashboard.html');
}

if($myusername=='naiyarah hussain'){
    header('Location:dashboard.html');
}
