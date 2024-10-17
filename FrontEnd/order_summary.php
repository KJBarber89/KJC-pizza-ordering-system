<?php
require "include.php";

$pizzaSize = htmlspecialchars(filter_input(INPUT_POST,"pizza-size"));
$pizzaCrust = htmlspecialchars(filter_input(INPUT_POST,"crust"));
$firstName = htmlspecialchars(filter_input(INPUT_POST,"first-name"));
$lastName = htmlspecialchars(filter_input(INPUT_POST,"last-name"));
$address = htmlspecialchars(filter_input(INPUT_POST,"address"));
$pizzaToppings = filter_input(INPUT_POST,"toppings", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
$totalPrice = htmlspecialchars(filter_input(INPUT_POST,"total-price"));

if ($pizzaSize == NULL || $pizzaCrust == NULL || $firstName == NULL || $lastName == NULL || $address == NULL || $totalPrice == NULL) {
    echo "A vital value has returned NULL.";
    exit();
}

if ($pizzaToppings == NULL) {
    $pizzaToppings = [];
}

insertOrderInfo($firstName, $lastName, $address, $pizzaSize, $pizzaCrust, implode(',', $pizzaToppings), $totalPrice);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <header>
        <h1><?=$header?></h1>
    </header>
    <nav>
        <div>
            <ul>
                <li><a class="currentPage" href="index.php">Home</a></li>
                <li><a href="order.php">Order</a></li>
                <li><a href="login.php">Log In</a></li>
            </ul>
        </div>
    </nav>
    <main>
    <div>
        <h2>Order summary</h2>
        <label id="pizza-size">Pizza Size : <?=$pizzaSize?></label>
        <br>
        <label id="crust">Pizza Crust : <?=$pizzaCrust?></label>
        <br>
        <label id="crust">Pizza Toppings : <?=implode(', ',$pizzaToppings)?></label>
        <br>
        <label id="first-name">First Name : <?=$firstName?></label>
        <br>
        <label id="last-name">Last Name : <?=$lastName?></label>
        <br>
        <label id="address">Address : <?=$address?></label>
        <br>
        <label id="total-price">Total Price : <?=$totalPrice?></label>
    </main>
    <script src="scripts.js"></script>
</body>
</html>
