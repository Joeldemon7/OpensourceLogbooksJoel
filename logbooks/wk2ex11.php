<?php
// Define an associative array $mymarks with module codes as keys and marks as values
$mymarks = array(
    "CS101" => 85,
    "CS102" => 72,
    "CS103" => 68,
    "CS104" => 90,
    "CS105" => 78,
    "CS106" => 95
);

// Display marks using a loop
foreach ($mymarks as $module => $mark) {
    echo "Module $module mark: $mark <br/>";
}

// Calculate average mark
$total = 0;
foreach ($mymarks as $mark) {
    $total = $total + $mark;
}
$average = $total / 6;

// Output average mark
echo "Average mark: $average";
?>