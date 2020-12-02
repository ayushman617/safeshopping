<?php

session_start();

require 'database.php';

$message = '';

if(!empty($_POST['date']) && !empty($_POST['time'])):
	
	// Enter the new user in the database
	$sql = "INSERT INTO users (date, time) VALUES (:date ,:time)";
	$stmt = $conn->prepare($sql);

	$stmt->bindParam(':date', $_POST['date']);
	$stmt->bindParam(':time',$_POST['time']);

	if( $stmt->execute() ):
		$message = 'Successfully Slot Booked';
	else:
		$message = 'Sorry there must have been an issue creating your account';
	endif;
endif;

?>
<!DOCTYPE html>
<html>
<body style="background-color:powderblue;">
	<center><font size="90"><font color="green"><h1>BOOKING YOUR SLOTS HERE</h11> </font></font></center>

<marquee direction="left">THE SMART AND SAFEST WAY OF SHOPPING EASILY DURING PENDAMIC OF COVID 19</marquee></font>
<hr>
	
<center>
<form action="book time and date.php" method="POST">
  <label for="Booking">Booking date:</label>
  <input type="date" id = "date" name="ITS YOUR BOOKING DATE">

  <label for="appt">Select a time:</label>
  <input type="time" id="time" name="VISIT TIME">

  <input type="submit">

</form>
</center>
<br><br><br><br>

<p><strong></strong> .</p>

</body>
</html>
