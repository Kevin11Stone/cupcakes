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



if(isset($_POST['flavor']) && !empty($_POST['name'])){
    $flavorArray = $_POST['flavor'];
    $sum = 0;

    echo "<h1>Thank you, " . $_POST['name'] .  ", for your order!</h1>";    echo "<h3>Order Summary: </h3>";
    foreach ( $flavorArray as $flavor ){
        $sum += 3.50;
        echo " - $flavor";
        echo "<br>";
    }
    echo "<br>";
    echo "Order Total: $" . $sum;
}
else {
    echo "<h1>Please enter your name and choose a flavor</h1>";
}


?>




</body>
</html>