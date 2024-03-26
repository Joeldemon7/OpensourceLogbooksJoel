<?php
	$sql = "INSERT INTO test (name,email,phone_number) ";
	$sql = $sql . " values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";

	// Connect to server and select database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db1_gwalke01"; // Substitute your MySQL username for %USERNAME%

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	// Execute sql statement	
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	// Close the database connection
	$conn->close();

	$sql = "SELECT * from test";
	
	// Connect to server and select database
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	// Execute sql statement	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // Output data of each row
	    while ($row = $result->fetch_assoc()) {
	        echo "$row[name]  $row[email]  $row[phone_number] <br/>";
	    }
	} else {
	    echo "0 results";
	}

	// Close the database connection
	$conn->close();
?>