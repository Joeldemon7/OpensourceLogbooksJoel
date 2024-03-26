<?php
    $db = mysqli_connect("localhost", "root", "", "db1_gwalke01");

    // Obtain the file sent to the server within the response.
    $image = $_FILES['monsterimage']['tmp_name']; 
    $audio = $_FILES['monsteraudio']['tmp_name'];

    // Get the file binary data
    $imagedata = addslashes(file_get_contents($image));
    $audiodata = addslashes(file_get_contents($audio));
   
    $name = $_POST['txtname'];

    $sql = "INSERT INTO monster (name, image, audio) VALUES ('$name', '$imagedata', '$audiodata')";

    $result = mysqli_query($db, $sql);

    if ($result) {
        echo "Monster saved successfully.";
    } else {
        echo "Error: " . mysqli_error($db);
    }

    mysqli_close($db);
?>