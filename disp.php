<?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example';
	$result = $conn->query($sql);

	if(!empty($result) && $result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo "id: " . $row["id"] . " Name: " . $row["name"] . "\n" . "\n";
		}
	}
	else{
		echo "0 results\n";
	}

	$conn->close();


/*
	if(! $retval){
		die('Could not get data: ' . mysqli_error());
	}

	while($row = mysqli_fetch_assoc($retval)){
		echo ;
	}
	echo "Fetched data successfully\n";

	mysqli_close($conn);
 */

?>
