<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="slick Login">
    <meta name="author" content="Webdesigntuts+">
    <link rel="stylesheet" type="text/css" href="http://localhost/SE_Repo/S.E-Final-/public/css/popup.css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="http://www.modernizr.com/downloads/modernizr-latest.js"></script>
    <script type="text/javascript" src="/S.E-Final-/public/js/loginpopup.js"></script>

    <script>

        function myFunction() {

            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if(password!="" && username!="") {
                if (username == "admin") {
                    window.open("http://localhost/SE_Repo/S.E-Final-/public/FADashboard");
                    alert("You have logged in as "+username);
                }

                if (username == "client") {
                    window.open("http://localhost/SE_Repo/S.E-Final-/public/FADashboard");
                    alert("You have logged in as "+username);
                }

                if (username == "fa") {
                    window.open("hhttp://localhost/SE_Repo/S.E-Final-/public/FADashboard");
                    alert("You have logged in as "+username);
                }

            }

            if(password=="" || username==""){
                alert("Please fill all the fields");
            }
        }


    </script>

</head>
<body >

    <section class="content">
        <form id="slick-login">
            <label for="username">username</label><input type="text" id="username" name="username"  placeholder="Username">
            <label for="password">password</label><input type="password" id="password" name="password"  placeholder="password">
            <input onclick="myFunction()" type="submit" value="Log In">
        </form>
    </section>

</body>
</html>
