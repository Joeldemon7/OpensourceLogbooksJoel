<html>
<head>
    <title>Select Size</title>
</head>
<body>
    <form action="selectcolour.php" method="post">
        Select the size of widgets you are ordering<br>
        <input type="radio" name="selsize" value="Small" checked> Small (£15.75)<br>
        <input type="radio" name="selsize" value="Medium"> Medium (£16.75)<br>
        <input type="radio" name="selsize" value="Large"> Large (£17.75)<br>
        <input type="radio" name="selsize" value="ExtraLarge"> Extra Large (£18.75)<br><br>
        <input type="hidden" name="selqty" value="<?php echo $_POST['selqty']; ?>">
        <input type="submit" value="Next"/>
    </form>
</body>
</html>