<?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysqli_error());
	}

	$sql = 'DELETE FROM example WHERE name="inserted"';

	mysqli_select_db($conn, "test");

	if($conn->query($sql) === TRUE){
		echo "Record deleted successfully\n";
	} else {
		echo "Error deleting record: " . $conn->error;
	}

	$conn->close();

?>
