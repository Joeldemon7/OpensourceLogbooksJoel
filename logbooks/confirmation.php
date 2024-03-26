<?php
   $qty = $_POST['selqty'];
   $size = $_POST['selsize'];
   
   switch($size) {
       case 'Small':
           $price = 15.75;
           break;
       case 'Medium':
           $price = 16.75;
           break;
       case 'Large':
           $price = 17.75;
           break;
       case 'ExtraLarge':
           $price = 18.75;
           break;
       default:
           $price = 0;
   }
   
   $total = $qty * $price;
?>

<html>
<head>
    <title>Order Confirmation</title>
</head>
<body>
    <h2> Your order details:</h2>
    <p>Qty of widgets: <?php echo $qty; ?></p>
    <p>Selected size: <?php echo $size; ?></p>
    <p>Price per widget: £<?php echo $price; ?></p>
    <p>Total cost: £<?php echo $total; ?></p>
</body>
</html>