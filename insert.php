
<?php

$connection = mysqli_connect("127.0.0.1","root","","railway");

if (!$connection)
  die('Could not connect: ' . mysql_error());

mysqli_select_db($connection,"railway");

$passenger_name = $_POST['pName'];
$passenger_age = $_POST['pAge'];
$passenger_ID = $_POST['pID'];
$passenger_mobileno = $_POST['pMobNo'];
$passenger_address = $_POST['address'];
$source_station = $_POST['srcstation'];
$destination_station = $_POST['deststation'];
$date = $_POST['date'];


$id = (isset($_POST['id']) ? $_POST['id'] : '');


$sql="INSERT INTO ticket(Passenger_Name,Age,ID_Card,Mobile_No,Address,Boarding_Station,Destination_Station,Date_Of_Journey)VALUES
('$passenger_name',$passenger_age,'$passenger_ID',$passenger_mobileno,'$passenger_address','$source_station','$destination_station','$date');";


if (!mysqli_query($connection,$sql))
  die('Error: ' . mysqli_error($connection));

 echo "<script type='text/javascript'>alert('Ticket Booked Successfully');</script>";

    $url = "home.html";
    header("refresh:3; url=$url");
    mysqli_close($connection);
?>
