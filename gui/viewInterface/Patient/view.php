 <?php

 	$servername = "localhost";
 	$username = "root";
 	$password = "mynewpassword";

 	echo "connecting...<br>";
	// Create connection
	 $conn = mysqli_connect($servername, $username, $password);

	// Check connection
	 if (!$conn) {
	 	die("Connection failed: " . mysqli_connect_error());

	 }

	 echo "connceted<br>";


	 $sql = "SELECT * FROM Patient";
	 $result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
    	// output data of each row
    	while($row = mysqli_fetch_assoc($result)) {
        	echo "id: " . $row["ID"]. " - Name: " . $row["Name"]. " " . $row["Age"]. "<br>";
    	}
		} 		else {
    	echo "0 results";
	}

	 mysqli_close($conn);
?> 