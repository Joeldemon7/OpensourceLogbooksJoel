<?php
if ($_POST["txtage"] < 21) {
    echo "You are under 21 years old<br/>";
} else {
    echo "You are  21 years old or over<br/>";
}

if ($_POST["txtgender"] == "Male") {
    echo "You are a Male<br/>";
} elseif ($_POST["txtgender"] == "Female") {
    echo "You are a Female<br/>";
} else {
    echo "Your gender is not specified<br/>";
}
?>