<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcakes</title>
</head>
<body>
<h1>Cupcake Fundraiser</h1>

<form method="post" action="confirm.php">

    <p>Your Name: </p>
    <label><input type="text"></label><br>

    <h3>Cupcake Flavors</h3>
    <label><input name="flavor[]"  type="checkbox" value="the grasshopper">The Grasshopper</label><br>
    <label><input name="flavor[]"  type="checkbox" value="whiskey maple bacon">Whiskey Maple Bacon</label><br>
    <label><input name="flavor[]"  type="checkbox" value="carrot walnut">Carrot Walnut</label><br>
    <label><input name="flavor[]"  type="checkbox" value="salted caramel cupcake">Salted Caramel Cupcake</label><br>
    <label><input name="flavor[]"  type="checkbox" value="red velvet">Red Velvet</label><br>
    <label><input name="flavor[]"  type="checkbox" value="lemon drop">Lemon Drop</label><br>
    <label><input name="flavor[]"  type="checkbox" value="tiramisu">Tiramisu</label><br>

    <input type="submit" value="Order">

</form>
</body>
</html>