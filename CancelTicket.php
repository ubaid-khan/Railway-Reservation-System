<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "railway";

    $connection = mysqli_connect($servername,$username,$password,$database_name);

    if(!$connection){
        die('Could not connect to the database'.mysqli_connect_error);
    }

    $record_tobe_deleted = $_POST['cancelor'];

    $sqlDeleteQuery = "delete from ticket where passenger_name = '$record_tobe_deleted'; ";

    if(mysqli_query($connection,$sqlDeleteQuery)){
        echo "Record deleted successfully";
    }
    else{
        die("Error deleting record !".mysqli_error($connection));
    }
    
    

    $url = "select.html";

    header("refresh:3; url = $url");

    mysqli_close($connection)
?>

