<?php
function html_header($pageTitle)
{
    echo "<html><title>$pageTitle</title></head>";
    echo "<body>";
}

function html_h1($text) {
    echo "<h1>$text</h1>\n";
}

function html_h2($text) {
    echo "<h2>$text</h2>\n";
}

function html_footer() {
    echo "</body>\n";
    echo "</html>\n";
}

function calculatetax($income, $taxRate, $taxAllowance)
    {   
        // Deduct tax allowance from income
        $taxableIncome = $income - $taxAllowance;
        
        // Calculate tax
        $taxAmount = $taxableIncome * ($taxRate / 100);
        
        return $taxAmount;
    }
?>