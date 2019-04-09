<!DOCTYPE html>
<html>
	<head>
		<title>
			HTML Tables
		</title>
	</head>

	<Body>
		<table border = "1" width = "800" height = "1000">
			<tr>
				<!--
				<td>Row 1, Column 1</td>
				<td>Row 1, Column 2</td>
				<td>Row 1, Column 3</td>
				<td>Row 1, Column 4</td>
				<td>Row 1, Column 5</td>
				-->

				<td align="center"><?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example LIMIT 1';
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

?></td>
				<td align="center"><?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example LIMIT 1, 1';
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

?></td>
				<td align="center"><?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example LIMIT 2, 1';
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

?></td>
				<td align="center"><?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example LIMIT 3, 1';
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

?></td>
				<td align="center"><?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example LIMIT 4, 1';
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

?></td>
				<td align="center"><?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example LIMIT 5, 1';
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

?></td>
				<td align="center"><?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example LIMIT 6, 1';
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

?></td>
				<td align="center"><?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example LIMIT 7, 1';
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

?></td>
				<td align="center"><?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example LIMIT 8, 1';
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

?></td>
				<td align="center"><?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example LIMIT 9, 1';
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

?></td>
				<td align="center"><?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example LIMIT 10, 1';
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

?></td>
				<td align="center"><?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example LIMIT 11, 1';
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

?></td>

			</tr>

			<tr>
				<!--
				<td>Row 2, Column 1</td>
				<td>Row 2, Column 2</td>
				<td>Row 2, Column 3</td>
				<td>Row 2, Column 4</td>
				<td>Row 2, Column 5</td>
				-->

				<td align="center"><?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example LIMIT 12, 1';
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

?></td>
				<td align="center"><?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example LIMIT 13, 1';
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

?></td>
				<td align="center"><?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example LIMIT 14, 1';
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

?></td>
				<td align="center"><?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example LIMIT 15, 1';
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

?></td>
				<td align="center"><?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example LIMIT 16, 1';
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

?></td>
				<td align="center"><?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example LIMIT 17, 1';
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

?></td>
				<td align="center"><?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example LIMIT 18, 1';
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

?></td>
				<td align="center"><?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example LIMIT 19, 1';
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

?></td>
				<td align="center"><?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example LIMIT 20, 1';
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

?></td>
				<td align="center"><?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example LIMIT 21, 1';
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

?></td>
				<td align="center"><?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example LIMIT 22, 1';
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

?></td>
				<td align="center"><?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "tushar";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if(! $conn){
		die("Could not connect: " . mysql_error());
	}

	mysqli_select_db($conn, "test");
	$sql = 'SELECT * FROM example LIMIT 23, 1';
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

?></td>
			</tr>
		</table>
	</Body>
</html>
