<?php	
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db1_gwalke01";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL statement to retrieve all records
    $sql = "SELECT * FROM test";

    // Execute select SQL statement
    $result = $conn->query($sql);
?>

<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($result))
{
    echo "<a href=\"wk6ex2action.php?id={$row['name']}&telno={$row['phone_number']}&email={$row['email']}\">{$row['name']}</a><br/>";  	
}

// Close connection
$conn->close();
?>
</body>
</html>
