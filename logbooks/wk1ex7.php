<html>
<body>
<?php
    // Define hourly rate and hours per week
    $hourlyrate = 5.75;
    $hoursperweek = 40;

    // Calculate gross wage
    $gross = $hourlyrate * $hoursperweek;

    // Define tax rate
    $taxRate = 0.22; // 22%

    // Calculate tax amount
    $tax = $gross * $taxRate;

    // Calculate net wage after tax
    $net = $gross - $tax;

    // Display net wage
    echo $net;
?>
</body>
</html>
