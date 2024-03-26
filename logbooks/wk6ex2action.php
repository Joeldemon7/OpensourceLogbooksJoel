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

// Check if the delete button is clicked
if (isset($_POST['btndelete'])) {
    // Get the name of the record to delete
    $name = $_POST['txtname'];

    // SQL statement to delete the record
    $sql = "DELETE FROM test WHERE name='$name'";

    // Execute delete SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Check if the ID is provided in the query string
if (isset($_GET['id'])) {
    // Get the ID from the query string
    $id = $_GET['id'];

    // SQL statement to retrieve the details of the person with the given ID
    $sql = "SELECT * FROM test WHERE name='$id'";

    // Execute select SQL statement
    $result = $conn->query($sql);

    // Fetch the row
    $row = mysqli_fetch_assoc($result);
}

// Close connection
$conn->close();
?>

<html>
<body>
<?php if (isset($row)) : ?>
<form action="" method="post">
    Name :
    <input type="text" name="txtname" value="<?php echo $row['name']; ?>" readonly /><br>
    Phone number :
    <input type="text" name="txttelno" value="<?php echo $row['phone_number']; ?>" /><br>
    Email :
    <input type="text" name="txtemail" value="<?php echo $row['email']; ?>" /><br>
    <input type="submit" name="btnsubmit" value="Save Changes"/>
    <input type="submit" name="btndelete" value="Delete Record"/>
</form>
<?php endif; ?>
</body>
</html>