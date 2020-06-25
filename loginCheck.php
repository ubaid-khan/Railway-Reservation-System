<!DOCTYPE html>
<html>
    <head>
        <script>
            var preloader = document.getElementById('loading');
            function myFunction(){
	       preloader.style.display  = 'none';
            }
        </script>
        <style>
            #loading{
	           position:fixed;
	           width:100%;
	           height:100%;
	           background:#fff
	           url('https://loading.io/spinners/progress-pie/lg.percent-circular-preloader-gif.gif') no-repeat center;
	           z-index:99999;
                }

        </style>

    </head>

    <body onload="myFunction()">
        <div id="loading">

        </div>

    </body>

</html>





<?php

$connection = mysqli_connect("127.0.0.1","root","","railway");

mysqli_select_db($connection,"railway");


$username = $_POST['username'];
$password = $_POST['password'];

$sqlSearchUserQuery = "SELECT * FROM users where username = '$username' and password = '$password';";

$records = mysqli_query($connection,$sqlSearchUserQuery);


while($rowvalue = mysqli_fetch_array($records,MYSQLI_ASSOC))
    {

        if($rowvalue['username'] == $username && $rowvalue['password'] == $password)
            {
		      echo("redirecting to the dashboard");
		      header("refresh:3; url=home.html");
            }

        else{
                echo "Invalid username or password ! ";
                echo "Redirecting to login page !";
		      header("refresh:3; url=login.html");
                break;
        }

}


?>
