<?php
    $lottodate = date("Ymd");
    echo "The lottery numbers for $lottodate are ";
    $numbers = [];
    for($n = 0; $n <= 6; $n++) {
        $numbers[] = rand(1, 49);
        echo "<br/> $numbers[$n]";
    }

    
    $conn = mysqli_connect("localhost", "root", "", "db1_gwalke01");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO lotto (lottodate, number1, number2, number3, number4, number5, number6) VALUES ('$lottodate', $numbers[0], $numbers[1], $numbers[2], $numbers[3], $numbers[4], $numbers[5])";

    if (mysqli_query($conn, $sql)) {
        echo "<br/>This week's numbers have been saved";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>