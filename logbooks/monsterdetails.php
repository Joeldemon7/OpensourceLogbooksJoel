<!DOCTYPE html>
<html>
<head>
    <title>Monster Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h2>Monster Details</h2>
    
    <?php
    // Check if form data is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Form data is submitted, process it
        
        $conn = mysqli_connect("localhost", "root", "", "db1_gwalke01");

        $name = $_POST['txtname'];
        $image_tmp = $_FILES['monsterimage']['tmp_name'];
        $audio_tmp = $_FILES['monsteraudio']['tmp_name'];

        // Get the file binary data
        $imagedata = addslashes(file_get_contents($image_tmp));
        $audiodata = addslashes(file_get_contents($audio_tmp));

        $sql = "INSERT INTO monster (name, image, audio) VALUES ('$name', '$imagedata', '$audiodata')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<p>Monster saved successfully.</p>";
        } else {
            echo "<p>Error: " . mysqli_error($conn) . "</p>";
        }

        mysqli_close($conn);
    } else {
        // Form data is not submitted, display the form
    ?>
    
    <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label for="txtname">Monster name :</label>
            <input type="text" id="txtname" name="txtname" class="form-control" />
        </div>
        <div class="form-group">
            <label for="monsterimage">Monster image :</label>
            <input type="file" id="monsterimage" name="monsterimage" accept="image/jpeg" class="form-control" />
        </div>
        <div class="form-group">
            <label for="monsteraudio">Monster Sound :</label>
            <input type="file" id="monsteraudio" name="monsteraudio" accept="audio/basic" class="form-control" />
        </div>
        <input type="submit" class="btn btn-default" value="Save" />
    </form>
    
    <?php } ?>
</div>

</body>
</html>