<?php
    include "insert.php";
    $connection = mysqli_connect("127.0.0.1","root","","railway");
    mysqli_select_db($connection,"railway");
    $id = (isset($_POST['pName']) ? $_POST['pName'] : '');
    //$id = $_POST['pName'];
    echo "person name".$id;
    $sqlDisplayQuery = "SELECT * FROM ticket WHERE passenger_name = $$_REQUEST['pName'];";
    $records = mysqli_query($connection,$sqlDisplayQuery);
?>

<html>
	<head>
		<title>Your Ticket</title>
		<center><font color="white" size="7"><u>Your Ticket Details</u></font></center>
	</head>
	<body background="railway-wallpaper.jpg">
	<center>
	<br><br>
	<pre>
		<table width="600" border="4" cellpadding="3" cellspacing="3" style="color:white" bgcolor="grey">
			<font color="white">

             <tr>
			     <th>Passenger Name</th>
			     <th>Age</th>
			     <th>ID</th>
                 <th>Mobile No</th>
                 <th>Address</th>
			     <th>Source Station</th>
			     <th>Destination Station</th>
			     <th>Date</th>
			 </tr>


			</font>

		<?php
		  while($rowvalue = mysqli_fetch_array($records))
		      {
		          echo "<tr>";
		          echo "<td>".$rowvalue['Passenger Name']."</td>";
		          echo "<td>".$rowvalue['Age']."</td>";
		          echo "<td>".$rowvalue['ID Card']."</td>";
		          echo "<td>".$rowvalue['Mobile No']."</td>";
		          echo "<td>".$rowvalue['Address']."</td>";
		          echo "<td>".$rowvalue['Boarding Station']."</td>";
                echo "<td>".$rowvalue['Destination Station']."</td>";
                echo "<td>".$rowvalue['date_of_journey']."</td>";
		      }
		?>
	</table>
</pre>
        <form action=select.html>
	       <input type=submit value="Back To Home Page">
	       </form>
	</center>

	</body>
</html>
