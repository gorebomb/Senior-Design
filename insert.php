<?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysqli_error());
	}

	$sql = 'INSERT INTO example'.
		'(id, name)'. 
		'VALUES (null, "inserted")';

	mysqli_select_db($conn, "test");
	$result = $conn->query($sql);

	if(! $result){
		die("Could not enter data " . mysql_error());
	}

	echo "Entered data successfully\n";

	$conn->close();

?>
