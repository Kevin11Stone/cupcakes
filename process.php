<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Process</title>
</head>
<body>

<?php
if(isset($_POST['name'])){
    echo "<h1>Thank you, " . $_POST['name'] .  " for your order!</h1>";
}



    $flavorArray = $_POST['flavor'];
    $sum = 0;


    echo "<h3>Order Summary: </h3><br>";
    foreach ( $flavorArray as $flavor ){
        $sum += 3.50;
        echo " - $flavor";
        echo "<br>";
    }

    echo "Order Total: $" . $sum;

?>




</body>
</html>