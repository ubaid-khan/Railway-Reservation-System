<?php
$connection = mysqli_connect("127.0.0.1","root","","railway");
mysqli_select_db($connection,"railway");
$sqlDisplayPassenger = "SELECT * FROM ticket";
$records = mysqli_query($connection,$sqlDisplayPassenger);?>

<html>
	<head>
		<title>Booked Tickets</title>
        <link rel="stylesheet" type="text/css" href="CSSFile.css">
        <h1>Booked Ticket History</h1>
	</head>

	<body background="railway-wallpaper.jpg">
	<center>
	<br><br>
		<table width="600" border="4" cellpadding="3" cellspacing="3">
			<font color="white">
			<tr>
      	<th>Passenger Name</th>
				<th>Age</th>
				<th>ID</th>
				<th>Source station</th>
				<th>Destination station</th>
				<th>Date of journey</th>
			</font>

		<?php
		while($rowvalue = mysqli_fetch_array($records))
		  {
		      echo "<tr>";
		      echo "<td>".$rowvalue['Passenger_Name']."</td>";
		      echo "<td>".$rowvalue['Age']."</td>";
		      echo "<td>".$rowvalue['ID_Card']."</td>";
		      echo "<td>".$rowvalue['Boarding_Station']."</td>";
		      echo "<td>".$rowvalue['Destination_Station']."</td>";
		      echo "<td>".$rowvalue['Date_Of_Journey']."</td>";

       /* $id = $rowvalue['passenger_name'];
		echo "<td>"."<form action='delete.php'><input type='hidden' name='id' value='$id' /><input type='submit' value='Cancel Ticket'></form>"."</td>";*/
		}
		?>

		</table>


	<form  action="home.html">
	   <button class="button">Back to home page</button>
            </form>



	</center>
	</body>
</html>
