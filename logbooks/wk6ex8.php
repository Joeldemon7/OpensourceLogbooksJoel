<?php
    include("myfunctions.inc");
    html_header("My second function demo");
    
    $taxAllowance = 1000;
    
    $taxAmount = calculatetax(15000, 22, $taxAllowance);
    
    echo "I pay £" . $taxAmount . " tax";
    
    html_footer();
?>